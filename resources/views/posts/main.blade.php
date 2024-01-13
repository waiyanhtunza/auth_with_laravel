@extends('partials.header')
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

    
    @section('content')
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 m-4">
            @foreach ($posts as $post)
            <div class="container rounded-lg">
                <img class="h-full max-w-full rounded-lg" src="{{ asset('images/'. $post->image) }}" alt="">
                <div class="overlay flex flex-col justify-center items-center text-center">
                    <div class="text-lg capitalize text-gray-900">{{$post->title}}</div>
                    <div class="text-sm italic capitalize p-10 text-black hover:underline text-center">
                        <form action="{{route('posts.detail')}}" method="get">

                            @csrf
                            @method('get')
                            <button type="submit" class="hover:underline">
                                {{Str::limit($post->description, 100)}}
                            </button>
                           
                        </form>
                     
                    </div>
                    <div class="text-sm text-gray-900 "><span class="italic">Author=></span><strong>{{$post->user->name}}</strong></div>
                </div>
            </div>
            @endforeach
       
    </div>
    @endsection
    
  

</body>
</html>