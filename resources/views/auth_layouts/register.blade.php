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
    

    
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up to your account</h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-md font-bold leading-9 tracking-tight text-gray-400">
            <a href="{{route('auth_layouts.login')}}">
                @if (session('info'))
                        {{ session('info') }}
                @endif
            </a>
            
        </h2>
      </div>
  
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('auth_layouts.register')}}" method="POST">

        @csrf
        @method('post')

        <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-500">Your Name</label>
            <div class="mt-2">
              <input id="name" name="name" type="text" autocomplete="text" required class=" text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-500">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class=" text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-500">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div class="flex">
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600  px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
        </div>
      </form>

    </div>
  </div>
  
  
</body>
</html>