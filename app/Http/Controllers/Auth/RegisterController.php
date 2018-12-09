<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'test' =>'required|string|min:4',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        \Log::debug('create', ['Step1'=>'Before User creation']);
        \Log::debug('create', ['test'=>$data['test']]);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'push_member' => $data['test'],
        ]);
    }
//오류 해결!
    protected function goRegister()
    {
        $nogi = \App\Idol_member::where('team_num',6)->select('name_cc','name_en')->get();
        $keyaki = \App\Idol_member::where('team_num',7)->select('name_cc','name_en')->get();
        $akb = \App\Idol_member::where('team_num',1)->select('name_cc','name_en')->get();
        $nmb = \App\Idol_member::where('team_num',2)->select('name_cc','name_en')->get();
        $hkt = \App\Idol_member::where('team_num',3)->select('name_cc','name_en')->get();
        $ske = \App\Idol_member::where('team_num',4)->select('name_cc','name_en')->get();
        $ngt = \App\Idol_member::where('team_num',5)->select('name_cc','name_en')->get();

        return view('auth.register',
            ['nogi'=>$nogi,
            'keyaki'=>$keyaki,
            'akb'=>$akb,
            'nmb'=>$nmb,
            'hkt'=>$hkt,
            'ske'=>$ske,
            'ngt'=>$ngt]
        );
    }

}
