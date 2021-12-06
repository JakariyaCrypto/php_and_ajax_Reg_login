<?php include_once('inc/header.php') ?>

	<!-- grids -->
	<div class="three-grids py-5" id="new">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title mb-lg-5 mb-4 pb-4 text-center font-weight-bold">Sign Up</h3>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<h2 class="text text-center text-primary mt-2 mb-5">Join Us Now</h2>
								<span id="signin_msg"></span>

								<form action="" method="post" enctype="multipart/form-data">
									<div class="form-group mt-2">
										<label for="first-name">Enter First Name</label>
										<input type="text" class="form-control" require id="fname" name="fname">
									</div>
									<div class="form-group mt-2">
										<label for="first-name">Last Name</label>
										<input type="text" class="form-control" require id="lname" name="lname">
									</div>
									<div class="form-group mt-2">
										<label for="first-name">E-mail</label>
										<input type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group mt-2">
										<label for="first-name">Enter Password</label>
										<input type="password" class="form-control" require id="password" name="password">
									</div>
									<div class="form-group mt-2">
										
										<button type="submit" class="btn btn-outline-primary" id="signin" name="signin">singin</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div>
		</div>
	</div>
	<!-- //grids -->


	<!-- footer -->
	<footer class="bg-li py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row footer-grids">
				<div class="col-lg-4 footer-grid mt-lg-3">
					<h2>
						<a class="logo-2" href="index.html">RA Furniture</a>
					</h2>
				</div>
				<div class="col-lg-2 col-sm-6 footer-grid mt-lg-3 mt-4">
					<h3 class="mb-sm-4 mb-3 pb-3">Home</h3>
					<ul class="list-unstyled">
						<li>
							<a href="index.html">Index</a>
						</li>
						<li>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<a href="#gallery">Gallery</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-2 col-sm-6 footer-grid mt-lg-3 mt-4">
					<h3 class="mb-sm-4 mb-3 pb-3"> Company</h3>
					<ul class="list-unstyled">
						<li>
							<a href="blog.html">Blog</a>
						</li>
						<li>
							<a href="single.html">Single Page</a>
						</li>
						<li>
							<a href="#newsletter">Newsletter</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-2 col-sm-6 footer-grid footer-contact mt-lg-3 mt-4">
					<h3 class="mb-sm-4 mb-3 pb-3"> Contact Us</h3>
					<ul class="list-unstyled">
						<li>
							+880 177 682 8634
							+880 172 814 0505
						</li>
						<li class="mt-2">
							<a href="mailto:md.r.m.rana28@gmail.com">md.r.m.rana28@gmail.com</a>
							<a href="mailto:asifmiah80@gmail.com">asifmiah80@gmail.com</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-2 col-sm-6 footer-grid-social mt-lg-3 mt-4">
					<h3 class="mb-sm-4 mb-3 pb-3">Catch on Social</h3>
					<ul class="list-unstyled">
						<li class="d-inline">
							<a href="#"><span class="fa fa-facebook"></span></a>
						</li>
						<li class="d-inline">
							<a href="#"><span class="fa fa-twitter"></span></a>
						</li>
						<li class="d-inline">
							<a href="#"><span class="fa fa-google-plus"></span></a>
						</li>
						<li class="d-inline">
							<a href="#"><span class="fa fa-instagram"></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy_right text-center py-3 position-relative">
		<p>© 2021 RA Furniture. All rights reserved | Design by
			<a href="#">Rasel & Asif</a>
		</p>
		<!-- move top icon -->
		<a href="#home" class="move-top text-center">
			<span class="fa fa-level-up" aria-hidden="true"></span>
		</a>
		<!-- //move top icon -->
	</div>
	<!-- //copyright -->

</body>

</html>