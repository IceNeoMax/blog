<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://googledrive.com/host/0B8z8ereLRdjhVXZIeTBsdU4wNFU">
		<link rel="stylesheet" type="text/css" href="https://googledrive.com/host/0B8z8ereLRdjhMHM2cmZPWE1IVW8">
        <!-- ANGULAR -->
        <!-- all angular resources will be loaded from the /public folder -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
        <script src="controller/mainCtrl.js"></script> <!-- load our controller -->
        <script src="service/commentService.js"></script> <!-- load our service -->
        <script src="app.js"></script> <!-- load our application -->
		<title>Concept4</title>
		
	</head>
	
	<body class="container" ng-app="commentApp" ng-controller="mainController">
	<div id="banner" class="banner">
	<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; width:100%; height:600px; z-index: -999998; position: absolute;">
	<img src="https://googledrive.com/host/0B8z8ereLRdjhdUdyejJFaWpQdEE" style="position: absolute; margin: 0px; padding: 0px; border: none; width:100%; height:600px; z-index: -999999; left: 0px;">
	</div>
	<!--<img style="z-index:-999999; width:100%; height:500px; margin-bottom:30px;" src="1.jpg" >-->
	<div class="banner-caption">
		<span style="font-size:40px;">Fly Your   </span><span class="word-top" style="font-size:60px; color: #55acee;">Imagination</br></span>
		<span class="word-top" style="position:absolute; font-size:30px; left:2%;">Don't live a serious life. Let it Fun!</span>
		</div>
		</div>
	<header class="header fixed clearfix navbar navbar-fixed-top">
		
		<div class="col-md-1"></div>
		<div class="col-md-2">	<span class="word-top"> Imagine</span>	
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<ul class="nav navbar-nav">
			<li class="active"><a href="">Menu1</a></li>
			<li><a href="">Menu2</a></li>
			<li><a href="">Menu3</a></li>
			<li><a href="">Menu4</a></li>
			<li><a href="">Menu5</a></li>		
		</ul>
		</div>
		
		</header>
		
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post">
						<div class="panel panel-default">
						
							<div class="panel-heading">
							<h3 class="panel-title"><h2><a href="">Tiêu đề</a></h2></h3>
							</div>
							<p>Author: Nguyen Dep Trai. Date: 3/2/2015.</p>
							<div class="panel-body">
							<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:30%; height:30%; float:left">
							Tính từ 
								Có liên quan đến
								relative evidence
								bằng chứng liên quan
								to give facts relative to the matter
								đưa ra những sự việc liên quan đến vấn đề
								Cân xứng với, cân đối với, tuỳ theo
								supply is relative to demand
								số cung cân xứng với số cầu
								beauty is relative to the beholder's eyes
								vẻ đẹp là tuỳ theo ở mắt của người nhìn
								(ngôn ngữ học) quan hệ, có liên quan đến (một danh từ..)
								relative pronoun
								đại từ quan hệ
							
							</div>
						</div>
						
					</div>

					<b>Comment List:</b><br>
                    <div ng-repeat = "comment in comments">
                        <img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-circle" style="margin-right:10px; width:10%; height:10%">
                        <b>{{comment.username}}</b>
                        <p>{{comment.content}}</p>
                        <a href="#" ng-hide="!comment.owner" ng-click="deleteComment(comment._id,$index);$event.preventDefault(); $event.stopPropagation();">Delete</a>
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
					
					<div class="col-md-4 sidebar">
						<div class="panel panel-info">
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
										
										<a href="">Bài 2</a><br>
										<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:60px; height:60px; float:left">
										Tính từ 
										Có liên quan đến
										relative evidence
										bằng chứng liên quan
										to give facts relative to the matter....
										<a href="#" style="float:right; ">Read More...</a><hr>
								
										<a href="">Bài 3</a><br>
										<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:60px; height:60px; float:left">
										Tính từ 
										Có liên quan đến
										relative evidence
										bằng chứng liên quan
										to give facts relative to the matter....
										<a href="#" style="float:right; ">Read More...</a><hr>
										
										<a href="">Bài 4</a><br>
										<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:60px; height:60px; float:left">
										Tính từ 
										Có liên quan đến
										relative evidence
										bằng chứng liên quan
										to give facts relative to the matter....
										<a href="#" style="float:right; ">Read More...</a><hr>
							</div>
						</div>
					</div>

			</div>
		</div>
		</div>