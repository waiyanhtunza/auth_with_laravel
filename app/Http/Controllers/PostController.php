<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.main',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $user = Auth::user();

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
        ]);
        $imageName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('images'), $imageName);
        
        $user = Auth::user();
        $newUser =  new Post;
        $newUser->title = $request->title;
        $newUser->user_id = $user->id;
        $newUser->description =$request->description;
        $newUser->image = $imageName;
        $newUser->save();

        return redirect()->route('posts.create')->with('info', "Your Adding post is success");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.detail',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = auth()->user();
        $posts = Post::findOrFail($id);
        return view('posts.edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        if($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            if(File::exists((public_path('images'). $post->image)))
            {
                File::delete((public_path('images'). $post->image));
            }
        }else{
            $imageName = $post->image;
        }
        
        $user = Auth::user();
        $post->title = $request->title;
        $post->user_id = $user->id;
        $post->description =$request->description;
        $post->image = $imageName;
        $post->save();

        return redirect()->route('dashboard')->with('info', "Your Adding post is success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
