@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - about</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - about">
@endsection
@section('socialMedia')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - about">
    <meta name="twitter:description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - about">
    <meta name="twitter:creator" content="Wilson McSheffrey Photography">
    <meta name="twitter:image" content="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - about" />
    <meta property="og:type" content="landing page" />
    <meta property="og:url" content="http://www.wilsonmcsheffrey.co.uk/" />
    <meta property="og:image" content="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg" />
    <meta property="og:description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - about" /> 
    <meta property="og:site_name" content="Wilson McSheffrey Wedding Photography" />
@endsection
@section('content')
@include('inc.navbar')
    <main class="d-flex align-items-center">
        <div class="container">              
            <h1 class="pt-5">404</h1>
            <p>Sorry, the page you are looking for is no longer here.</p>    
            <p>Please navigate to our <a href="/">home</a> page to see our most recent work.</p>           
        </div>    
    </main>
@include('inc.footer') 
@endsection