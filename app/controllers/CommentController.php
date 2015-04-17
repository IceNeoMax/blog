<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $id = Auth::id();
        $comment_data = Comment::all();
        foreach($comment_data as $comment)
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
            if(isset($user['fb_img'])) $comment['fb_img'] = $user['fb_img'];
            if($comment["user_id"]==$id) $comment["owner"]=true;else $comment["owner"]=false;
        }
        return Response::json($comment_data);
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
//

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Auth::check()
//        if(true) {
        $content = Input::get('content');
        $id = Auth::id();
        if($content!=null)
        {
            $comment = new Comment();
            $comment->content = $content;
            $comment->user_id = Auth::id();
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
//        else
//        {
//           return Redirect::to('/login');
//        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        $all = Input::all();
        if(isset($all['list']))
        echo $all['list'];
        //echo $id;
	}

//
//	/**
//	 * Show the form for editing the specified resource.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function edit($id)
//	{
//		//
//	}


//	/**
//	 * Update the specified resource in storage.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function update($id)
//	{
//		//
//	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
    {
        //
//        try {
//            Comment::destroy($id);
//        return Response::json(array('success' => true));
//	    } catch(Exception $ex)
//        {
//            return Response::json(array('success' => false));
//        }
        if(Comment::destroy($id))
        return Response::json(array('success' => true));
        else return Response::json(array('success' => false));
        //return Response::json(array('success' => true));
    }
    public function getCommentOfPost($id)
    {

    }
}
