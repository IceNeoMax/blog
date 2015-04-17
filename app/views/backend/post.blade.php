@extends('backend.layout.master')
@section('listing')
<div class="row">
    <div class="col-lg-12">
      	<h2>Posts &nbsp;<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> New Post</button></h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  	<tr>
                        <th><input type="checkbox"></th>
                        <th>Tiêu đề</th>
                        <th>Loại</th>
                        <th>Người đăng</th>
                        <th>Like</th>
                        <th>Comment</th>
                        <th>Lượt xem</th>
                        <th>Ngày đăng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                        	<p>{{$post->title}}</p>
                        	<ul class="list-inline">
                    			<li><a href='{{URL::to('post/update/'.$post['_id'])}}'>Chỉnh sửa</a></li>
                    			<li><a href='{{URL::to('post/'.$post['_id'])}}'>Xem</a></li>
                    			<li><a href=''>Chia sẻ</a></li>
                    			<li><a href='{{URL::to('post/delete/'.$post['_id'])}}'>Xóa</a></li>
                			</ul>
                        </td>
                        @if(isset($post["draft"]))
                        <td>Bản nháp</td>
                        @else
                        <td>Bản chính</td>
                        @endif
                        <td><span>{{$post->username}}</span></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>@if(isset($post->updated_at))
                          {{$post->updated_time}}
                        @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop