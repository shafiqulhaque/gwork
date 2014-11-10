<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|	Route::get('/', 'HomeController@showWelcome');
	|*/
    protected $layout = 'layouts.main';

	public function showWelcome()
    {
		return View::make('hello');
	}

//    public function getSearch(){
//        if (!empty($_POST)) {
//            $q = Input::get('kw_search');
//
//        $searchTerms = explode(' ', $q);
//
//        $query = DB::table('users');
//        foreach($searchTerms as $term)
//        {
//            $query->where('firstname', 'LIKE', $term .'%');
//            //$query = $query->orWhere('name', 'LIKE', '%'. $term .'%');
//        }
//        $user = $query->paginate(10);
//
//        $this->title = View::make('user.view');
//        $this->layout->content = View::make('user.view')->with(array('users' => $user));
//        }
//    }
}
