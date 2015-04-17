<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Register Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	</head>
	<body style="background-image: url('gaussian-blur-abstract-hd-wallpaper-1920x1200-10432.jpg')">
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Register</h1>
      </div>
      <div class="modal-body">
          <form id="register-form" class="form col-md-12 center-block" method="post" action="<?php echo URL::to('/register');?>">
            <div class="form-group">
              <input name="username" type="text" class="form-control input-lg" placeholder="Username">
            </div>
            <div class="form-group">
              <input name="email" type="text" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input id="password" name="password" type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <input name="passwordconfirm" type="password" class="form-control input-lg" placeholder="Confirm Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Register</button>
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
    $('#register-form').validate({
      rules:{
        username: {
          required: true,
          remote:{
            url:'check-username',
            type: "POST",
          },
        },
        email:{
          required:true,
          email:true,
          remote:{
            url:'check-email',
            type: "POST",
          },
        },
        password:{
          required:true,
          minlength: 6,
        },
        passwordconfirm:{
          equalTo:"#password",
        }
      },
      messages:{
        username:{
          required: "Vui lòng nhập tên đăng kí",
          minlength: "Tên đăng kí phải có 6 kí tự trở lên",
          remote:"Tên đăng kí đã tồn tại",
        },
        email:{
          required: "Vui lòng nhập email",
          email: "Vui lòng nhập đúng định dạng email",
          remote:"Email đã tồn tại",
        },
        password:{
          required: "Vui lòng nhập mật khẩu",
          minlength: "Mật khẩu phải 6 kí tự trở lên",
        },
        passwordconfirm:{
          equalTo: "Mật khẩu chưa khớp",
        }
      }
    })
  </script>
	</body>
</html>
