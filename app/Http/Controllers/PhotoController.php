<?php

namespace App\Http\Controllers;


use App\Models\Post; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */

     public function showPost()
     {
         $posts = Post::active()->get();
 
         return view('photoss.tes', ['posts' => $posts]);
     }

    public function index()
    {
        $photos = Post::active()->get();
        // ->withTrashed()  befungsi untuk mengembalikan data yang terhapus
        $view_data = [
            'photos' => $photos,
        ];

        return view('photoss.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photoss.create');
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // $photos = Storage::get('photos.txt');
         Post::insert([
            'title' => $title,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

   
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $photo = Post::where('id', '=', $id)
            ->first();

        $view_data = [
            'photo' => $photo
        ];

        return view('photoss.show', $view_data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $photo = Post::where('id', '=', $id)
               ->first();
        $view_data = [
            'photo' => $photo
        ];

        return view('photoss.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Post::where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return redirect("posts/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)
            ->delete();

        return redirect('posts');
    }
}
