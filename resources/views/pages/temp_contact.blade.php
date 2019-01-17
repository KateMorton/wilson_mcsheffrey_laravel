@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - contact</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - contact">
@endsection
@section('socialMedia')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - contact">
    <meta name="twitter:description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - contact">
    <meta name="twitter:creator" content="Wilson McSheffrey Photography">
    <meta name="twitter:image" content="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - contact" />
    <meta property="og:type" content="landing page" />
    <meta property="og:url" content="http://www.wilsonmcsheffrey.co.uk/" />
    <meta property="og:image" content="/storage/landing_page_images/wedding_photographers_fife_scotland.jpg" />
    <meta property="og:description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - contact" /> 
    <meta property="og:site_name" content="Wilson McSheffrey Wedding Photography" />
@endsection
@section('content')
<div class="card rounded-0 contact d-none d-sm-block">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_image_kiss.jpg" alt="Scottish mountain lanscape">    
</div>
<!--mobiile banner-->
<div class="card rounded-0 contact d-sm-none">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_image_kiss_mobile.jpg" alt="Scottish mountain lanscape">    
</div>
<!---->
@include('inc.navbar') 
    <div class="container">
        <h1>get in touch!</h1>
    </div>
    <div class="container"> 
        <div class="row"> 
          <div class="col-md-6 mt-3 d-none d-md-block">
            <img class=" contact-image" src="/storage/decorative_images/contact.jpg" alt="image of bride and groom from Isle of Skye elopement wedding">
          </div> 
          <div class="col-md-6 mb-5 mt-3 d-flex flex-column justify-content-center">  
             <p>If you are interested in finding out more about our service please do get in touch using the details below.</p> 
             <p>If your enquiry is wedding related and you are contacting us by email, if possible, please also include the following information.</p>
            <ul class="list-group-flush pl-0 w-50 align-self-center mb-5">
                <li class="list-group-item">Full Names</li>
                <li class="list-group-item">Contact Email</li>
                <li class="list-group-item">Ceremony Venue</li>
                <li class="list-group-item">Reception Venue</li>
                <li class="list-group-item">Approx number of guests</li>
            </ul>
            <p class="text-center"><a class="p-0 nav-link d-none d-sm-block" href="mailto:info@wilsonmcsheffrey.co.uk?Subject=enquiry"><i class="fa fa-envelope"></i>info@wilsonmcsheffrey.co.uk</a></p>           
            <p class="text-center"><a class="p-0 nav-link d-none d-sm-block" href="tel:07956532292"><i class="fa fa-phone"></i>07956532292</a></p>  
            <p class="text-center">We look forward to hearing from you!</p>  
          </div> 
        </div>
      </div>
@include('inc.footer')
@endsection