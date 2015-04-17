<?php
class PostController extends \BaseController {
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $posts = Post::all();//->toJson();
        $format="F j, Y, g:i a";
        foreach($posts as $post)
        {
            $date = new DateTime($post['created_at']);
            $formatDate = $date->format($format);
            $post["create_time"]=$formatDate;
            $user = User::getUserById($post["author_id"]);
            $post["username"] = $user["username"];
        }
        return View::make("home.index",
            [
                'posts'=>$posts,
                //'count'=>$count,
            ]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        $result = Auth::check();
	    if($result)
		    return View::make('Post/createPost');
	    else return Redirect::to('/login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $title = Input::get('title');
        $content= Input::get('content');
        $author_id = Session::get('user_name');
        $tags = explode(",",Input::get('tags'));
        $post = new Post();
        $post->title=$title;
        $post->content=$content;
        $post->author_id = Auth::id();
        $post->tags = $tags;
		$result = $post->save();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = Post::getPostById($id);
        $format="F j, Y, g:i a";
        $date = new DateTime($post['created_at']);
        $formatDate = $date->format($format);
        $post["create_time"]=$formatDate;
        $user = User::getUserById($post['author_id']);
        $post["username"] = $user["username"];
        return View::make("home.show", ['post'=>$post]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        $post = Post::getPostById($id);
        $title = Input::get('title');
        $content= Input::get('content');

        $tags = explode(",",Input::get('tags'));
        $post->title=$title;
        $post->content=$content;
        $post->tags = $tags;

        $result = $post->save();
        return $result;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
        //Post::destroy($id);
        return Response::json(array("success"=>true));
	}
    public function getComment($post_id)
    {
        $comments = Post::getCommentsOfPost($post_id);
        return Response::json($comments);
    }
    public function getDelete($id){
        $this->destroy($id);
    }
    public function getUpdate($id)
    {
        $post = Post::getPostById($id);
        return View::make('Post/updatePost',array('post'=>Post::getPostById($id)));
    }
    public function getIndex($username)
    {
        $userId = User::where('username',$username)->get(array("_id"));
        $format="F j, Y, g:i a";
        $posts = Post::where("author_id",$userId[0]["_id"])->get();
        foreach($posts as $post)
        {
            $date = new DateTime($post['created_at']);
            $formatDate = $date->format($format);
            $post["create_time"]=$formatDate;
            $user = User::getUserById($post["author_id"]);
            $post["username"] = $user["username"];
        }
        return View::make('home.index',array("posts"=>$posts));
    }
}
