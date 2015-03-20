<?php

class BlogController extends BaseController
{

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

    public function __construct(){
        View::composer(array('blog.index','blog.isdMali','blog.presentation','blog.information-pratique',
            'blog.licence','blog.master','blog.doctorat','blog.continue','blog.lycee','blog.contact','blog.single'), function($view)
        {
            $view->with('posts', Post::orderBy('id', 'DESC')->take(3)->get());
        });
    }

    public function index()
    {
        return View::make('blog.index');
    }

    public function isdMali()
    {
        return View::make('blog.isdMali');
    }

    public function presentation()
    {
        return View::make('blog.presentation');
    }

    public function information()
    {
        return View::make('blog.information-pratique');
    }

    public function licences()
    {
        return View::make('blog.licence');
    }

    public function masters()
    {
        return View::make('blog.master');
    }

    public function doctorat()
    {
        return View::make('blog.doctorat');
    }

    public function continues()
    {
        return View::make('blog.continue');
    }

    public function lycee()
    {
        return View::make('blog.lycee');
    }

    public function contact()
    {
        return View::make('blog.contact');
    }

    public function show( $id) {
        $post = Post::findOrFail($id);
        $comments = $post->comments()->publish()->get();
        $title = strip_tags($post->title); // voir le master

        return View::make('blog.single', compact('post', 'title', 'comments'));
    }

    public function store() {
        $input = filter_input_array(INPUT_POST, [
            'title' => FILTER_SANITIZE_STRING,
            'content' => FILTER_SANITIZE_STRING,
            'email' => FILTER_SANITIZE_EMAIL,
            'post_id' => FILTER_SANITIZE_NUMBER_INT
        ]);

        $validator = Validator::make($input, Comment::$rules);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput();

        } else {
            Comment::create($input);

        }
        return Redirect::back()->with('message','message envoyé');
    }

}
