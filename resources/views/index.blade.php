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
	<title>TT - @yield('pageTitle')</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-4.6.0/css/bootstrap.min.css')}}">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- toast CSS -->
	<link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	<!-- all other page specific style here -->
	@stack('styles')
</head>


<body>

	<div class="container-flude mt-5 bg-dark">
		<div class="card bg-light">
			<div class="row ">
				<div class="col-3 ">
					<button type="button" class="btn btn-outline-success btn-md ">Large button</button>
				</div>
				<div class="col-3 ">
					<h1 class="text-dark">Hello</h1>
				</div>
				<div class="col-3 ">
					<h1 class="text-dark">Hello</h1>
				</div>
				<div class="col-3 ">
					<h1 class="text-dark">Hello</h1>
				</div>	
			</div>
		</div>
	</div>

	<div class="container-flude m-t-40 bg-dark">
		<div class="card bg-light">
			<div class="row ">
				<div class="col-3 ">
					<button type="button" class="btn btn-outline-success btn-md ">Large button</button>
				</div>
				<div class="col-3 ">
					<h1 class="text-dark">Hello</h1>
				</div>
				<div class="col-3 ">
					<h1 class="text-dark">Hello</h1>
				</div>
				<div class="col-3 ">
					<input type="text" id="name" >
					<h1 id="submit" type="button" class="text-dark">Hello</h1>

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

			$('#submit').click(function(event) {
				var data = $('#name').val();
				alert("Input : "+data);
			});

		});
	</script>
</body>
</html>