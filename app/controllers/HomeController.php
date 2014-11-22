<?php
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		// model initialize
		$t_user = new User;
		$users = $t_user->getUsers();
		foreach ($users as $user) {
			var_dump($user->twitter_id);
		}

		exit();
		$data = array();
		return($this->display($data, 'index.tpl'));
	}

}