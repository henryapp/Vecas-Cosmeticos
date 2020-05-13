<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = '/admin';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seguridad.index');
    }

    protected function authenticated(Request $request, $user)
    {
        $roles=$user->roles()->where('estado',1)->get();
        if($roles->isNotEmpty()){
            $user->setSession($roles->toArray());
        }else{
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('seguridad/login')->withErrors(['error'=>'Estas credeciales no  coinciden con nuestro registro']);
        }
    }


    public function username()
    {
        return 'usuario';
    }
}
