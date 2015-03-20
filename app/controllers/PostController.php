<?php

class PostController extends \BaseController
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
    }

    public function create()
    {

        return View::make('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {


        $input = filter_input_array(INPUT_POST, [
            'title' => FILTER_SANITIZE_STRING,
            'content' => FILTER_SANITIZE_STRING,
            'status' => [
                'filter' => FILTER_CALLBACK,
                'options' => function ($s) {
                    if (in_array($s, ['publish', 'unpublish'])) return $s;
                    else 'unpublish';
                }
            ],
        ]);

        $validator = Validator::make($input, Post::$rules);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput();

        } else {
            if(isset($input['link_thumbnail']))
            {
                $input['link_thumbnail'] = $this->upload();
            }
            Post::create($input);

        }

        return Redirect::to('admin/article')->with('message', 'post creer!!!');

    }

    public function postEdit($id)
    {
        $post = Post::findOrFail($id);

        return View::make('admin/edit', compact('post'));
    }


    public function changeStatus()
    {

        if (!empty($_POST)) {
            $status = Input::get('status');

            if (!in_array($status, ['publish', 'unpublish', 'trash', 'delete'])) {
                throw new InvalidArgumentException('bad argument');
            }

            $posts = Input::get('posts');

            if (empty($posts)) {
                return Redirect::back()->with('message', 'Aucune selection n\'a été faite!!!');
            }


            if ($status !== 'delete') {

                foreach ($posts as $id) {

                    $a = Post::findOrFail((int)$id);
                    $a->status = $status;
                    $a->save();
                }
            } else {
                $prevPath = URL::previous();
                $segment = substr(strrchr($prevPath, "/"), 1);
                $status = 'trash';

                foreach ($posts as $id) {
                    if($segment == 'trash'){
                        $a = Post::findOrFail((int)$id);
                        $a->delete();
                    }else{
                        $a = Post::findOrFail((int)$id);
                        $a->status = $status;
                        $a->save();
                    }
                }
            }
        }

        return Redirect::back();
    }

    public function changeCommentsStatus()
    {

        if (!empty($_POST)) {
            $status = Input::get('status');


            if (!in_array($status, ['publish', 'unpublish', 'trash', 'delete'])) {
                throw new InvalidArgumentException('bad argument');
            }

            $comments = Input::get('posts');

            if (empty($comments)) {
                return Redirect::back()->with('message', 'Aucune selection n\'a été faite!!!');
            }


            if ($status !== 'delete') {

                foreach ($comments as $id) {

                    $a = Comment::findOrFail((int)$id);
                    $a->status = $status;
                    $a->save();
                }
            } else {

                foreach ($comments as $id) {
                    $a = Post::findOrFail((int)$id);
                    $a->status = $status;
                    $a->save();
                }
            }
        }

        return Redirect::back();
    }

    public function creerFiches()
    {

        $input = filter_input_array(INPUT_POST, [

            'title' => FILTER_SANITIZE_STRING,
            'content' => FILTER_SANITIZE_STRING,
            'nb_questions' => FILTER_SANITIZE_STRING,
        ]);

        $validator = Validator::make($input, Question::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();

        } else {

            $posts = Question::create($input);
            $posts;

        }

        return View::make('admin/fichesEtape2', compact('posts'));

    }

    public function fichesEtape()
    {
        $input = filter_input_array(INPUT_POST, [

            'content' => FILTER_SANITIZE_STRING,
            'reponse' => FILTER_SANITIZE_STRING,
        ]);

        $posts = $_POST;

        for($i = 0; $i < $posts['nb']; $i++)
        {
            $a = new Choice;
            $a->question_id = $posts['posts_id'];
            $a->content = $posts['content_'.$i];
            $a->save();
        }


        return View::make('admin/fiches');

    }


}
