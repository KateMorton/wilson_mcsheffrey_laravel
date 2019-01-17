@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
@endsection
@section('content')    
@include('inc.navbar') 
<div id="contact" class="mb-5">
    <section class="container mt-4 mb-5">
      <h1>Add Post</h1>
    </section>

    <div class="container">        
      @include('inc.messages')        
      {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
        <h6 class="mt-3 border-top pt-3 border-warning">SEO</h6>
        <div class="form-group">
            {{Form::label('page_title', 'page title')}} 
            {{Form::text('page_title', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('page_description', 'page description')}} 
            {{Form::text('page_description', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('slug', 'slug')}} 
            {{Form::text('slug', '', ['class'=>'form-control rounded-0', 'minlength' => '5', 'maxlength' => '255'])}}           
        </div>
        <h6 class="mt-3 border-top pt-3 border-warning">Post Content</h6>
        <div class="form-group">
            {{Form::label('names', 'wedding couple')}} 
            {{Form::text('names', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('venue', 'wedding venue/ location')}} 
            {{Form::text('venue', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('wedding_date', 'date of wedding')}} 
            {{Form::text('wedding_date', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('title', 'post title')}} 
            {{Form::text('title', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('author', 'author')}} 
            {{Form::text('author', '', ['class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-group">
            {{Form::label('body', 'content')}} 
            {{Form::textarea('body', '', ['id'=>'editor', 'class'=>'form-control rounded-0'])}}           
        </div>
        <div class="form-checked">
            {{Form::label('featured', 'featured', ['class'=>'form-check-label'])}} 
            {{Form::checkbox('featured', '1')}}
        </div>
        <div class="form-checked">
            {{Form::label('published', 'published', ['class'=>'form-check-label'])}} 
            {{Form::checkbox('published', '1')}}
        </div>
        <h6 class="mt-3 border-top pt-3 border-warning">Category</h6>
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
        <br>
        <h6 class="mt-3 border-top pt-3 border-warning">Images</h6>
        <div class="custom-file mb-1">
            {{Form::label('thumbnail', 'post thumbnail (recommended  size 500px x 500px)', ['class'=>'custom-file-label rounded-0'])}}
            {{Form::file('thumbnail', ['class' => 'custom-file-input rounded-0'])}}
        </div>   
        <div class="form-group mb-3">
            {{Form::text('alt_text', 'Please add alt text', ['class'=>'form-control rounded-0', 'placeholder' => 'alt text'])}}           
        </div>     
        <div class="custom-file mb-1">
            {{Form::label('featured_image', 'featured image (recommended  size 2000px x 855px)',['class'=>'custom-file-label rounded-0'])}}
            {{Form::file('featured_image', ['class' => 'custom-file-input rounded-0'])}}
        </div> 
        <div class="form-group mb-3">
            {{Form::text('alt_featured', 'please add alt text', ['class'=>'form-control rounded-0', 'placeholder' => 'alt text'])}}           
        </div> 
        <div class="form-group mb-5">      
            {{Form::submit('Submit', ['class' => 'btn pull-right rounded-0'])}}
        </div>
      {!! Form::close() !!}    
    </div>
</div>
@include('inc.footer')
@endsection