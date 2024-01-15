@extends('partials.dbheader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    
</head>
<body>
    @section('header')
    <div class="heading text-center font-bold text-2xl m-5 text-gray-800">Post</div>
    <style>
    body {background:white !important;}
    </style>
     <form action="{{route('posts.update',['id'=>$posts->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
    <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
        <input name="title" class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Title" type="text" value="{{$posts->title}}">
        <textarea name="description" class="description bg-gray-100 sec p-3 h-72 border border-gray-300 outline-none" spellcheck="false" placeholder="Describe everything about this post here">{{$posts->description}}</textarea>
        <img src="{{ asset('images/'. $posts->image) }}" alt="" class="w-full h-72 my-4 mx-auto rounded-lg">
        <div class="my-4">
            <label for="img">Image Upload for Post</label>
            <br>
            <input type="file" name="image" id="img" placeholder="upload image">

        </div>
       
        <!-- buttons -->
        <div class="buttons flex justify-end my-4">
            
                <a href="{{route('dashboard')}}">
                    <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</div>
                </a>
           
                <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">
                    Update
                </button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>