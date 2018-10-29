@extends('layouts.app')
@section('pageTitle')
    <title>Elopement Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography</title>
    <meta name="description" content="Creative elopement wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
@endsection
@section('socialMedia')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Creative elopement wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
    <meta name="twitter:creator" content="Wilson McSheffrey Photography">
    <meta name="twitter:image" content="/storage/landing_page_images/lodge_on_loch_goil_weddings_winter.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Elopement Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography" />
    <meta property="og:type" content="landing page" />
    <meta property="og:url" content="http://www.wilsonmcsheffrey.co.uk/" />
    <meta property="og:image" content="/storage/landing_page_images/lodge_on_loch_goil_weddings_winter.jpg" />
    <meta property="og:description" content="Creative elopement wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more" /> 
    <meta property="og:site_name" content="Wilson McSheffrey Wedding Photography" />
@endsection
@section('content')
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-none d-sm-block">        
    <img class="card-img rounded-0" src="/storage/decorative_images/elopement_wedding_loch_coruisk_isle_of_skye_scotland.jpg" alt="elopement wedding image from Isle of Skye, Loch Coruisk">
</div>
<!--mobile image-->
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-sm-none">        
    <img class="card-img rounded-0" src="/storage/decorative_images/elopement_wedding_loch_coruisk_isle_of_skye_scotland_mobile.jpg" alt="elopement wedding image from Isle of Skye, Loch Coruisk">
</div>
<!---->
@include('inc.navbar') 
<div class="container mb-5 pb-5 text-center" id='blog'>
    <h1>Elopements</h1>    
    @include('inc.blog_layout')
</div>
@include('inc.contact')
@include('inc.footer')
@endsection