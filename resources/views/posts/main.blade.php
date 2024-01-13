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
        <div class="grid gap-4">
            <div class="container">
                <img class="h-auto max-w-full rounded-lg image" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                <div class="overlay">
                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vitae ab animi dolorem necessitatibus blanditiis laboriosam laudantium, ducimus dolore quos error libero maiores cupiditate voluptatibus? Nam culpa eligendi dignissimos adipisci!</div>
                  </div>
            </div>
        </div>
        
        

    </div>
    @endsection
    
  

</body>
</html>