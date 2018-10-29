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
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-none d-sm-block">        
    <img class="card-img rounded-0" src="/storage/decorative_images/scottish_landscape.jpg" alt="Scottish mountain lanscape">
</div>
<!--mobile banner -->
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-sm-none">        
    <img class="card-img rounded-0" src="/storage/decorative_images/scottish_landscape_mobile.jpg" alt="Scottish mountain lanscape">
</div>
@include('inc.navbar')
    <div class="container">    
        <h1>about</h1>
        <div class="row">
            <div class="col-md-8">
                <p class="text-justify">
                   Hello!! Thank you for visiting the website of Wilson McSheffrey Photography :) My name is Andrew and I have been 
                   a wedding photographer working all over Scotland for over 10 years. Having completed an Advanced Diploma in Professional 
                   Photography many years ago I am also a member of the Master Photographers Association and have been delighted to have the work of
                   Wilson McSheffrey Wedding Photography published on popular wedding blogs, Love my Dress, Rock n Roll Bride, Whimsical Wonderland 
                   Weddings and We Fell in Love.
                </p>
                <p class="text-justify">I am chief photographer for all our weddings and for larger weddings work along side a pool of amazingly talented 
                   photographers who assist me as second shooters. If you have already had a look around the website you will notice that I am incredibly 
                   fortunate to photograph a huge variety of weddings, from larger city weddings right through to small elopements in far flung places! My main 
                   aim is not only to capture beautiful photographs of your wedding day but to make your time working with me a relaxed, fun and enjoyable 
                   experience.
                </p>
                <p class="text-justify">
                   On a personal note I have two amazing daughters aged 11 and 8 who keep me on my toes! A love for the great out doors and I try to go cycling, 
                   hill walking and camping when I can. I also love wood working and make longboards for fun.     
                </p>
                <p class="text-justify">
                    Thanks again for visiting and please do get in touch if you would like to ask me any questions.   
                 </p>
                 <p class="text-justify">
                    Cheers!   
                 </p>
                 <p><small style="font-size: 1.25rem" class="ml-5">Andrew</small></p>
            </div>
            <div class="col-md-4 pt-2 d-none d-lg-block">
                <img src="/storage/decorative_images/andrew.jpg" alt="photo of Andrew" style="width: 100%">
            </div>  
            <!--mobile image-->
            <div class="col-md-4 pt-2 d-lg-none">
                <img src="/storage/decorative_images/andrew_mobile.jpg" alt="photo of Andrew" style="width: 100%">
            </div>               
        </div>
    </div>
@include('inc.contact')
@include('inc.footer')
@endsection