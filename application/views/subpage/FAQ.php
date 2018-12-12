<?php $this->load->view('layout/header'); ?>

<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<a href="<?= site_url('#') ?>"  class="logo">
					<div class="img-wrap">
						<img src="<?= site_url('img/데리다57_흰.png') ?>"  alt="Olympus">
						<img src="<?= site_url('img/데리다57_주.png') ?>"  alt="Olympus" class="logo-colored">
					</div>
					<div class="title-block">
						<h6 class="logo-title">DAERIDA</h6>
						<div class="sub-title">SOCIAL NETWORK</div>
					</div>
				</a>
	
				<a href="<?= site_url('#') ?>"  class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>" ></use></svg>
				</a>
	
				<div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>"  class="nav-link">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="<?= site_url('#') ?>"  role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
									<a class="dropdown-item" href="<?= site_url('#') ?>" >Newsfeed</a>
									<a class="dropdown-item" href="<?= site_url('#') ?>" >Post Versions</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-has-megamenu">
								<a href="<?= site_url('#') ?>"  class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
								<div class="dropdown-menu megamenu">
									<div class="row">
										<div class="col col-sm-3">
											<h6 class="column-tittle">Main Links</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page<span class="tag-label bg-blue-light">new</span></a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">BuddyPress</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page<span class="tag-label bg-primary">HOT!</span></a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Corporate</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Forums</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>" >Profile Page</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>"  class="nav-link">Terms & Conditions</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>"  class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>"  class="nav-link">Privacy Policy</a>
							</li>
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
							</li>
							<li class="nav-item js-expanded-menu">
								<a href="<?= site_url('#') ?>"  class="nav-link">
									<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>" ></use></svg>
									<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
								</a>
							</li>
							<li class="shoping-cart more">
								<a href="<?= site_url('#') ?>"  class="nav-link">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-shopping-bag-icon') ?>" ></use></svg>
									<span class="count-product">2</span>
								</a>
								<div class="more-dropdown shop-popup-cart">
									<ul>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img src="<?= site_url('img/product1.png') ?>"  alt="product">
											</div>
											<div class="product-content">
												<h6 class="title">White Enamel Mug</h6>
												<ul class="rait-stars">
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
	
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="far fa-star star-icon" aria-hidden="true"></i>
													</li>
												</ul>
												<div class="counter">x2</div>
											</div>
											<div class="product-price">$20</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
											</div>
										</li>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img src="<?= site_url('img/product2.png') ?>"  alt="product">
											</div>
											<div class="product-content">
												<h6 class="title">Olympus Orange Shirt</h6>
												<ul class="rait-stars">
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
	
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="far fa-star star-icon" aria-hidden="true"></i>
													</li>
												</ul>
												<div class="counter">x1</div>
											</div>
											<div class="product-price">$40</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
											</div>
										</li>
									</ul>
	
									<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>
	
									<div class="cart-btn-wrap">
										<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-sm">Go to Your Cart</a>
										<a href="<?= site_url('#') ?>"  class="btn btn-purple btn-sm">Go to Checkout</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Frequently Asked Questions</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="<?= site_url('#') ?>" >Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>FAQs</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="mb60">
	<div class="container">
		<div class="row">
			<div class="col col-xl-8 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				
				
				<div id="accordion" role="tablist" aria-multiselectable="true" class="accordion-faqs">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne') ?>"  aria-expanded="true" aria-controls="collapseOne">
									왜 데리다 입니까?
									<span class="icons-wrap">
										<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
										<svg class="olymp-accordion-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-accordion-close-icon') ?>" ></use></svg>
									</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<p>
								데리다는 함께 일하는 '사람'에 초점을 맞춘 스타트업 맞춤형 서비스입니다. 
								언제나 활성화 되어있는 데리다를 이용해 실시간으로 인재와의 만남을 가지세요!
								데리다에서 마음이 맞는 사람들과 팀을 만들어 보세요! 그리고 프로젝트를 진행하여 완성하세요!
							</p>
						</div>
				
						<div class="card-header" role="tab" id="headingOne-1">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne-1') ?>"  aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									팀이름이 왜 안밖마님입니까?
									<span class="icons-wrap">
														<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-accordion-close-icon') ?>" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-1" class="collapse" role="tabpanel" aria-labelledby="headingOne-1">
							<p>
								소프트웨어와 하드웨어, 안과 밖을 어우르는 인간들에게 서비스를 제공하겠다는 의미.
							</p>
				
							<!-- <p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architecto beatae vitae dicta sunt explicabo.
							</p> -->
						</div>
				
						<div class="card-header" role="tab" id="headingOne-2">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne-2') ?>"  aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									SNS로그인은 어떻게 하나요?
									<span class="icons-wrap">
														<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-accordion-close-icon') ?>" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-2" class="collapse" role="tabpanel" aria-labelledby="headingOne-2">
							<p>
								카카오, 네이버, 구글과 연동하여 로그인을 하실 수 있습니다.
							</p>
						</div>
				
						<div class="card-header" role="tab" id="headingOne-3">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne-3') ?>"  aria-expanded="true" aria-controls="collapseOne-3" class="collapsed">
									이 사이트를 이용하려면 돈이 드나요?
									<span class="icons-wrap">
														<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-accordion-close-icon') ?>" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-3" class="collapse" role="tabpanel" aria-labelledby="headingOne">
							<p>
								모든 서비스를 무료로 이용하실 수 있습니다.
							</p>
						</div>
				
						<!-- <div class="card-header" role="tab" id="headingOne-4">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne-4') ?>"  aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									Is there a referral system?
									<span class="icons-wrap">
														<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-accordion-close-icon') ?>" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-4" class="collapse" role="tabpanel" aria-labelledby="headingOne">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
								ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
								in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
				
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architecto beatae vitae dicta sunt explicabo.
							</p>
						</div> -->
				
						<!-- <div class="card-header" role="tab" id="headingOne-5">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne-5') ?>"  aria-expanded="true" aria-controls="collapseOne-5" class="collapsed">
									How can I close my Olympus account?
									<span class="icons-wrap">
														<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-accordion-close-icon') ?>" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-5" class="collapse" role="tabpanel" aria-labelledby="headingOne-5">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
								ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
								in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
				
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architecto beatae vitae dicta sunt explicabo.
							</p>
						</div> -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>



