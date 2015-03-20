<?php

class AuthController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        return View::make('admin/login');
    }


    public function inscription()
    {
        $students = User::student();
        return View::make('admin.inscription',compact('students'));
    }

    public function logout()
    {

        Auth::logout();

        return Redirect::to('/')->with('message', 'vous avez bien été deconnecté');
    }

}