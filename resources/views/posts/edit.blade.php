@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
@endsection
@section('content')    
@include('inc.navbar') 
<div id="contact">
    <section class="container mt-4 mb-5">
      <h1>EditPost</h1>
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}   
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete Post', ['class' => 'btn rounded-0 float-right'])}}
      {!!Form::close()!!} 
    </section>

    <div class="container mb-5">        
      @include('inc.messages')        
      {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
        <h6 class="mt-3 border-top pt-3 border-warning">SEO</h6>
        <div class="form-group">
            {{Form::label('page_title', 'page title')}} 
            {{Form::text('page_title', $post->page_title, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('page_description', 'page description')}} 
            {{Form::text('page_description', $post->page_description, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('slug', 'slug')}} 
            {{Form::text('slug', $post->slug, ['class'=>'form-control rounded-0', 'minlength' => '5', 'maxlength' => '255'])}}           
        </div>
        <h6 class="mt-3 border-top pt-3 border-warning">Post Content</h6>
        <div class="form-group">
            {{Form::label('names', 'wedding couple')}} 
            {{Form::text('names', $post->names, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('venue', 'wedding venue/ location')}} 
            {{Form::text('venue', $post->venue, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('wedding_date', 'date of wedding')}} 
            {{Form::text('wedding_date', $post->wedding_date, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('title', 'post title')}} 
            {{Form::text('title', $post->title, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('author', 'author')}} 
            {{Form::text('author', $post->author, ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('body', 'content')}} 
            {{Form::textarea('body', $post->body, ['id'=>'editor', 'class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-checked">
            {{Form::label('featured', 'featured', ['class'=>'form-check-label'])}} 
            {{Form::checkbox('featured', $post->featured, true)}}
        </div>
        <div class="form-checked">
            {{Form::label('published', 'published', ['class'=>'form-check-label'])}} 
            {{Form::checkbox('published', $post->published, true)}}
        </div>
        <h6 class="mt-3 border-top pt-3 border-warning">Category</h6>
        @if($post->category == 'wedding')
        <div class="form-checked">
            {{Form::label('category', 'wedding', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'wedding', true)}}
        </div>
        <div class="form-checked">
            {{Form::label('category', 'elopement', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'elopement')}}
        </div>
        <div class="form-checked">
            {{Form::label('category', 'pre-wedding/ couples shoot', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'shoot')}}
        </div>
        @elseif($post->category == 'elopement')
        <div class="form-checked">
            {{Form::label('category', 'wedding', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'wedding')}}
        </div>
        <div class="form-checked">
            {{Form::label('category', 'elopement', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'elopement', true)}}
        </div>
        <div class="form-checked">
            {{Form::label('category', 'pre-wedding/ couples shoot', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'shoot')}}
        </div>
        @else
        <div class="form-checked">
            {{Form::label('category', 'wedding', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'wedding')}}
        </div>
        <div class="form-checked">
            {{Form::label('category', 'elopement', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'elopement')}}
        </div>
        <div class="form-checked">
            {{Form::label('category', 'pre-wedding/ couples shoot', ['class'=>'form-check-label'])}} 
            {{Form::radio('category', 'shoot', true)}}
        </div>
        @endif
        <br>
        <h6 class="mt-3 border-top pt-3 border-warning">Images</h6>
        <div class="custom-file mb-1">
            {{Form::label('thumbnail', 'post thumbnail', ['class'=>'custom-file-label rounded-0'])}}
            {{Form::file('thumbnail', ['class' => 'custom-file-input rounded-0'])}}
        </div>   
        <div class="form-group mb-3">
            {{Form::text('alt_text', $post->alt_text, ['class'=>'form-control rounded-0', 'placeholder' => 'alt text'])}}           
        </div>     
        <div class="custom-file mb-1">
            {{Form::label('featured_image', 'featured image',['class'=>'custom-file-label rounded-0'])}}
            {{Form::file('featured_image', ['class' => 'custom-file-input rounded-0'])}}
        </div> 
        <div class="form-group mb-3">
            {{Form::text('alt_featured', $post->alt_featured, ['class'=>'form-control rounded-0', 'placeholder' => 'alt text'])}}           
        </div> 
        <a href="/posts/{{$post->id}}/uploads" class="btn rounded-0">Add Blog Image Files</a>       
        <div class="form-group mb-5">
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn pull-right rounded-0'])}}
        </div>
      {!! Form::close() !!}       
   </div>
</div>
@include('inc.footer')
@endsection