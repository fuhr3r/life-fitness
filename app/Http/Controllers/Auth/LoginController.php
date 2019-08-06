<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        //$this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required'
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'cpf';

        $request->merge([
            $login_type => $request->input('login')
        ]);

        $user = User::where($login_type, $request->input('login'))->first();

        if ($user->password == $request->input('password')) {
            Auth::login($user);
            if (Auth::user()->type == 'admin')
                $this->redirectTo = '/admin';
            else
                return redirect()->route('user', ['id' => $user->id]);

            return redirect()->intended($this->redirectTo);
        }


        return redirect()->back()
            ->withInput()
            ->withErrors([
                'login' => 'Credenciais inválidas'
            ]);


    }
}
