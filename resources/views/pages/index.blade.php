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
<div id="confetti">
    <div class="confetti"></div>
    <div class="confetti1"></div>
    <div class="confetti2"></div>
</div>
<header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade d-none d-sm-block" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg" alt="wedding photography, woodland setting near Letham village, Fife, Scotland">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/lodge_on_loch_goil_weddings_winter.jpg" alt="Lodge on Loch Goil elopement treehouse wedding photography">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_isle_of_skye_scotland_rustic.jpg" alt="elopement forest wedding, Isle of Skye, Scotland">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_isle_of_skye_scotland.jpg" alt="elopement wedding, Fairy Glen, Isle of Skye, Scotland">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_glasgow_pollockshields.jpg" alt="Wedding photography, Pollockshields Burgh Hall,  Glasgow, Scotland">
        </div>
        </div>      
    </div>       
    <!--mobile carousel-->
    <div id="carouselExampleMobile" class="carousel slide carousel-fade d-sm-none" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_fife_scotland_mobile.jpg" alt="wedding photography, woodland setting near Letham village, Fife, Scotland">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/lodge_on_loch_goil_weddings_winter_mobile.jpg" alt="Lodge on Loch Goil elopement treehouse wedding photography">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_isle_of_skye_scotland_rustic_mobile.jpg" alt="elopement forest wedding, Isle of Skye, Scotland">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_isle_of_skye_scotland_mobile.jpg" alt="elopement wedding, Fairy Glen, Isle of Skye, Scotland">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/landing_page_images/wedding_photographers_glasgow_pollockshields_mobile.jpg" alt="Wedding photography, Pollockshields Burgh Hall,  Glasgow, Scotland">
        </div>
        </div>      
    </div>       
</header>

@include('inc.navbar')  

<section id="featured-weddings" class="container text-center mt-3 mb-5">
    <h1 class="mb-5">Wedding Photograpers Scotland</h1>
    <h2 class="decoration mb-4"><span>Featured Weddings</span></h2>
    <div class="row">
         @if(count($posts)> 0)
            @foreach ($posts as $post)                
                <div class="card bg-white border-white col-sm-3 p-0 rounded-0 m-0">
                    <img class="card-img rounded-0 image" src="/storage/thumbnails/{{$post->thumbnail}}" alt="{{$post->alt_text}}">
                    <div class="card-img-overlay text-center d-flex justify-content-center align-items-center">
                        <h5 class="card-title"><a href="{{ url('blog/' . $post->slug) }}">{{$post->names}}</a></h5>    
                    </div>
                </div> 
            @endforeach       
        @endif
    </div> 
</section>
<section class="container text-center mt-4">
    <h3>Wilson McSheffrey Photography</h3>
    <p class="welcome text-center">Welcome to the website of Wilson McSheffrey Photography! We are a wedding photography company, headed by Andrew Wilson. 
        Based in Glasgow but amazingly lucky to get to travel throughout Scotland and beyond for all our brilliant weddings. Specialising in 
        small weddings and elopements we aim to make your day a relaxed, fun and enjoyable experience!</p>
</section>
@include('inc.contact')
@include('inc.footer')
@endsection