<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">소중한 사람들을 데리다!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="<?= site_url('img/guy.png') ?>" >
	<img class="second-img" alt="rocket" src="<?= site_url('img/rocket1.png') ?>" >
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('#home1') ?>"  role="tab">
								<svg class="olymp-login-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-login-icon') ?>" ></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('#profile1') ?>"  role="tab">
								<svg class="olymp-register-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-register-icon') ?>" ></use>
								</svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home1" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Register to Olympus</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Your Birthday</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>" ></use></svg>
										</span>
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Your Gender</label>
											<select class="selectpicker form-control">
												<option value="MA">Male</option>
												<option value="FE">Female</option>
											</select>
										</div>

										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													I accept the <a href="<?= site_url('#') ?>" >Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="<?= site_url('#') ?>"  class="btn btn-purple btn-lg full-width">Complete Registration!</a>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="profile1" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Login to your Account</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="remember">

											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													Remember Me
												</label>
											</div>
											<a href="<?= site_url('#') ?>"  class="forgot">Forgot my Password</a>
										</div>

										<a href="<?= site_url('#') ?>"  class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="<?= site_url('#') ?>"  class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

										<a href="<?= site_url('#') ?>"  class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


										<p>Don’t you have an account?
											<a href="<?= site_url('#') ?>" >Register Now!</a> it’s really simple and you can start enjoing all the benefits!
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
	<div class="container">
		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-6 col-6">

				
				<!-- Widget About -->
				
				<div class="widget w-about">
				
					<a href="<?= site_url('02-ProfilePage.html') ?>"  class="logo">
						<div class="img-wrap">
							<img src="<?= site_url('img/데리다57_주.png') ?>"  alt="Olympus">
						</div>
						<div class="title-block">
							<h6 class="logo-title">DAERIDA</h6>
							<div class="sub-title">SOCIAL NETWORK</div>
						</div>
					</a>
					<p>데리다에서 마음이 맞는 사람들과 팀을 만들어 보세요! 그리고 프로젝트를 진행하여 완성하세요!</p>
					<ul class="socials">
						<li>
							<a href="<?= site_url('#') ?>" >
								<i class="fab fa-facebook-square" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<i class="fab fa-youtube" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<i class="fab fa-google-plus-g" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<i class="fab fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget About -->

			</div>

			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<!-- Widget List -->
				
				<div class="widget w-list">
					<h6 class="title">Main Links</h6>
					<ul>
						<li>
							<a href="<?= site_url('#') ?>" >Landing</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Home</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >About</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Events</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget List -->

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Your Profile</h6>
					<ul>
						<li>
							<a href="<?= site_url('#') ?>" >Main Page</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >About</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Friends</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Photos</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Features</h6>
					<ul>
						<li>
							<a href="<?= site_url('#') ?>" >Newsfeed</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Post Versions</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Messages</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Friend Groups</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Olympus</h6>
					<ul>
						<li>
							<a href="<?= site_url('#') ?>" >Privacy</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Terms & Conditions</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Forums</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >Statistics</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="<?= site_url('index.html') ?>" >Olympus Buddypress + WP</a> All Rights Reserved 2017
					</span>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Footer Full Width -->



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/author-page.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="<?= site_url('#') ?>"  class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') ?>" ></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat1.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat2.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat3.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat4.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat5.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat6.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat7.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat8.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat9.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat10.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat11.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat12.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat13.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat14.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat15.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat16.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat17.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat18.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat19.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat20.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat21.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat22.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat23.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat24.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat25.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat26.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('img/icon-chat27.png') ?>"  alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="<?= site_url('#') ?>" >
	<img src="<?= site_url('svg-icons/back-to-top.svg') ?>"  alt="arrow" class="back-icon">
</a>
<?php $this->load->view('layout/footer'); ?>
