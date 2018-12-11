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
<div class="jumbotron text-center post m-0 p-0 rounded-0">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_details.jpg" alt="wedding details, rings, flowers, necklace, drinks">
</div>
@include('inc.navbar') 
    <div class="container text-center" id="blog">
        <h1>Pre-wedding/ Couples Shoots</h1>
        <div class="blog-grid2 mt-4">
            @if(count($posts)> 0)
            @foreach ($posts as $post)
                <div> 
                    <div class="card bg-white border-white text-white p-0 rounded-0 m-0">
                        <img class="card-img rounded-0 image lazy" data-src="/storage/featured_images/{{$post->featured_image}}" alt="{{$post->alt_featured}}">
                        <div class="card-img-overlay text-left">                    
                            <div class="blog-card align-self-baseline">     
                                <h5 class="card-title mb-0 pb-0"><a href="/posts/{{$post->id}}">{{$post->names}}</a></h5> 
                                <h4 class="blog-title mb-1">{{$post->venue}}</h4>
                            </div>                            
                        </div>
                    </div>
                </div>
            @endforeach       
            @endif
        </div>
    </div>
@include('inc.contact')
@include('inc.footer')
@endsection