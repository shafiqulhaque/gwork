<?php

class UserController extends BaseController {
    public function __construct() {
    }
    
    protected $layout = 'layouts.main';

    public function getData() {

        $filter = DataFilter::source(new User);
        $filter->add('id','ID', 'text');
        $filter->add('firstname','First Name','text');
        $filter->add('lastname','Last Name','text');
        $filter->submit('search');
        $filter->reset('reset');
        $filter->build();

        $user = DataGrid::source($filter);
        $user->add('id','ID', TRUE)->style("width:100px");
        $user->add('firstname','First Name', TRUE);
        $user->add('lastname','Last Name', TRUE);
        $user->add('email','Email');
        $user->orderBy('id','asc');
        $user->paginate(10);
        return View::make('user.view', compact('filter', 'user'));
    }




//    public function getSearch(){
//        if (!empty($_POST)) {
//            $q = Input::get('kw_search');
//
//            $searchTerms = explode(' ', $q);
//
//            $query = DB::table('users');
//            foreach ($searchTerms as $term) {
//                $query->where('firstname', 'LIKE', $term . '%');
//                //$query = $query->orWhere('name', 'LIKE', '%'. $term .'%');
//            }
//            $user = $query->paginate(10);
//
//            $this->title = View::make('user.view');
//            $this->layout->content = View::make('user.view')->with(array('users' => $user));
//        }
//
//    }

}
