@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
@endsection
@section('socialMedia')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography">
    <meta name="twitter:description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
    <meta name="twitter:creator" content="Wilson McSheffrey Photography">
    <meta name="twitter:image" content="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography" />
    <meta property="og:type" content="landing page" />
    <meta property="og:url" content="http://www.wilsonmcsheffrey.co.uk/" />
    <meta property="og:image" content="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg" />
    <meta property="og:description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more" /> 
    <meta property="og:site_name" content="Wilson McSheffrey Wedding Photography" />
@endsection
@section('content')
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-none d-sm-block">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_images.jpg" alt="wedding details">
</div>
<!--mobile banner-->
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-sm-none">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_images_mobile.jpg" alt="wedding details">
</div>
<!---->
@include('inc.navbar') 
    <div class="container mb-5 pb-5 text-center" id='blog'>
        <h1>Weddings</h1>          
        @include('inc.blog_layout')
    </div>
@include('inc.contact')
@include('inc.footer')
@endsection