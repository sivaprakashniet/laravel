<?php 
class UsersController extends BaseController {
    
    protected $layout = "layouts.default";

    public function getRegister() 
    {

   		$this->layout->content = View::make('users.register');
	}
}