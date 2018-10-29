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
      <h1>Upload Post Images</h1>
      <h5 class="mt-3 border-top pt-3 border-warning">{{$post->names}}</h5>
      <h6>{{$post->venue}}</h6>
    </section>

    <div class="container">        
      @include('inc.messages')        
      {!! Form::open(['action' => 'FileController@storeFile', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
        <div class="custom-file mb-1">
            <input type="file" name ="file[]" class="custom-file-input rounded-0" id="customFile" multiple>
            <label class="custom-file-label rounded-0" for="customFile">choose blog images</label>
        </div>   
        <div class="form-group mb-3">
            {{Form::text('blog_alt_text', 'Please enter alt text', ['class'=>'form-control rounded-0', 'placeholder' => 'alt text'])}}           
        </div>
        <div class="form-group">
                {{Form::label('post_id', 'post id')}} 
                {{Form::text('post_id', $post->id, ['class'=>'form-control rounded-0'])}}           
            </div>
        <div class="form-group mb-5">      
            {{Form::submit('Submit', ['class' => 'btn pull-right rounded-0'])}}
        </div>
      {!! Form::close() !!}    
    </div>
</div>
@include('inc.footer')
@endsection