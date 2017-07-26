<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador gestiona la autenticación de los usuarios para la aplicación y
    | Redireccionándolos a su pantalla de inicio. El controlador usa un rasgo
    | Para proporcionar convenientemente su funcionalidad a sus aplicaciones.
    |
    */

    use AuthenticatesUsers;

    /**
     * redicciona a la ruta.
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
        $this->middleware('guest')->except('logout');
    }
}
