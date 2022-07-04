<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kreait\Firebase\Factory;

class User extends Model
{
    protected $database;

    public function reports(){
        return $this->hasMany(Report::class);
    }

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(__DIR__. "/config-firebase.json")
            ->withDatabaseUri('https://flutter-login-baaf0-default-rtdb.firebaseio.com/');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public static function getAllUsers(){
        $users = (new static)->database->getReference('Users/')->getValue();
        return $users;
    }

    public static function getAllDepartments(){
        $departments = (new static)->database->getReference('Department')->getValue();
        return $departments;
    }

    public static function getAllUserProfiles(){
        $userProfiles = (new static)->database->getReference('UserProfile')->getValue();
        return $userProfiles;
    }

    public static function createNewUser($data){
        try {
            $newUser = (new static)->auth->createUserWithEmailAndPassword($data['email'], $data['password']);
            $uid = $newUser->uid;
            (new static)->database->getReference('Users/'.$uid)->set([
                'name' => $data['name'],
                'email' => $data['email'],
                'address' => $data['address'],
                'mobileNumber' => $data['phone'],
                'gender' => $data['gender'],
                'departmentId' => $data['department_id'],
                'profile_id' => $data['userProfile_id'],
                'admin' => $data['admin'],
                'uid' => $uid,
            ]);
            return  redirect('/users')->with("registerSuccess", "Berhasil menambahkan user baru!");
        } catch (\Throwable $e) {
            return back()->with("registerError", $e->getMessage());
        }
    }

    public static function getUser($id){
        $ref = (new static)->database->getReference('Users/'. $id)->getValue();
        if(!array_key_exists('avatarUrl', $ref)){
            $ref['avatarUrl'] = "null";
        }
        if(!array_key_exists('address', $ref)){
            $ref['address'] = "null";
        }
        if(!array_key_exists('gender', $ref)){
            $ref['gender'] = "null";
        }
        if(!array_key_exists('mobileNumber', $ref)){
            $ref['mobileNumber'] = "null";
        }

        if(!array_key_exists('departmentId', $ref)){
            $ref['departmentId'] = "null";
            $ref['department'] = "null";
        }else{
            $refDepartment = (new static)->database->getReference('Department/'. $ref['departmentId'])->getValue();
            $ref['department'] = $refDepartment['nama_department'];
        }

        if(!array_key_exists('admin', $ref)){
            $ref['admin'] = 'false';
        }

        $refProfile = (new static)->database->getReference('UserProfile/'. $ref['profile_id'])->getValue();
        $ref['profile'] = $refProfile['nama_profile'];

        return $ref;
    }

    public static function updateUser($id, $data){
        (new static)->database->getReference('Users/'.$id)->update([
            'name' => $data['name'],
            // 'email' => $data['email'],
            'address' => $data['address'],
            'mobileNumber' => $data['phone'],
            'gender' => $data['gender'],
            'departmentId' => $data['department_id'],
            'profile_id' => $data['userProfile_id'],
            'admin' => $data['admin'],
        ]);
    }

    public static function deleteUser($id){
        try {
            (new static)->auth->getUser($id);
            // (new static)->auth->disableUser($id);
            (new static)->auth->deleteUser($id);
            (new static)->database->getReference('Users/'.$id)->remove();
            return redirect('/users')->with("deleteSuccess", "Berhasil menghapus data user!");
        } catch (\Throwable $th) {
            return redirect('/users')->with("deleteError", $th->getMessage());
        }
    }
}
