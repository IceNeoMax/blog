@foreach($posts as $post)
{
         <div class="panel-heading">
            <h3 class="panel-title">
            <h2>
                <a href="'post/{{$post['_id']}}">{{$post->title}}</a>
            </h2>
            </h3>
        </div>
        $format="F j, Y, g:i a";
        $date = new DateTime($post['created_at']);
        $formatDate = $date->format($format);
        <p>{{$post->user}}, created on {{$post->createdate}}</p>
        <div class="panel-body">
            <img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:30%; height:30%; float:left">

            @if($post->content<100)
            <p>{{$post->content}}</p>
            @else
            <p>{{substr($post->content,0,200)}}</p>
            <a href="#" style="float:right; ">Read More...</a>
        </div>
        <div class="panel-footer">
         @foreach($post['tags'] as $key => $tag)
            {
                <a href="/tag/{{$tag}}">{{$tag}}</a>
            }
        </div>
}
<?php
/**
 * Created by PhpStorm.
 * User: Nhuan
 * Date: 4/12/2015
 * Time: 7:57 AM
 */ 