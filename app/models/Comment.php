<?php
/**
 * Created by PhpStorm.
 * User: Nhuan
 * Date: 4/8/2015
 * Time: 1:05 PM
 */
class Comment extends \Jenssegers\Mongodb\Model
{
    protected $collection = "comments";
    public static function  getCommentById($id)
    {
        $comment = Comment::where("_id",$id)->first();
        $user_id = $comment['user_id'];
        $user = User::getUserById($user_id);
        $comment['username'] = $user['username'];
        $comment['email'] = $user['email'];
        $post = Post::getPostById($comment["post_id"]);
        $comment['title'] = $post['title'];
        $format="F j, Y, g:i a";
        $date = new DateTime($post['updated_at']);
        $formatDate = $date->format($format);
        $comment['update_time'] = $formatDate;
        return $comment;
    }
    public static function getCommentsOfPost($post_id)
    {
        $comments = Comment::where('post_id',$post_id)->get();
        foreach($comments as $comment)
        {
            $user_id = $comment['user_id'];
            $user = User::getUserById($user_id);
            $comment['username'] = $user['username'];
            $comment['email'] = $user['email'];
            $post = Post::getPostById($comment["post_id"]);
            $comment['title'] = $post['title'];
            $format="F j, Y, g:i a";
            $date = new DateTime($post['updated_at']);
            $formatDate = $date->format($format);
            $comment['update_time'] = $formatDate;
        }
        return $comments;
    }
}