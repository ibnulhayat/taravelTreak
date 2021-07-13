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
	<title>Registration Page</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-4.6.0/css/bootstrap.min.css')}}">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- toast CSS -->
	<link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>


<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Register Form</div>

					<div class="card-body">
						<form >
							@csrf

							<div class="form-group row">
								<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

								<div class="col-md-6">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										Register
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JavaScript -->
	<script src="{{asset('assets/plugins/bootstrap-4.6.0/js/bootstrap.min.js')}}"></script>
	<!-- jQuery  -->
	<script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
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