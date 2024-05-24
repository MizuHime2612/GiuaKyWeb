<?php

namespace App\Controllers;

use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function index()
    {
        $error = session()->getFlashdata('error');
        return view('LoginView', ['error' => $error]);
    }

    public function login()
    {
        $request = $this->request;

        if ($request->getMethod() == 'post') {
            // Retrieve submitted credentials
            $username = $request->getPost('usernameForm');
            $password = $request->getPost('passwordForm');

            // Load LoginModel
            $loginModel = new LoginModel();

            // Attempt to authenticate user
            $user = $loginModel->authenticate($username, $password);

            if ($user) {
                // Set session data
                session()->set('isLoggedIn', true);
                session()->set('userData', $user);

                // Redirect to dashboard or desired page
                header("Location: /ok");
            } else {
                // Authentication failed, set flash data and redirect to login
                session()->setFlashdata('error', 'Sai tài khoản hoặc mật khẩu');
                header("Location: /err");
            }
        }

        // Redirect to login page if no post data
        return redirect()->to('/err');
    }
}
