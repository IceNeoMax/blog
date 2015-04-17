@extends('backend.layout.master')
@section('listing')
<div class="row">
    <div class="col-lg-12">
      	<h2>Comments</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  	<tr>
                        <th><input type="checkbox"></th>
                        <th>Comment</th>
                        <th>Người đăng</th>
                        <th>Ngày đăng</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($comment_data as $comment)
                    <tr>
                        <td><input type="checkbox"></td>

                        <td>
                        	<p>{{$comment->content}} on {{$comment->title}}</p>
                        	<ul class="list-inline">
                    			<li><a href='{{URL::action('CommentController@destroy')}}'>Xóa nội dung</a></li>
                    			<li><a href=''>Xóa</a></li>
                    			<li><a href=''>Spam</a></li>
                			</ul>
                        </td>
                        <td><span>{{$comment->username}}</span></td>
                        <td>{{$comment->update_time}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop