<?php

class Contact_Controller extends Base_Controller
{
  public $restful = true;    

  public function get_index()
  {
    return View::make('contact.form');
  }

  public function post_index()
  {
    $rules = [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ];

    $validation = Validator::make(Input::all(), $rules);

    if ($validation->fails()){
        // Validation has failed.
        return Redirect::to('contact')->with_input()->with_errors($validation);
    }else{
      Message::send(function($message)
      {
          $message->to('allisteraall@gmail.com');
          $message->from('admin@bookhub.com', 'Do Not Reply');
          $message->reply(Input::get('email'), Input::get('name'));

          $message->subject('Feedback from BookHub');
          $message->body(Input::get('message'));
      });

      return View::make('contact.success');
    }
  }
  

}
