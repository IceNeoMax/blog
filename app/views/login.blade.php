<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</head>
	<body style="background-image: url('gaussian-blur-abstract-hd-wallpaper-1920x1200-10432.jpg')">
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form id="loginform" class="form col-md-12 center-block" method="post" action="<?php echo URL::to('/login');?>">
            <div class="form-group">
              <input name="email" type="text" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" id="login">Log In</button>
              <span class="pull-right">
                {{HTML::link('register','Register')}}
              </span>

              <span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">         
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
    <script type="text/javascript">
      // $("#login").on("click",function(){
      //   var $form=$("#loginform");
      //   //lay tat ca noi dung trong form login
      //   var formData= new FormData($form[0]);
      //   $.ajax({
      //     url:$form.attr("action"),
      //     type:"POST",
      //     data:formData,
      //     cache: false,
      //     processData: false,
      //     contentType: false,
      //     beforeSend: function(){

      //     },
      //     success: function(data){
      //       var rs=$.parseJSON(data);
      //       if(rs.status){
      //         alert(rs.message);
      //       }
      //       else{
      //         alert(rs.message);
      //       }
      //     }
      //   });
      // });
    </script>
  </body>
</html>