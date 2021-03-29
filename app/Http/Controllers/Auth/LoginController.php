<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

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
    protected $username = 'email';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Where to redirect users to profile page on first login.
     *
     * @var string
     */
    protected $redirectToProfile = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        /*$this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:franchise')->except('logout');*/
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['status' => '1']);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function creatorLogin()
    {
        return view('auth.login', array('isCreator' => 1));
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        // Validate Creator
        if($request->get('user_type') == '1' && in_array($this->guard()->user()->user_type, ['0', '2']))
        {
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            $this->incrementLoginAttempts($request);

            return $this->sendFailedLoginResponse($request);
        }

        // Validate User
        if($request->get('user_type') == '0' && in_array($this->guard()->user()->user_type, ['1', '2']))
        {
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            $this->incrementLoginAttempts($request);

            return $this->sendFailedLoginResponse($request);
        }

        // Validate HyBrid
        if($request->get('user_type') == '2' && in_array($this->guard()->user()->user_type, ['0', '1']))
        {
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            $this->incrementLoginAttempts($request);

            return $this->sendFailedLoginResponse($request);
        }

        if(empty($this->guard()->user()->last_login_at) && $this->guard()->user()->user_type)
        {
            $redirectUrl = $this->redirectToProfile;
        }
        else
        {
            $redirectUrl = $this->redirectPath();
        }

        User::where('id', $this->guard()->user()->id)->update(array('last_login_at' => Carbon::now()));

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->intended($redirectUrl);
    }
}
