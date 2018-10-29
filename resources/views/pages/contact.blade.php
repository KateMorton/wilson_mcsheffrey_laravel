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
    <div class="container text-center">
        <h1>get in touch!</h1>
    </div>
    <div class="container"> 
        <div class="row"> 
          <div class="col-md-6 mt-3 d-none d-md-block">
            <img class=" contact-image" src="/storage/decorative_images/contact.jpg" alt="image of bride and groom from Isle of Skye elopement wedding">
          </div> 
          <div class="col-md-6 mb-5 mt-3">  
            @include('inc.messages') 
            {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::text('first_name', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'first name'])}}   
                </div>
                <div class="form-group">
                    {{Form::text('last_name', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'last name'])}}   
                </div>
                <div class="form-group">
                    {{Form::text('email', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'email'])}}
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    {{Form::text('date', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'date'])}}
                </div>
                <div class="form-group">
                    {{Form::text('c_venue', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'ceremony venue'])}}
                </div>
                <div class="form-group"> 
                    {{Form::text('r_venue', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'reception venue'])}}
                </div>
                <div class="form-group">
                    {{Form::text('guests', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'approx number of guests'])}}
                </div>
                <div class="form-group">
                    {{Form::textarea('plans', '', ['class'=>'form-control border-0 shadow-sm rounded-0', 'placeholder'=>'tell us about your plans'])}}
                </div>
                <div class="form-check d-inline p-0">
                <small>In order to provide information regarding to my enquiry, <br>I consent to Wilson McSheffrey collecting and processing my details</small>
                    {{Form::checkbox('consent', '0')}}
                </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary btn-sm float-right rounded-0 border-0 mt-0'])}}
            {!! Form::close() !!}  
            <a class="nav-link pt-3 pl-0" href="tel:+447956532292">Tel: 07956532292</a>
           </div> 
        </div>
      </div>
@include('inc.footer')
@endsection