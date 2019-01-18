<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    // Index page
    public function index(){

        $posts = Post::where(['featured' => 1 , 'published' => 1])->take(8)->orderBy('created_at', 'desc')->get();

        return view('pages.index')->with('posts', $posts);

    }

    // About page
    public function about(){
        
        return view('pages.about');
    }

    // Pricing page
    public function pricing(){
       
        return view('pages.pricing');
    }

    // Weddings page
    public function weddings(){

        $posts = Post::where(['category' => 'wedding' , 'published' => 1])->take(9)->orderBy('created_at', 'desc')->get();
       
        return view('pages.weddings')->with('posts', $posts);
    }

    // Elopements page
    public function elopements(){

        $posts = Post::where(['category' => 'elopement' , 'published' => 1])->take(9)->orderBy('created_at', 'desc')->get();
       
        return view('pages.elopements')->with('posts', $posts);
    }

    // shoots page
    public function shoots(){
       
        $posts = Post::where(['category' => 'shoot' , 'published' => 1])->take(9)->orderBy('created_at', 'desc')->get();
        
        return view('pages.shoots')->with('posts', $posts);
    }

    // sitemap
    public function sitemap(){
       
        return view('pages.sitemap');
    }

}
