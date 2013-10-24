<?php

class UserController extends BaseController
{

	public function login()
	{

		$this->layout->content = View::make('user.login');
	}

	public function register()
	{
		
	}

	public function logout()
	{
		
	}

}
