<?php

namespace App\Http\Controllers\Modules\Mitra\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepositorie;
use App\Traits\Traits\MitraView;

class AuthenticateController extends Controller
{
    use MitraView;
    protected $user;
    protected $statusCode = 200;

    public function __construct(
        UserRepositorie $user
    )
    {
        $this->user = $user;
        $this->setPath('mitra.pages.auth.');
    }

    public function login() {
        return $this->view('login');
    }

    public function check(Request $request) {

        try {

            $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required|max:255|min:6'
            ]);
           
            $credentials = $request->only('email', 'password');

            // check role user yang login, block jika bukan superadmin
            $user = $this->user::where(['email' => $credentials['email']])->first();
            if($user && $user->role->nama !== 'mitra') {
                throw new \Exception('Email atau password salah!');
            }

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('mitra/dashboard');
            }

            $this->statusCode = 400;
            throw new \Exception('Email atau password salah!');
        }catch(\Exception $err) {
            return redirect()->back()->withErrors([
                'message' => $err->getMessage()
            ]);
        }
    }
}
