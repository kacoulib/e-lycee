<?php

class DashboardController extends \BaseController
{

    protected $layout = 'admin.layouts.master';

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */


    public function __construct()
    {
        if (!Auth::check()) {

            return Redirect::to('admin.login')->with('message', 'Veuillez vous connecté');
            exit();

        }

        View::composer('*', function($view)
        {
            $view->with('$data',  1);
        });

    }

    public function index()
    {
        if (Input::server('REQUEST_METHOD') == 'POST') {
            $userdata = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            $validation = Validator::make($userdata, [
                'username' => 'required',
                'password' => 'required'
            ]);

            if ($validation->fails()) {

                return Redirect::back()->withErrors($validation)->withInput(Input::Except('password'));
            }
            if (!Auth::attempt($userdata, true)) {

                return Redirect::back()->with('message', 'desoler mais il y\'a une erreur');
                exit();
            }

        }
        $user = Auth::user();
        $students = Role::not_admin()->get();
        $first_class = Role::first_class()->get();
        $final_class = Role::final_class()->get();
        $postsAll = Post::all();
        $posts = Post::all()->take(3);
        $questions = Question::all();
        $comments = Comment::all();

        return View::make('admin/dashboard',compact('user','posts','postsAll','students','questions','comments','first_class','final_class'));

    }

    public function fiches(){
        $questions = Question::all();

        $user = Auth::user();

        return View::make('admin/fiches',compact('questions','user'));
    }

    public function articles(){
        $notTrash = Post::notTrash()->paginate(5);
        $links = $notTrash->links();

        return View::make('admin/articles',compact('notTrash','links'));
    }

    public function commentaires(){
        $user = Auth::user();
        $comments = Comment::paginate(5);
        $links = $comments->links();

        return View::make('admin/commentaires',compact('user','comments','links'));
    }

     public function pages(){
        $user = Auth::user();
        $posts = Post::all();

        return View::make('admin/pages',compact('user','posts'));
    }


    /**
     * @return mixed
     */
    public function eleves(){
        $first_class = Role::first_class()->get();
        $final_class = Role::final_class()->get();

        return View::make('admin/eleves',compact('first_class','final_class'));
    }

    public function trash()
    {

        $trash = Post::trash()->paginate(5);
        $links = $trash->links();
        $nbTrash = Post::trash()->count();

        return View::make('admin/trash', compact('trash', 'links', 'nbTrash'));
    }

}
