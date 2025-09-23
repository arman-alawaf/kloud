<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request): RedirectResponse
    // {   
    //     $input = $request->all();
     
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
     
    //     if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
    //         return redirect()->to('dashboard');
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Wrong email or password.');
    //     }
          
    // }
    
    public function login(Request $request): RedirectResponse{
        $input = $request->all();
    
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Check if email exists
        $user = User::where('email', $input['email'])->first();
    
        if (!$user) {
            return redirect()->route('login')
                ->with('error', 'Email address does not exist.');
        }
    
        // If email exists, check credentials
        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            return redirect()->to('dashboard');
        } else {
            return redirect()->route('login')
                ->with('error', 'Incorrect password.');
        }
    }
}
