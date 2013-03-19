<?php

class Ebook_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        $ebooks = Ebook::all();

        return View::make('ebook.index')->with('ebooks', $ebooks);
    }

    public function get_get($id)
    {
        return Response::eloquent(Ebook::find($id));
    }

    public function get_create()
    {
        return View::make('ebook.create');
    }

    public function post_create()
    {
        $rules = [
                    'title' => 'required',
                    'author' => 'required',
                    'publisher' => 'required',
                    'publish_date' => 'required',
                    'description' => 'required',
                    'genre' => 'required',
                    'file' => 'required|mimes:pdf',
                    'cover' => 'required|image',
                 ];

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::to('ebook/create')->with_errors($validation->errors);
        }

        // Generate random filename for the ebook
        $ebookFilename = Str::random(20) .'.'. File::extension(Input::file('file')['name']);

        // Upload the ebook to public/uploads/ebooks
        Input::upload('file', path('public') . 'uploads/ebooks', $ebookFilename);

        // Generate random filename for the cover photo
        $coverFilename = Str::random(20) .'.'. File::extension(Input::file('cover')['name']);

        // Upload the ebook to public/uploads/ebooks
        Input::upload('cover', path('public') . 'uploads/covers', $coverFilename);

        // Now create a new ebook class and populate the properties
        $ebook = new Ebook;

        $ebook->title = Input::get('title');
        $ebook->author = Input::get('author');
        $ebook->publisher = Input::get('publisher');
        $ebook->publish_date = date('Y-m-d', strtotime(str_replace('-', '/', Input::get('publish_date'))));
        $ebook->description = Input::get('description');
        $ebook->genre = Input::get('genre');
        $ebook->file_name = $ebookFilename;
        $ebook->cover_photo = $coverFilename;

        // Save the ebook to the database
        $ebook->save();

        return Redirect::to('/')->with('success', "The {$ebook->title} was successfully created!");
    }
}