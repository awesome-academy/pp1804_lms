<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use App\User;
use Auth;
use Hash;

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
            $user = User::findOrFail(Auth::User()->id)->update([
                'password' => $request->password,
            ]);

            return redirect()->route('profile')->with('message', 'Cập nhật password thành công!');
        }
        
        return redirect()->back()->with('oldPassword', 'Mật khẩu cũ không chính xác.');
    }

    public function favorite()
    {  
        $books = Auth::user()->favorites()->paginate(18);

        return view('frontend.user.favorite', compact('books'));
    }
}
