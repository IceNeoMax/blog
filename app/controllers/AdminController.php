<?php
	class AdminController extends BaseController{

		public function getDashBoard(){
			return View::make('backend.dashboard');
		}

		public function getPost(){
            echo 'touch post';
			return View::make('backend.post');
		}
        public function getIndex(){
            $id = Auth::id();
            $posts = Post::where("author_id",$id)->get();
            foreach($posts as $post)
            {
                $user = $post->user;
                $post["username"] = $user["username"];
                $format="F j, Y, g:i a";
                $date = new DateTime($post['updated_at']);
                $formatDate = $date->format($format);
                $post["updated_time"] = $formatDate;
            }
            //print_r($posts[2]);
            return View::make('backend.post',array('posts'=>$posts));
        }
		public function getComment(){
            $id = Auth::id();
            $postList = Post::where("author_id",$id)->get(array('_id'));
            $postIdList = array();
            foreach($postList as $post)
            {
//                echo $post->_id;
  //              echo "<br>";
                array_push($postIdList,$post->_id);
            }
            $comment_data = Comment::whereIn('post_id',$postIdList)->get();
            //echo count($comment_data);
            foreach($comment_data as $comment)
            {
                $user_id = $comment['user_id'];
                $user = User::getUserById($user_id);
                $post = Post::where('_id',$comment->post_id)->first();
                $comment['title'] = $post['title'];
                $comment['username'] = $user['username'];
                $comment['email'] = $user['email'];
                $format="F j, Y, g:i a";
                $date = new DateTime($comment['updated_at']);
                $formatDate = $date->format($format);
                $comment['update_time'] = $formatDate;
                if(isset($user['fb_img'])) $comment['fb_img'] = $user['fb_img'];
            }
			return View::make('backend.comment',array('comment_data'=>$comment_data));
		}
	}
?>