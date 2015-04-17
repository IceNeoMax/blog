@include('home.header')
@stop
@extends('home.layout.first')
@section('script')
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
<script src="{{ URL::asset('assets/js/comment/app.js') }}"></script>
<script src="{{ URL::asset('assets/js/comment/controller/mainCtrl.js') }}"></script>
<script src="{{ URL::asset('assets/js/comment/service/commentService.js') }}"></script>
@section('listing')
<div class="panel-heading">
		<h3 class="panel-title"><h2><a href="post/{{$post['_id']}}">{{$post->title}}</a></h2></h3>
</div>
<div>
		<p>Author: &nbsp; {{$post->username}} &nbsp; on {{$post->create_time}}</p>
</div>
<div class="panel-body">
<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:270; height:200; float:left">
{{$post->content}}
</div>
<div ng-app="commentApp" ng-controller="mainController">
<b>Comment List:</b><br>
    <div ng-repeat = "comment in comments">
                        <img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-circle" style="float:left; margin-right:10px; width:75; height:75">
                        <b><% comment.username %>:</b><br><% comment.content %>
                        
                        <a style="float:right;" href="#" ng-hide="!comment.owner" ng-click="deleteComment(comment._id,$index);$event.preventDefault(); $event.stopPropagation();">Delete</a>
                        <br>
                        <hr>
     </div>

<form  ng-submit = "submitComment()">
    <div class="form-group" >
        <label for="content" class="control-label">Comment:</label>
        <textarea name = "content" ng-model = "commentData.content" id="comment" class="form-control" rows="4" placeholder="Write a comment"></textarea>
    </div>
    <div class="form-group">
        .<button type="submit" class="btn btn-primary btn-lg">Post</button>
    </div>
</form>

</div>
@stop
@section('sidebar_post')
    <div class="panel-heading"> <h2>Bài mới</h2></div>
        <div class="panel-body">
            <a href="">Bài 1</a><br>
            <img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:60px; height:60px; float:left">
            Tính từ 
            Có liên quan đến
            relative evidence
            bằng chứng liên quan
            to give facts relative to the matter....
            <a href="#" style="float:right; ">Read More...</a><hr>
@stop