<?php
/**
 * Created by PhpStorm.
 * User: Jarbit
 * Date: 18/11/2014
 * Time: 20:18
 */
 ?>

 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login Page</title>
 	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

 	<!-- bootstrap framework -->
	 <link href="public/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
 	<!-- google webfonts -->
 	{{--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>--}}
 	<link href="public/template/assets/css/login.css" rel="stylesheet">

 </head>
 <body>
 <form action="{{ URL::route('language-chooser')}}" method="post">
	 <select name="language">
		 <option value="en">English</option>
		 <option value="es">Español</option>
	 </select>
	 <input type="submit" value="Choose">
	 {{ Form::token() }}

 </form>
 <div class="login_container">
		<form id="login_form" action="{{URL::to("/login")}}" method="post">
 			<h1 class="login_heading">Login <span>/ <a href="#" class="open_register_form">register</a></span></h1>

			{{trans('welcome.welcome')}}

			@include('admin.layouts.messages')
			<div class="form-group">
				<label for="login_username">email</label>
 				<input type="email" name="email" class="form-control input-lg" placeholder="email" id="login_email">
 			</div>
 			<div class="form-group">
 				<label for="login_password">Password</label>
 				<input type="password" name="password" class="form-control input-lg" placeholder="password" id="login_password">
 				<span class="help-block"><a href="#">Forgot password?</a></span>
 			</div>
 			<div class="submit_section">
 				<button class="btn btn-lg btn-success btn-block">Continue</button>
 			</div>
 		</form>
 		<form id="register_form" style="display:none">
 			<h1 class="login_heading">Register <span>/ <a href="#" class="open_login_form">login</a></span></h1>
 			<div class="form-group">
 				<label for="register_username">Username</label>
 				<input type="text" class="form-control input-lg" id="register_username">
 			</div>
 			<div class="form-group">
 				<label for="register_email">Email</label>
 				<input type="text" class="form-control input-lg" id="register_email">
 			</div>
 			<div class="form-group">
 				<label for="register_password">Password</label>
 				<input type="password" class="form-control input-lg" id="register_password">
 			</div>
 			<div class="form-group">
 				<label class="checkbox-inline"><input type="checkbox" name="register_terms" id="register_terms"> Agree to <a href="javascript:void(0)" data-toggle="modal" data-target="#terms_modal">terms&conitions</a></label>
 			</div>
 			<div class="submit_section">
 				<button type="button" class="btn btn-lg btn-success btn-block">Continue</button>
 			</div>
 		</form>
 	</div>

 	<div class="modal fade" id="terms_modal">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal">&times;</button>
 					<h4 class="modal-title">Terms & Conditions</h4>
 				</div>
 				<div class="modal-body">
 					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eaque tempora! Porro cumque labore voluptate dolore alias libero commodi deserunt unde aspernatur dignissimos quaerat similique maiores quasi eos optio quidem.
 					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eaque tempora! Porro cumque labore voluptate dolore alias libero commodi deserunt unde aspernatur dignissimos quaerat similique maiores quasi eos optio quidem.
 				</div>
 			</div>
 		</div>
 	</div>

 	<!-- jQuery -->
 	<script src="public/vendor/jquery/dist/jquery.min.js"></script>
 	<!-- bootstrap js plugins -->
 	<script src="public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
 	<script>
 		$(function() {
 			// switch forms
 			$('.open_register_form').click(function(e) {
 				e.preventDefault();
 				$('#login_form').removeClass().addClass('animated fadeOutDown');
 				setTimeout(function() {
 					$('#login_form').removeClass().hide();
 					$('#register_form').show().addClass('animated fadeInUp');
 				}, 700);
 			});
 			$('.open_login_form').click(function(e) {
 				e.preventDefault();
 				$('#register_form').removeClass().addClass('animated fadeOutDown');
 				setTimeout(function() {
 					$('#register_form').removeClass().hide();
 					$('#login_form').show().addClass('animated fadeInUp');
 				}, 700);
 			})
 		})
 	</script>

 	<script type="text/javascript">
 		var _gaq = _gaq || [];
 		_gaq.push(['_setAccount', 'UA-49181536-1']);
 		_gaq.push(['_trackPageview']);

 		(function() {
 		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 		})();
 	</script>
 </body>
 </html>