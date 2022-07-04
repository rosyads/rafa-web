<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;

class LoginController extends Controller
{

    protected $auth;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(__DIR__. "/config-firebase.json")
            ->withDatabaseUri('https://flutter-login-baaf0-default-rtdb.firebaseio.com/');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public function index(){
        return view("login.index", [
            "title" => "login"
        ]);
    }

    public function authenticate(Request $request){
        try{
            $signInResult = $this->auth->signInWithEmailAndPassword($request['email'], $request['password']);
            $ref = $this->database->getReference('Users/'.$signInResult->firebaseUserId())->getValue();
            Session::put('firebaseUserId', $signInResult->firebaseUserId());
            Session::put('idToken', $signInResult->idToken());
            Session::put('name', $ref['name']);
            Session::put('admin', $ref['admin']);
            Session::save();

            return redirect('/');
        }catch(\Throwable $e){
            // dd($e);
            return back()->with("loginError", "Login Failed!");
        }
    }

    public function logout(){
        if(Session::has('firebaseUserId') && Session::has('idToken')){
            $this->auth->revokeRefreshTokens(Session::get('firebaseUserId'));
            Session::forget('firebaseUserId');
            Session::forget('idToken');
            Session::forget('name');
            Session::forget('admin');
            Session::save();

            return redirect("/login");
        }
    }
}
