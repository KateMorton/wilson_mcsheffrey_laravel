@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
@endsection
@section('content')
@include('inc.navbar') 
<div class="container" style="margin-top: 20px">        
@include('inc.messages')
    <h1>All Posts</h1>
    <div class="row mb-2">
        @if(count($posts)> 0)
            @foreach ($posts as $post)
                <div class="card col-3 p-0 rounded-0" style="width: 100%">
                    <img class="card-img-top rounded-0" src="/storage/thumbnails/{{$post->thumbnail}}" alt="{{$post->alt}}">
                    <div class="card-body">
                        <h6>{{$post->names}}</h5>
                        <a class="nav-link" href="/posts/{{$post->id}}">{{$post->title}}</a> 
                        <small>Category: {{$post->category}}</small><br>               
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>             
            @endforeach            
        @else
            <p>No posts found</P>  
        @endif
    </div>
    {{$posts->links()}}
</div>
@include('inc.footer')
@endsection