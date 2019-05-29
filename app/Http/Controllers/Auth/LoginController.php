<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\WebsiteDetail;
use \Cart as Cart;
use Session;
use Cache;

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
    protected $redirectTo = 'users/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web',['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout()
    {
      Auth::guard('web')->logout();
      Cart::destroy();
      Session::forget('cartQty');
      Session::forget('checkout_info');
      Cache::flush();
      return redirect()->back();
    }
}
