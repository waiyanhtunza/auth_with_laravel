@extends('partials.dbheader')

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="h-full">
  @section('header')
<div class="min-h-full">
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold uppercase tracking-tight text-gray-900">Hello <strong>{{$user->name}}</strong></h1>
      </div>

      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="{{route('dashboard.logout')}}" method="post">
          @csrf
          @method('post')

          <button type="submit" class="bg-indigo-500">Logout</button>
        </form>
        
      </div>
    </header>
    <main>
                          
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
          @foreach ($posts as $post )
          <div class="my-4">
              <div class="font-bold text-lg">{{$post->title}}</div>
              <div>
                <a href="{{route('posts.edit',['id'=>$post->id])}}" class="hover:underline" >
                  {{Str::limit($post->description, 100)}}
                </a>
                
              </div>
              <div>
                <form action="{{route('posts.delete',['id'=>$post->id])}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="bg-red-400">Delete</button>
                </form>
               
              </div>
            </div>
          @endforeach
        
      </div>
    </main>
  </div>
 
  @endsection
</body>
</html>