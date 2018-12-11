@extends('layouts.app')
@section('pageTitle')
<title>{{$title}}</title>
<meta name="description" content="{{$description}}">
@endsection
@section('socialMedia')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$description}}">
    <meta name="twitter:creator" content="Wilson McSheffrey Photography">
    <meta name="twitter:image" content="/storage/featured_images/{{$post->featured_image}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.wilsonmcsheffrey.co.uk/" />
    <meta property="og:image" content="/storage/featured_images/{{$post->featured_image}}" />
    <meta property="og:description" content="{{$description}}" /> 
    <meta property="og:site_name" content="Wilson McSheffrey Wedding Photography" />
@endsection
@section('content')
    <header>
        <div class="jumbotron text-center post m-0 p-0 rounded-0">
            <div class="card text-white rounded-0 border-0">
                <img class="card-img rounded-0" src="/storage/featured_images/{{$post->featured_image}}" alt="{{$post->alt_featured}}">
                <div class="card-img-overlay d-flex align-items-center">
                    <h2 class="card-title w-100">{{$post->names}}</h2>                        
                </div>
            </div>
        </div>
    </header>
@include('inc.navbar') 
    <article class="container mb-5" style="margin-top: 40px">
        <h1 class="text-center">{{$post->title}}</h1>
        <h6 class="text-center"><small>by {{$post->user->name}}</small></h6>
        @if(!Auth::guest())  
            <p><a href="/posts/{{$post->id}}/edit" class="nav-link">Edit</a></p>             
        @endif
        <div>
            {!!$post->body!!}
        </div> 
        <div class="d-flex flex-column mt-4">            
            <img  class="mb-1 w-85 align-self-center lazy" src="/storage/posts/{{$files[0]->file_name}}" alt="{{$files[0]->alt_text}}">
            <img  class="mb-1 w-85 align-self-center lazy" src="/storage/posts/{{$files[1]->file_name}}" alt="{{$files[1]->alt_text}}">
            @for($i = 2; $i < count($files); $i++ )
                <img  class="mb-1 w-85 align-self-center lazy" data-src="/storage/posts/{{$files[$i]->file_name}}" alt="{{$files[$i]->alt_text}}">
            @endfor
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="#" data-toggle="tooltip" title="Back to top"><img class="blog-logo lazy" data-src="/storage/decorative_images/wilson-mcsheffrey_wedding_photography_logo.png" alt="logo for wilson mcsheffrey wedding photography" style="width: 100px"></a>
        </div>       
    </article>     
@include('inc.contact')
@include('inc.footer')
@endsection