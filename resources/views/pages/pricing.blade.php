@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - wedding pricing</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - wedding pricing">
@endsection
@section('content')
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-none d-sm-block">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_details.jpg" alt="wedding details, rings, flowers, necklace, drinks">
</div>
<!--mobile banner-->
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-sm-none">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_details_mobile.jpg" alt="wedding details, rings, flowers, necklace, drinks">
</div>
<!---->
@include('inc.navbar') 
    <div class="container">
        <h1>pricing</h1>
    </div>
@include('inc.contact')
@include('inc.footer')
@endsection