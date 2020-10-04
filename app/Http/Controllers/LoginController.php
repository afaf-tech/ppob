<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Model\UserModel;

class LoginController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:administrator')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('login', ['url' => 'web']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $cek = UserModel::where('email', $request->email)->get();
        if ($cek->isNotEmpty()) {
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
                // if successful, then redirect to their intended location
                $id_admin = Auth::guard('web')->user()->id;
                date_default_timezone_set('Asia/Jakarta');
                return redirect()->intended('/dashboard');
            } else {
                $errors = new MessageBag(['password' => ['Your password invalid!. Please Check and Try Again!!!!']]);
                return Redirect::back()->withErrors($errors);
            }
        } else {
                $errors = new MessageBag(['password' => ['Email Tidak Terdaftar di System']]);
                return Redirect::back()->withErrors($errors);
        }
    }

    public function logout(Request $request)
    {
        // $id_web = Auth::guard('web')->user()->id;
        Auth::guard('web')->logout();
        return redirect('/login');
    }
}
