<?php

namespace App\Http\Controllers\Api;

use App\Models\Usercrud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsercrudController extends Controller
{
    public function getAllUsers(){
        $users = Usercrud::all();
        return response()->json([$users]);
    }

    public function addUser(Request $request){
        $user = Usercrud::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
        ]);
        $response = ($user) ? response()->json(['User created']) : response()->json(['Error occurred']);
        return $response;
    }

    public function getUserById(int $id){
        $user = Usercrud::find($id);
        return response()->json([$user]);
    }

    public function updateUser(Request $request, int $id){
        $user = Usercrud::find($id);
        if($user){
            $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            ]);
            return response()->json(['User updated']);
        }else{
            return response()->json(['Error occurred']);
        }
    }

    public function deleteUser(int $id){
        $user = Usercrud::find($id);
        if($user){
            $user->delete();
            return response()->json(['User deleted']);
        }else{
            return response()->json(['Error occurred']);
        }
    }
}
