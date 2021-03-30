<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'invester_image' => ['mimes:jpeg,jpg,png,gif|required|max:10000'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {

    // }

    public function create(array $data)
    {

        $fileName = 'null';
            if (Input::file('invester_image')->isValid()) {
                $destinationPath = public_path('uploads/invester_image');
                $extension = Input::file('invester_image')->getClientOriginalExtension();
                $fileName = uniqid().'.'.$extension;
                
                Input::file('invester_image')->move($destinationPath, $fileName);
            }


        // dd($fileName);
        $user = new User();
            $user->name = $data["name"];
            $user->email = $data["email"];
            $user->invester_image = $fileName;
            $user->role_id = (int)$data["role_id"];
            $user->password = Hash::make($data["password"]);
            $user->save();
       
        return $user;
    }
}

