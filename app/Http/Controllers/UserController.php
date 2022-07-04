<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $factory = (new Factory)
    //         ->withServiceAccount(__DIR__. "/config-firebase.json")
    //         ->withDatabaseUri('https://flutter-login-baaf0-default-rtdb.firebaseio.com/');

    //     $this->auth = $factory->createAuth();
    //     $this->database = $factory->createDatabase();
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ref = $this->database->getReference('Users/')->getSnapshot();
        // dd($ref);

        return view('dashboard.users.index', [
            'users' => User::getAllUsers(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'departments' => User::getAllDepartments(),
            'userProfiles' => User::getAllUserProfiles(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
            'gender' => 'required',
            'department_id' => 'required',
            'userProfile_id' => 'required',
        ]);

        if($request['admin']){
            $validatedData['admin'] = $request['admin'];
        }else{
            $validatedData['admin'] = "false";
        }

        User::createNewUser($validatedData);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.users.show', [
            'user' =>  User::getUser($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.users.edit', [
            'user' => User::getUser($id),
            'departments' => User::getAllDepartments(),
            'userProfiles' => User::getAllUserProfiles(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'email' => 'required|email',
            // 'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
            'gender' => 'required',
            'department_id' => 'required',
            'userProfile_id' => 'required',
        ]);

        if($request['admin']){
            $validatedData['admin'] = $request['admin'];
        }else{
            $validatedData['admin'] = "false";
        }

        User::updateUser($id, $validatedData);

        return redirect('/users')->with("updateSuccess", "Berhasil mengedit data user!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::deleteUser($id);
    }
}
