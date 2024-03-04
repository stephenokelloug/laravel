<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Delgont\Auth\Concerns\MultiAuthCredentials;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller - Multi Authentication using email or username
    |--------------------------------------------------------------------------
    | Use Delgont\Auth\Concerns\MultiAuthCredentials trait
    | You must override the credentials and username functions as shown below
    |
    */
    use AuthenticatesUsers, MultiAuthCredentials;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return $this->multiAuthCredentials($request);
    }

    public function username()
    {
        return 'username_email';
    }
}