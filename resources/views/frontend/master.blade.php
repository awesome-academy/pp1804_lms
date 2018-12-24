<!doctype html>
<html lang="vi">
<head>
    <title>@yield('title', 'LMS')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700%7CMerriweather+Sans:300,400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/theme.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">

    @section('header')
        
    @show
</head>

<body>

    @include('frontend.partials.header')

    <main id="content">
		@yield('content')
    </main>

    @include('frontend.partials.footer')

    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    
    @section('footer')
        
    @show
    
</body>
