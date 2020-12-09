<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function register(){
    	return view('register');
    }

    public function store(){
    	//validate form
    	$validated_fields = request()->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users',
    		'password' => 'required',
    	]);
    	//add to database
        if(request()->password == request()->confirmpassword){
    	   $validated_fields['password'] = bcrypt($validated_fields['password']);
    	   $user = User::create($validated_fields);
    	   return redirect('/login')->withErrors([
                'credentials' => 'Registration Complete. You can now log in!'
            ]);
        }
            return back()->withErrors([
                'credentials' => 'Passwords do not match!'
            ]);
    }

    public function login()
    {
    	request()->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);
    	//request credentials
    	$credentials = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($credentials))
    	{
    		return redirect('/dashboard');
    	}
    		return back()->withErrors([
    			'credentials' => 'Invalid Account!'
    		]);
    }

    public function signup()
    {
        return view('signup');
    }

    public function store()
    {
        //validate form
        $validated_fields = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        //dd($validated_fields);
        //add user to the database
        $validated_fields['password'] = bcrypt($validated_fields['password']);
        $user = User::create($validated_fields);
        
       return redirect('/login'); 
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
