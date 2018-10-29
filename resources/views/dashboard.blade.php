@extends('layouts.app')
@section('pageTitle')
<title>'Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography</title>
<meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
Covering weddings in Glasgow, Edinburgh, Scottish highlands and more">
@endsection
@section('content')
@include('inc.navbar')
<div class="container mb-5">
    @include('inc.messages')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header rounded-0">Dashboard</div>
                <div class="card-body rounded-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn rounded-0" href="/posts/create">add post</a>  
                    <h3 class="mt-3">Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>                      
                        @foreach($posts as $post)
                            <tr>
                                <td><a class="nav-link" href="/posts/{{$post->id}}">{{$post->names}}</a></td>
                                <td><a href="/posts/{{$post->id}}/uploads" class="btn rounded-0">Add Image Files</a></td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn rounded-0">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}   
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger rounded-0'])}}
                                    {!!Form::close()!!}
                                </td>                                
                            </tr>
                        @endforeach                                              
                    </table>
                    @else
                        <p>No posts</p>
                    @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')
@endsection
