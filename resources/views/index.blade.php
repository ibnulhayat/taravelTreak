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
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/graduation-cap.png')}}">
	<title>TT - @yield('pageTitle')</title>

	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-4.6.0/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
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

	<script src="{{asset('assets/plugins/bootstrap-4.6.0/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>

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