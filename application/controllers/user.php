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
            echo 'logged in';
        }else{
            echo 'failed to login :: ';
            echo $adldap->getLastError();
        }

    }

    public function get_logout()
    {

    }

}