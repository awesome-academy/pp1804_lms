@extends('frontend.master')

@section('title', 'Trang chủ')

@section('header')
    
@endsection

@section('content')
<!-- Hero -->
<div class="container">
    <div class="row justify-content-lg-between align-items-lg-center py-5">
        <div class="col-lg-6">
            <h1 class="display-4">Mượn sách thật dễ dàng với hệ thống mượn sách trực tuyến.</h1>
            <p class="lead mb-4">Hàng nghìn đầu sách được cập nhật hàng ngày.</p>
            <a class="btn btn-pill btn-primary" href="book.html" role="button">Tôi Muốn Mượn Sách</a>
        </div>
        <div class="col-lg-6">
            <img src="img/wireless.jpg" class="d-none d-lg-block img-fluid img-thumbnail" alt="Workspace">
        </div>
    </div>
</div>

<div class="bg-skew bg-skew-light">

    <!-- Icon blocks -->
    <div class="container">
        <div class="row pt-5">
            <div class="col-sm-6 col-md-4 mb-4 mb-md-5">
                <div class="pr-lg-3">
                    <span class="icon icon-primary mb-3">
                        <i class="icon-inner fab fa-accessible-icon" aria-hidden="true"></i>
                    </span>
                    <h3 class="h4">Accessible</h3>
                    <p class="mb-md-0">Built with accessibility in mind and following best practices.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-md-5">
                <div class="pr-lg-3">
                    <span class="icon icon-primary mb-3">
                        <i class="icon-inner fas fa-mobile-alt" aria-hidden="true"></i>
                    </span>
                    <h3 class="h4">Mobile First</h3>
                    <p class="mb-md-0">Mobile-first flexbox grid to build layouts of all shapes and sizes.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-md-5">
                <div class="pr-lg-3">
                    <span class="icon icon-primary mb-3">
                        <i class="icon-inner fab fa-font-awesome-flag" aria-hidden="true"></i>
                    </span>
                    <h3 class="h4">Font Awesome</h3>
                    <p class="mb-md-0">More than 1200 vector icons from the web's most popular icon set.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-md-5">
                <div class="pr-lg-3">
                    <span class="icon icon-primary mb-3">
                        <i class="icon-inner fas fa-code" aria-hidden="true"></i>
                    </span>
                    <h3 class="h4">Valid Code</h3>
                    <p class="mb-md-0">W3C valid code to ensure the site works properly on all major browsers.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-md-5">
                <div class="pr-lg-3">
                    <span class="icon icon-primary mb-3">
                        <i class="icon-inner fab fa-sass" aria-hidden="true"></i>
                    </span>
                    <h3 class="h4">Sass Files</h3>
                    <p class="mb-md-0">Easily customize your site modifying the source scss files.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-md-5">
                <div class="pr-lg-3">
                    <span class="icon icon-primary mb-3">
                        <i class="icon-inner fab fa-gulp" aria-hidden="true"></i>
                    </span>
                    <h3 class="h4">Gulp</h3>
                    <p class="mb-md-0">Automated workflow for your development tasks.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to action -->
    <hr class="sep border-primary">
    <div class="container py-5">
        <div class="text-center">
            <h2 class="mb-4">Build an awesome site</h2>
            <div class="mb-4">
                <a class="btn btn-pill btn-primary" href="#" role="button">Get started now</a>
            </div>
            <a class="link-cta" href="#">Learn More</a>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="container">
        <h2 class="h3 mt-5 mb-4 text-center">What people are saying…</h2>
        <div class="row py-5">
            <div class="col-md">
                <blockquote class="bg-white rounded shadow mb-4 p-4 p-lg-5 text-center">
                    <img class="avatar avatar-md mb-4" src="img/leo-gill.jpg" alt="Leo Gill">
                    <p class="text-secondary">Boost theme is awesome! We've seen amazing results already.</p>
                    <cite class="small text-uppercase">Leo Gill</cite>
                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="bg-white rounded shadow mb-4 p-4 p-lg-5 text-center">
                    <img class="avatar avatar-md mb-4" src="img/renee-sims.jpg" alt="Renee Sims">
                    <p class="text-secondary">It really saves me time and effort. Boost theme is exactly what our business has been lacking.</p>
                    <cite class="small text-uppercase">Renee Sims</cite>
                </blockquote>
            </div>
            <div class="col-md">
                <blockquote class="bg-white rounded shadow mb-4 p-4 p-lg-5 text-center">
                    <img class="avatar avatar-md mb-4" src="img/dallas-kwok.jpg" alt="Dallas Kwok">
                    <p class="text-secondary">Boost theme impressed me on multiple levels.</p>
                    <cite class="small text-uppercase">Dallas Kwok</cite>
                </blockquote>
            </div>
        </div>
    </div>

