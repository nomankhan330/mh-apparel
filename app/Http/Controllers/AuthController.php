<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.login');
    }

    public function postLogin(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        } else {

            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true,
                    "redirect" => url("admin/dashboard")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "errors" => ["Invalid credentials"]
                ]);
            }
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('admin/login');
    }

}
