<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class Login extends BaseController
{
	public function index()
	{
		return view('login_view');
	}

	public function doLogin()
	{
		$username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
		
		$user = new Users();
		$cek = $user->get_data($username, $password);

      if (($cek['username'] == $username) && ($cek['password'] == $password))
      {
         session()->set('username', $cek['username']);
         session()->set('password', $cek['password']);
         return redirect()->to(base_url('home'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('login'));
      }
   }
}