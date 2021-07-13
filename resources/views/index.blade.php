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

	<!-- line-awesome -->
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

	<!-- toast CSS -->
	<link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	<!-- custom -->
	<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
	
	<!-- all other page specific style here -->
	@stack('styles')
</head>


<body >
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="">Taravel Treak</span></h2>
		</div>
		<div class="sidebar-menu">
			<ul class="navbar-nav">
				<li >
					<a href=""class="active" ><span class="las la-igloo"></span> <span>Dashboard</span></a>
				</li>
				<li>
					<a href="" ><span class="las la-users"></span> <span>Users</span></a>
				</li>
				<li>
					<a href="" ><span class="las la-clipboard-list"></span> <span>Projects</span></a>
				</li>
				<li>
					<a href="" ><span class="las la-igloo"></span> <span>Accounts</span></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label >
					<span class="las la-bars">	</span>
				</label>
				Dashboard
			</h2>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here"/>
			</div>
			<div class="user-wrapper">
				<img src="assets/images/favicon-1.png" alt="" height="30px" width="30px">
				<div>
					<h4>Admin</h4>
					<small>super admin</small>
				</div>
			</div>

		</header>

		<main>
			<div class="cards">

				<h1>hello</h1>
				<h1>hello</h1>
				<h1>hello</h1>
				<h1>hello</h1>
				<h1>hello</h1>
				<h1>hello</h1>
			</div>
		</main>
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