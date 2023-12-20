<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\UserModel;
use Illuminate\Http\Request;

class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UserModel::all());
    }

    
    public function getUserByLogin($login){
        
    }
    public function getUsersByDepartment($department)
    {
        return response()->json(UserModel::where("", $department)->get());
    }


    public function auth(Request $request){
        // return $request->login;
        $user = UserModel::where("login", $request->login)->first();
        if($user){
            if($user->password != $request->password){
                return response()->json("Неверный пароль");
            }
            else {
                return response()->json($user);
            }
        }
        return response()->json("Неверный логин пользователя");
    }

    public function updateUser(Request $request){
        $user_temp = new UserModel($request->user); //исправить костыль!!!
        $user = UserModel::where("login", $user_temp->login)->first();
        $user->update($request->user);
        return response()->json($user);
    }   

    public function createUser(Request $request){
        //return $request->user;
        $user = new UserModel($request->user);
        $user->save();
        return response()->json($user); 
    }

    public function deleteUser(Request $request){
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $UserModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $UserModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $UserModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $UserModel)
    {
        //
    }
}
