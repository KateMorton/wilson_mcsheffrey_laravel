<div class="blog-grid mt-4">
    @if(count($posts)> 0)
    @foreach ($posts as $post)
        <div class="item"> 
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