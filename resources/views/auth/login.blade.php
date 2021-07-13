<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon-2.png')}}">
	<title>Login Page</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-4.6.0/css/bootstrap.min.css')}}">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- toast CSS -->
	<link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<style>

.bg-img{
	background-image: url('assets/images/background/1.jpg');
}

.login-box{
	background-color: rgb(0,0,0,0.8);
}
.form-input{
	width: 100%;
	height: 40px;
	padding-left: 45px;
	border: 0; 
	border-radius: 4px;
}
.icon{
	position: absolute;
	padding-top: 10px;
	height: 40px;
	color: #000;
}
</style>
<body>
	<div class="login-register bg-img">

		<div class="login-box card col-xl-4 col-lg-4 col-md-6 col-sm-8 col-11" >
			<div class="card-body ">
				<form  id="login_form">
					@csrf
					<h3 class="box-title p-t-5 m-b-20 text-white font-weight-bold text-center">Login</h3>

					<div class="form-group p-t-20 ">
						<span class="fas fa-user input-group-text icon"></span>
						<input id="userName" type="text" class="form-control form-input" name="userName" placeholder="Username" 
						value="{{ old('userName') }}" required autofocus>

					</div>

					<div class="form-group ">
						<span class="fas fa-lock input-group-text icon"></span>
						<input id="password" type="password" class="form-input" name="password" placeholder="Password" required>

					</div>

					<div style="display: none;" class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input class="text-white" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
									Remember me
								</label>
							</div>
						</div>
					</div>

					<div class="form-group text-center">
						<button class="btn btn-outline-light btn-md font-weight-bold" type="submit">Log In</button>
					</div>
					<div class="text-center">
						<h5 id="forget_password" style="cursor: pointer;" class="text-white">
						Forgot password?</h5> 
					</div>

				</form>
			</div>
		</div>

	</div>


	<!-- jQuery  -->
	<script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
	<!-- Bootstrap JavaScript -->
	<script src="{{asset('assets/plugins/bootstrap-4.6.0/js/bootstrap.min.js')}}"></script>
	<!-- toastr -->
	<script src="{{asset('assets/js/toastr.js')}}"></script>
	<!-- Popup message jquery -->
	<script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
	<script src="{{asset('assets/plugins/keyboardshortcut.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function() {

		});
	</script>
</body>
</html>