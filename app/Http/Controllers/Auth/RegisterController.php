<?php

namespace App\Http\Controllers\Auth;

use App\Address;
use App\Part;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
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
            'password' => 'required|string|min:6'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        $users = User::all();
        $parts = Part::pluck('name', 'id');

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'gender' => $data['gender'],
            'birth_date' => $data['birth_date'],
            'job' => $data['job'],
            'phone' => $data['phone'],
            'cellphone' => $data['cellphone'],
            'password' => bcrypt($data['password']),
            'type' => 'aluno',
        ]);

        $address = Address::create([
            'street' => $data['street'],
            'city' => $data['city'],
            'neighborhood' => $data['neighborhood'],
            'home_number' => $data['home_number'],
            'state' => $data['state'],
        ]);

        $user->address()->associate($address);
        $user->save();

        return redirect()->route('admin', ['users' => $users, 'parts' => $parts]);
    }

    protected function update(Request $data, $id){
        $user = User::find($id);
        $user->fill($data->all());
        $user->address->fill($data->all());
        $user->address->save();
        $user->save();

        return redirect()->back();
    }
}
