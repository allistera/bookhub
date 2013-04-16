<?php

class User_Controller extends Base_Controller {

	public $restful = true;    

	public function get_login()
    {
        return View::make('user.login');
    }

    public function post_login()
    {
        include_once(path('bundle') . 'adldap/adLDAP.php');
        try {
            $adldap = new adLDAP();
        }
        catch (adLDAPException $e) {
            echo $e; 
            exit();   
        }
        
        //authenticate the user
        if ($adldap->authenticate(Input::get('username'), Input::get('password'))){
            //establish your session and redirect
            Session::put('loggedin', true);
            Session::put('username', Input::get('username'));
            
            return Redirect::home();

        }else{
            Session::flash('error', 'Username and/or Password incorrect, please try again.');

            return Redirect::to('user/login');
        }

    }

    public function get_logout()
    {
        Session::forget('loggedin');
        Session::forget('username');

        Session::flash('success', 'You have successfully logged out!');

        return Redirect::to('user/login');
    }

    public function get_history()
    {
        // Get all history for current logged in user
        $history = History::where('username', '=', Session::get('username'))->get();
        
        return View::make('user.history')->with('history', $history);
    }

}