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
    <div class="max-w-screen-xl mx-auto p-5 sm:p-8 md:p-12 relative">
        <div class=" text-center overflow-hidden">
            <img src="{{ asset('images/'. $posts->image) }}" alt="" class="mx-auto h-96 rounded-lg ">
        </div>
        <div class="max-w-2xl mx-auto">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
              
                <div class="">
    
                   
                    <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">{{$posts->title}}</h1>
                    <p class="text-gray-700 text-xs mt-2">Written By:
                        <a href="#"
                            class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            {{$posts->user->name}}
                        </a>
                    </p>
                    <p class="text-gray-700 text-xs mt-2">Written Date:
                        <a href="#"
                            class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            {{$posts->created_at}}
                        </a>
                    </p>
    
                    <p class="text-base leading-8 my-5">
                        {{$posts->description}}
                    </p>
    

    
                </div>
    
            </div>
        </div>
    </div>
    @endsection
</body>
</html>