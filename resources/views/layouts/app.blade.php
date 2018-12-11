<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('pageTitle')
    @yield('socialMedia')

    <!--favicon-->
    <link rel="icon" href="/storage/decorative_images/wilson-mcsheffrey_wedding_photography_favicon.png" type="image/png" sizes="16x16">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day%7CRaleway:300%7CSpecial+Elite" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="content">
    <div id="app" style="height: 100%">        
        @yield('content')         
    </div>    
    <!-- Scripts -->       
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>               
</body>
</html>
