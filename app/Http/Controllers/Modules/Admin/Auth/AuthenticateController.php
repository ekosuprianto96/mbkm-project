<?php

namespace App\Http\Controllers\Modules\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthCheckRequest;
use App\Repositories\UserRepositorie;
use App\Traits\Traits\AdminView;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    use AdminView;

    protected $user;

    public function __construct(
        UserRepositorie $user
    )
    {
        $this->user = $user;
        $this->setPath('admin.pages.auth');
    }

    public function login() {
        return $this->view('login');
    }

    public function check(AuthCheckRequest $request) {
        try {

            $credentials = $request->only('email', 'password');

            // check role user yang login, block jika bukan superadmin
            $user = $this->user::where(['email' => $credentials['email']])->first();
            if($user && $user->role->nama !== 'superadmin') {
                throw new Exception('Email atau password salah!');
            }

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            }

            throw new Exception('Email atau password salah!');
        }catch(\Exception $err) {
            return redirect()->back()->withErrors([
                'message' => $err->getMessage()
            ]);

        }
    }
}
