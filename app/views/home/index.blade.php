@include('home.header')
@stop
@extends('home.layout.first')
@section('listing')
@foreach($posts as $post)
<div class="panel-heading">
		<h3 class="panel-title"><h2><a href="{{$post['_id']}}">{{$post->title}}</a></h2></h3>
</div>
<div>
		<p>Author: &nbsp; {{$post->username}} &nbsp; on {{$post->create_time}}</p>
</div>
<div class="panel-body">
			<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:200; height:150; float:left">
            <p>
                @if(strlen($post->content)<400)
                {{$post->content}}
                @else
                {{substr($post->content,0,400)}}
                @endif
            </p>
			<a href="{{$post['_id']}}" style="">Read More...</a>
</div>
<div class="panel-footer">
			<span>
			@foreach($post['tags'] as $key => $tag)
			    <a href="">{{$tag}} &nbsp;</a>
			@endforeach
			</span>
</div>
@endforeach
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