<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('dashboard',['user'=>$user]);
    }

    public function login()
    {
        return view('auth_layouts.login');
    }

    public function check(Request $request)
    {   
        {
            $email=$request->email;
            $password=$request->password;
           if(Auth::attempt(['email'=>$email,'password'=>$password]))
           {
                return redirect()->route('dashboard');
           }
           return redirect()->route('auth_layouts.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth_layouts.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' =>  'required',
            'password'=> 'required'
        ]);

        $newUser = User::create($data);

        return redirect()->route('auth_layouts.register')->with('info','Your Registration is Success Go to Login ');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
       
            Session::flush();
            Auth::logout();
            return redirect()->route('auth_layouts.login');
        
    }
}
