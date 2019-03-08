<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Hash;
use App\User;
use App\Models\Book;
use App\Models\Borrow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function profile()
    {
        return view('frontend.user.profile');
    }

    public function showChangePasswordForm()
    {
        return view('frontend.user.changepw');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if(Hash::check($request->oldPassword, Auth::User()->password))
        {                                  
            User::findOrFail(Auth::User()->id)->update([
                'password' => $request->password,
            ]);

            return redirect()->route('profile')->with('message', trans('user.msg.user.update_success'));
        }
        
        return redirect()->back()->with('oldPassword', trans('user.msg.user.incorrect_password'));
    }

    public function favorite()
    {  
        $books = Auth::user()->favorites()->paginate(18);

        return view('frontend.user.favorite', compact('books'));
    }

    public function showBorrowForm($id)
    {
        $book = Book::findorFail($id);

        return view('frontend.user.borrow', compact('book'));
    }

    public function borrow(Request $request, $id)
    {
        if($this->checkBorrowBook($id)){
            return redirect()->back()->with('error', trans('user.msg.borrow.borrowed'));
        }

        if(!$this->checkAvailableBook($id)){
            return redirect()->back()->with('error', trans('user.msg.borrow.out_of_book'));
        }
        
        $date = Carbon::now();
        if($date->format('Y-m-d') > $request->starttime){
            return redirect()->back()->with('error', trans('user.msg.borrow.borrow_date_less_than_now'));
        }

        if($request->starttime <= $request->endtime){
            DB::beginTransaction();
                try {
                    Borrow::create([
                        'book_id' => $id,
                        'user_id' => Auth::id(),
                        'start_time' => $request->starttime,
                        'end_time' => $request->endtime,
                        'status' => 1
                    ]);

                    $book = Book::findorFail($id);
                    $book->quantity = $book->quantity - 1;
                    $book->update();
                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollback();

                    Log::error($e);
                }

            return redirect()->route('bookcase')->with('success', trans('user.msg.borrow.update_success')); 
        }

        return redirect()->back()->with('error', trans('user.msg.borrow.borrow_less_than_return'));
    }

    public function checkAvailableBook($id)
    {
        $book = Book::find($id);
        if($book->quantity > 0){
            return true;
        }

        return false;
    }

    public function checkBorrowBook($id)
    {
        $borrowIsset = Borrow::where('book_id', $id)->first();
        if(empty($borrowIsset)){
            return true;
        }

        $borrowIsset = Borrow::where('book_id', $id)->where('status', config('customs.book.status.returned'))->first();
        if($borrowIsset){
            return true;
        }

        return false;
    }

    public function showBookCaseForm()
    {
        $borrows = Borrow::with('book')->where('user_id', auth()->id())
        ->orderBy('id', 'desc')->paginate(10);

        return view('frontend.user.bookcase', compact('borrows'));
    }

    public function cancelBorrowBook($id)
    {
        $borrow = Borrow::findOrFail($id);
        if($borrow->user_id == auth()->id()){
            $borrow->update(['status' => config('customs.book.status.cancel')]);

            return redirect()->back();
        }
        
        return abort('403');
    }
}
