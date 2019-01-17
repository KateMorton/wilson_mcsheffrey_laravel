<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\File;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('published', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'page_title' => 'required',
            'page_description' => 'required',
            //'slug' => 'required|alpha_dash|min:5|max:255|unique:post,slug',
            'names' => 'required',
            'venue' => 'required',
            'wedding_date' => 'required',
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
            'category' => 'required',
            'thumbnail' => 'image|nullable|max:1999',
            'featured_image' => 'image|nullable|max:1999'
        ]);

        //handle thumbnail file upload
        if($request->hasFile('thumbnail')) {

            //Get file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();

            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get just extenstion
            $extension = $request->file('thumbnail')->getClientOriginalExtension();

            //File name to store
            $fileNameToStoreThum = $fileName.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('thumbnail')->storeAs('public/thumbnails', $fileNameToStoreThum);

        } else {
            $fileNameToStoreThum = 'noimage.jpg';
        }

        //handle fesatured image file upload
        if($request->hasFile('featured_image')) {

            //Get file name with extension
            $fileNameWithExt = $request->file('featured_image')->getClientOriginalName();

            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get just extenstion
            $extension = $request->file('featured_image')->getClientOriginalExtension();

            //File name to store
            $fileNameToStoreFeat = $fileName.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('featured_image')->storeAs('public/featured_images', $fileNameToStoreFeat);

        } else {
            $fileNameToStoreFeat = 'noimage.jpg';
       }

        //check featured checkbox input
        $featured = ($request->input('featured') == 1) ? 1 : 0;
        //check published checkbox input
        $published = ($request->input('published') == 1) ? 1 : 0;

        //slug

        $slug = date('m-d-Y').'-'. $request->input('slug');
        
        $post = new Post();
        $post->page_title = $request->input('page_title');
        $post->page_description = $request->input('page_description');
        $post->slug = $slug;
        $post->names = $request->input('names');
        $post->venue = $request->input('venue');
        $post->wedding_date = $request->input('wedding_date');
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->featured = $featured;
        $post->published = $published;
        $post->category = $request->input('category');
        $post->thumbnail = $fileNameToStoreThum;
        $post->featured_image = $fileNameToStoreFeat;
        $post->alt_text = $request->input('alt_text');  
        $post->alt_featured = $request->input('alt_featured');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('dashboard')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $files = File::where(['post_id' => $id])->orderBy('file_name', 'asc')->get();;
        $title = $post->page_title;
        $description = $post->page_description;
        return view('posts/show', ['title' => $title, 'description' => $description])->with(['post' => $post, 'files' => $files]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $title = $post->page_title;
        $description = $post->page_description;
        return view('posts/edit', ['title' => $title, 'description' => $description])->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //handle thumbnail file upload
        if($request->hasFile('thumbnail')) {

            //Get file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();

            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get just extenstion
            $extension = $request->file('thumbnail')->getClientOriginalExtension();

            //File name to store
            $fileNameToStoreThum = $fileName.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('thumbnail')->storeAs('public/thumbnails', $fileNameToStoreThum);

        } 

        //handle featured image file upload
        if($request->hasFile('featured_image')) {

            //Get file name with extension
            $fileNameWithExt = $request->file('featured_image')->getClientOriginalName();

            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get just extenstion
            $extension = $request->file('featured_image')->getClientOriginalExtension();

            //File name to store
            $fileNameToStoreFeat = $fileName.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('featured_image')->storeAs('public/featured_images', $fileNameToStoreFeat);

        }        

        //check featured checkbox input
        $featured = ($request->input('featured') == 1) ? 1 : 0;
        //check published checkbox input
        $published = ($request->input('published') == 1) ? 1 : 0;

        $post = Post::find($id);
        $post->page_title = $request->input('page_title');
        $post->page_description = $request->input('page_description');
        $post->slug = $request->input('slug');
        $post->names = $request->input('names');
        $post->venue = $request->input('venue');
        $post->wedding_date = $request->input('wedding_date');
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->featured = $featured;
        $post->published = $published;
        $post->category = $request->input('category');
        if($request->hasFile('thumbnail')) {
            if($post->thumbnail !== 'noimage.jpg'){
                //delete image
                Storage::delete('public/thumbnails/' .$post->thumbnail);
            }
            $post->thumbnail = $fileNameToStoreThum;
        }
        $post->alt_text = $request->input('alt_text');
        if($request->hasFile('featured_image')) {
            if($post->featured_image !== 'noimage.jpg'){
                //delete image
                Storage::delete('public/featured_images/' .$post->featured_image);
            }
            $post->featured_image = $fileNameToStoreFeat;
        }
        $post->alt_featured = $request->input('alt_featured');
        
        $post->save();

        return redirect('dashboard')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $files = File::where(['post_id' => $id])->get();

        foreach($files as $file) {
            Storage::delete('public/posts/' .$file->file_name); 
            $file->delete();           
        }

        if($post->thumbnail !== 'noimage.jpg'){
            //delete image
            Storage::delete('public/thumbnails/' .$post->thumbnail);
        }
        if($post->featured_image !== 'noimage.jpg'){
            //delete image
            Storage::delete('public/featured_images/' .$post->featured_image);
        }
    
        $post->delete();

        return redirect('dashboard')->with('success', 'Post Deleted');
    }
}
