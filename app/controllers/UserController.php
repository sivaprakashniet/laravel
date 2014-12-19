<?php
class UserController extends BaseController {

	protected $guarded = array();

	public function showWelcome()
	{
		return View::make('users.index');
	}

	public function showLogin()
	{
		return View::make('users.login');
	}
	public function showSignup(){
		return View::make('users.signup');
	}
	public function doLogin()
	{
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required|alphaNum|min:6'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('auth/login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$data = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			if (Auth::attempt($data)) {
				Session::flash('message', 'Logged in successfully!');
				return Redirect::to('blogs');
			} else {
				Session::flash('message', 'Crediantial not match !');
				return Redirect::to('auth/login')->withInput(Input::except('password'));;

			}

		}
	}
	public function createUser()
	{
		$data=Input::all();
		$rules=array(
			'name'=>'required',
			'username'=>'required|min:6',
			'email'=>'required|email|unique:users',
			'password'=>'required|min:6|confirmed',
			'password_confirmation' =>'required|min:6'
		);
		$validation=Validator::make($data,$rules);
		if ($validation->fails()) {
			return Redirect::to('auth/signup')
			->withInput(Input::except('password'))
			->withErrors($validation);
		}else{
			$insert=array(
				'name'=>$data['name'],
				'username'=>$data['username'],
				'email'=>$data['email'],
				'password'=>Hash::make($data['password'])
				);
			$user = User::create($insert);
			if($user){
	            Auth::login($user);
	            Session::flash('message', 'signup process completed !');
	            return Redirect::to('/blogs');
	        }else{
	        	Session::flash('message', 'Something went wrong !');
	        	return Redirect::to('auth/signup');
	        }

		}
		return Redirect::to('auth/signup');
	}
	public function userLogout(){
		Auth::logout();
		Session::flash('message', 'signout successfully!');
		return Redirect::to('/');
	}

}