</div><!-- end bg-skew -->

<!-- Features -->
<div class="container">
    <div class="row justify-content-lg-between align-items-lg-center py-4 py-lg-5">
        <div class="col-lg-5 mb-4 mb-lg-0">
            <h2>A new look</h2>
            <hr class="sep border-primary ml-0 mb-3 text-left">
            <p>Since this theme is based on Bootstrap, it includes all Bootstrap itself does, but with new aesthetics and some extra classes.</p>
        </div>
        <div class="col-lg-6">
            <img src="img/people.jpg" class="img-fluid img-thumbnail" alt="People working with a laptop">
        </div>
    </div>
    <div class="row justify-content-lg-between align-items-lg-center py-4 py-lg-5">
        <div class="col-lg-5 order-lg-2 mb-4 mb-lg-0">
            <h2>Easy to customize</h2>
            <hr class="sep border-primary ml-0 mb-3 text-left">
            <p>Based on the Bootstrap 4 codebase, Boost's code is easy to understand and to customize.</p>
        </div>
        <div class="col-lg-6 order-lg-1">
            <img src="img/woman.jpg" class="img-fluid img-thumbnail" alt="Woman talking on the phone">
        </div>

    </div>
</div>

<div class="bg-skew bg-skew-light">

    <!-- Accordion -->
    <div class="container">
        <h2 class="my-5 text-center">Questions</h2>
        <div class="row justify-content-lg-center pb-5">
            <div class="col-lg-9">
                <div class="accordion" id="accordionQuestions">
                    <div class="card shadow mb-2">
                        <div class="card-header" id="headingOne">
                            <h3 class="card-title">
                                <a class="collapsed" role="button" href="#collapseOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What methods of payments are supported? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionQuestions">
                            <div class="card-body">
                                <p >You can purchase the theme on Bootstrap Themes via any major credit/debit card (via Stripe) or with your Paypal account. We don't support cryptocurrencies or invoicing at this time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-2">
                        <div class="card-header" id="headingTwo">
                            <h3 class="card-title">
                                <a class="collapsed" role="button" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What version of Bootstrap are the theme built on? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionQuestions">
                            <div class="card-body">
                                <p>The theme are built on versions of Bootstrap v4. As more Bootstrap updates are launched the theme will be update as needed and as new features and bug fixes come out.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-2">
                        <div class="card-header" id="headingThree">
                            <h3 class="card-title">
                                <a class="collapsed" role="button" href="#collapseThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I get help with the theme? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionQuestions">
                            <div class="card-body">
                                <p>Support for the theme is given for 6 months after you purchase the theme and is specific to questions around functionality, bugs, and basic implementation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="sep border-primary">

    <!-- Call to action -->
    <div class="container py-5">
        <div class="text-center">
            <h2 class="mb-4">Are you ready to start?</h2>
            <div class="mb-4">
                <a class="btn btn-pill btn-primary" href="#" role="button">Get started now</a>
            </div>
            <a class="link-cta" href="#">Learn More</a>
        </div>
    </div>

</div><!-- end bg-skew -->
@endsection

@section('footer')
    
@endsection
