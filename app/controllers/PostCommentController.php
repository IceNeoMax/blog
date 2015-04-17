<?php

class PostCommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($post_id)
	{
		//
        try{
            $id = Auth::id();
        }
        catch(Exception $e){}
        $comments = Comment::getCommentsOfPost($post_id);
        foreach($comments as $comment)
        {
            if($comment["user_id"]==$id) $comment["owner"]=true;else $comment["owner"]=false;
        }
//        if($id==null) {
////            return Response::json($comments,array(
////                "message"=>"Đăng nhập để comment",
////                "isHide"=>true));
//        }
        return Response::json($comments);
//	    return Response::json("Error",404);
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
//	public function create()
//	{
//		//
//	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($post_id)
	{
		//
        try {
            if (Auth::check()) {
            }
        }
        catch(Exception $ex)
        {
            return Response::json(array(
                "message"=>"Đăng nhập để comment",
                "isHide"=>true), 404);
        }
        $content = Input::get('content');
        $id = Auth::id();
        if($id==null)
        {
            return Response::json(array(
                "message"=>"Đăng nhập để comment",
                "isHide"=>true), 404);
        }

        if($content!=null)
        {
            $comment = new Comment();
            $comment->content = $content;
            $comment->user_id = Auth::id();
            $comment->post_id=$post_id;
            $comment->save();
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
            if(isset($user['fb_img'])) $comment['fb_img'] = $user['fb_img'];
            if($comment["user_id"]==$id) $comment["owner"]=true;else $comment["owner"]=false;
            return Response::json($comment);
        }
        else return Response::json(array('success'=>false));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function show($id)
//	{
//		//
//        echo $id;
//	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function edit($post_id,$comment_id)
//	{
//		//
//
//	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($post_id,$comment_id)
	{
		//
        if(!Auth::check())
        {
            return Response::json("Error",404);
        }
        $content = Input::get('content');
        if($content!=null)
        {
            $comment = Comment::getCommentById($comment_id);
            $comment->content = $content;
            $comment->save();
            $format="F j, Y, g:i a";
            $date = new DateTime($comment['updated_at']);
            $formatDate = $date->format($format);
            $comment['update_time'] = $formatDate;
            if(isset($user['fb_img'])) $comment['fb_img'] = $user['fb_img'];
            return Response::json($comment);
        }
        else return Response::json(array('success'=>false));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($post_id,$id)
	{
		//
        if(Comment::destroy($id))
            return Response::json(array('success' => true));
        else return Response::json(array('success' => false));
	}


}
