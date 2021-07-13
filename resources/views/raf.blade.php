
<div id="main-wrapper">
	<header class="topbar">
		<nav class="navbar top-navbar navbar-expand-md" >
			<!-- ============================================================== -->
			<!-- Logo -->
			<!-- ============================================================== -->
			<div class="navbar-header bg-dark">
				<a class="navbar-brand " id="headIcon">
					<!-- Logo icon -->
					<b>
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<img src="{{asset('assets/images/favicon-2.png')}}" alt="homepage" class="dark-logo" style="width: 60px;height: 50px;" />
						<!-- Light Logo icon -->
						<!-- 	<img src="{{asset('assets/images/favicon-2.png')}}" alt="homepage" class="light-logo" style="width: 60px;height: 50px;"/> -->
					</b>
					<!--End Logo icon -->
					<!-- Logo text -->
					<span>
						<!-- dark Logo text -->
						<label class="text-light"> Travel Treak</label>
						<!-- <img src="{{asset('assets/images/favicon-1.png')}}" alt="homepage" class="dark-logo" style="width: 130px;height: 50px;"/> -->
						<!-- Light Logo text -->
						<!-- <img src="{{asset('assets/images/favicon-1.png')}}" class="light-logo" alt="homepage"style="width: 130px;height: 50px;" /> -->
					</span> 
				</a>
			</div>
			<!-- ============================================================== -->
			<!-- End Logo -->
			<!-- ============================================================== -->
			<div class="navbar-collapse bg-info">
				<!-- ============================================================== -->
				<!-- toggle and nav items -->
				<!-- ============================================================== -->
				<ul class="navbar-nav mr-auto">
					<!-- This is  -->
					<li class="nav-item"> 
						<a class="nav-link nav-toggler hidden-md-up "
						href="javascript:void(0)"><i class="ti-menu"></i></a> 
					</li>
					<li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down " href="javascript:void(0)"><i class="ti-menu"></i></a> 
					</li>
					<li class="nav-item hidden-sm-down">

					</li>
				</ul>
				<!-- ============================================================== -->
				<!-- User profile and search -->
				<!-- ============================================================== -->
				<ul class="navbar-nav my-lg-0">
					
					<!-- ============================================================== -->
					<!-- Profile -->
					<!-- ============================================================== -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-dark" href="javascript:;"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="" alt="user" class="profile-pic" /></a>
						<div class="dropdown-menu dropdown-menu-right animated flipInY">
							<ul class="dropdown-user">
								<li>
									<div class="dw-user-box">
										<div class="u-img"><img src="" class="profile-pic" alt="user"></div>
										<div class="u-text">
											<h4 id="name"></h4>
											<p class="text-muted" id="email"></p>
											<a href="{{ url('/myProfile') }}" class="btn  btn-success btn-sm">View Profile</a>
										</div>
									</div>
								</li>

								<li role="separator" class="divider"></li>
								<li>
									<a href="{{ url('/logout/') }}"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>


</div>
