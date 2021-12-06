<?php include_once('inc/header.php') ?>

<?php
	if(isset($_SESSION['id'])){

		header("location:index.php");	
		}

?>
	<!-- grids -->
	<div class="three-grids py-5" id="new">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title mb-lg-5 mb-4 pb-4 text-center font-weight-bold">Login</h3>
			<?php
			
				//database connect
				$conn = mysqli_connect('localhost','root','','ra_furniture');
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$email = $_POST["email"];
					$password = md5($_POST["password"]);

					if (empty($email) || empty($password)) {
						echo "<div class='alert alert-danger'><span>input is not be empty</span></div>";
					}else{
						$sql = "select * from users where fname = '$email'";
						$sql_run = mysqli_query($conn,$sql);
						$check = mysqli_fetch_assoc($sql_run);

							if ($check == null) {
								
								echo "<div class='alert alert-danger'><span>E-mail is not match our record </span></div>";
							}else{
								if ($check) {

									$_SESSION['id'] = $check['id'];
									$_SESSION['fname'] = $check['fname'];
									$_SESSION['lname'] = $check['lname'];
									$_SESSION['password'] = $check['password'];
									header("location:index.php");
								}
							}
					}

				}
				?>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<h2 class="text text-center text-primary mb-5">Login

								</h2>
								<span id="login_msg"></span>
								<form action="" method="post">
								<div class="form-group mt-2">
								<label for="first-name">E-mail</label>
								<input type="email" class="form-control" require name="email" id="email">
								</div>
								<div class="form-group mt-2">
								<label for="first-name">Enter Password</label>
								<input type="password" class="form-control" require name="password" id="password">
								</div>
								<div class="form-group mt-2">

								<button type="submit" class="btn btn-outline-primary" id="login" name="login">Login</button>
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