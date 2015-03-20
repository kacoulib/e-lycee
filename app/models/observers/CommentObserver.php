<?php
namespace app\models\observers;
class CommentObservers{

    public function saved($comment)
    {
        $comment->post->comment_count ++;
        $comment->post->save();

    }

}
