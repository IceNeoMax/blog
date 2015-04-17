<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

		<title></title>
	</head>
	<body>
	<div id="banner" class="banner">
	<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; width:100%; height:600px; z-index: -999998; position: absolute;">
	<img src="1.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width:100%; height:600px; z-index: -999999; left: 0px;">
	</div>
	<!--<img style="z-index:-999999; width:100%; height:500px; margin-bottom:30px;" src="1.jpg" >
		<script src="smooth-scroll-master/dist/js/bind-polyfill.js"> </script>
		<script src="smooth-scroll-master/dist/js/smooth-scroll.js"> </script>-->
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
		
		
		<!--main-->
		<div id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					<div class="post">
                        <div class="panel panel-default">
						<?php
                            foreach($posts as $post) {
                                echo '<div class="panel-heading">';
                                echo '<h3 class="panel-title"><h2><a href="'.URL::to('post/'.$post['_id']).'">';
                                echo $post->title;
                                echo '</a></h2></h3></div>';

                                echo '<div class="panel-body">';
                                $content = $post->content;
                                if(strlen($content)<40)
                                    echo $content;
                                else echo substr($content,0,200);
                                echo '</div>';

                                echo '<div class="panel-footer">';
                                echo '<span class="glyphicon glyphicon-tags">';

                                foreach ($post['tags'] as $key => $tag) {
                                    echo '<a href="' . URL::to('/tag/' . $tag) . '">' . $tag . '</a> ';
                                }
                                $format="F j, Y, g:i a";
                                $date = new DateTime($post['created_at']);
                                $formatDate = $date->format($format);
                                echo '<p>Posted on ' . $formatDate . ' ';
                                echo '</span>';
                                echo '</div>';
                            }
                        echo '</div></div>';

                        ?>
					</div>
					<!-- end col-md8-->

					<div class="col-md-3 sidebar">
						<div class="panel panel-info">
							<div class="panel-heading"> Bài mới</div>
							<div class="panel-body">
								<ul>
									<li><a href="">Bài 1</a></li>
									<li><a href="">Bài 2</a></li>
									<li><a href="">Bài 3</a></li>
									<li><a href="">Bài 4</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
</body>
	<script>
	smoothScroll.init();
	</script>
</html>