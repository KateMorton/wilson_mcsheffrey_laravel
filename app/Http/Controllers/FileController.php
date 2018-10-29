<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;
use App\Post;

class FileController extends Controller
{
    public function upload ($id) {
        $post = Post::find($id);        
        return view('posts/uploads')->with('post', $post);
    }

    public function storeFile(Request $request) {

        // return 'yes';
        // return $request->all();

        if($request->hasFile('file')) {
            foreach($request->file as $file){

                // print_r($file);

                // $this->validate($request, [
                //    'file' => 'image|nullable|max:1999'
                // ]);
                
                 //Get file name with extension
                $fileNameWithExt = $file->getClientOriginalName();                

                //Get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                //Get just extenstion
                $extension = $file->getClientOriginalExtension();

                //File name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                //Upload image
                $file->storeAs('public/posts', $fileNameToStore);

                $fileModel = new File();
                $fileModel->file_name = $fileNameToStore;
                $fileModel->alt_text = $request->input('blog_alt_text');
                $fileModel->post_id = $request->input('post_id');
                $fileModel->save();
            }
        }
        return redirect('dashboard')->with('success', 'Files Added');
    }
}
