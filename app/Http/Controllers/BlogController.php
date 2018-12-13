<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\File;

class BlogController extends Controller
{
    public function getSingle ($slug) {
        $post = Post::where('slug', '=', $slug)->first();
        $files = File::where(['post_id' => $post->id])->orderBy('file_name', 'asc')->get();;
        $title = $post->page_title;
        $description = $post->page_description;
        return view('posts/show', ['title' => $title, 'description' => $description])->with(['post' => $post, 'files' => $files]);
    }
}
