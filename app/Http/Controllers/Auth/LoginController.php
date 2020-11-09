<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Services\User\Authentication;

class LoginController extends Controller
{
    /**
     * @var Authentication
     */
    private $authentication;

    /**
     * LoginController constructor.
     * @param Authentication $authentication
     */
    public function __construct(Authentication $authentication)
    {
        $this->authentication = $authentication;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getView()
    {
        return view('pages.guest.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function attemptAuth(Request $request)
    {
        $data = [
          'email'       => request()->input('email'),
          'password'    => request()->input('password'),
          'remember_me' => request()->input('remember_me', false)
        ];


        $this->authentication->setCredentials($data);

        if (!$this->authentication->checkUserExists())
            return redirect()->back()->with('error', 'User does not exist!');

        if (!$this->authentication->signIn())
            return redirect()->back()->with('error', 'Incorrect credentials!');

        return redirect()->route('dashboard');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.get');
    }
}
