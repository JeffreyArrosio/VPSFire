<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;


class FirebaseAuthController extends Controller
{
    protected $auth;

    public function __construct()

    {
        $this->auth = Firebase::auth();
    }



    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        try {
            $user = $this->auth->createUserWithEmailAndPassword($request->input('email'), $request->input('password'));
            session(['firebase_user_id' => $$user->uid]);
            return 'User created: ' . $user->uid;
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($request->input('email'), $request->input('password'));
            session(['firebase_user_id' => $signInResult->data()['idToken']]);
            return 'Successfully signed in: ' . $signInResult->data()['idToken']; 
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function home()
    {
        return view('dashboard');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('login');
    }
}
