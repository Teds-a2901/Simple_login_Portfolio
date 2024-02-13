<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use Symfony\Contracts\Service\Attribute\Required;

class UserContoller extends Controller
{
    public function index(){
        return view('profile.portfolio');
        
    }

    public function login(){
        return view('user.login');
    }

    public function process(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
      if(auth()->attempt($validated)){
        $request->session()->regenerate();

        return redirect('/')->with('message', 'Sucessfull Login');
      }

      return back()->withErrors(['email'=>'login failed'])->onlyInput('email');


    }

    public function signup(){
        return view('user.signup');
    }


    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout Sucessful');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);
        $validated ['password'] = bcrypt($validated['password']);
        $user =User::create($validated);

        auth()->login($user);
        return redirect('/')->with('message', 'Sucessful');
    }

    
    public function show($id){

           $data = array(
                "id" => $id,
                "name" => "Mark",
                "age" => 23,
                "email" => "marktedra29@gmail.com"
            );

            return view('user', ['data'=>$data]);
    }
}
