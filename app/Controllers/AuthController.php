<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserAdminModel;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost()
    {
        $model = new UserAdminModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && $user['password'] === $password && $user['role'] === 'admin') {
            session()->set([
                'is_admin' => true,
                'username' => $user['username']
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid login credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
