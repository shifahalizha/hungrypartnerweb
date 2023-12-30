<nav id="sidebar">
	<div class="custom-menu">
		<button type="button" id="sidebarCollapse" class="btn btn-primary">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle Menu</span>
		</button>
	</div>
	<div class="p-4">
		<div class="text-center p-t-136">
			<a class="txt2" href="login/login.php" style="color:white">
				have an account?
				<i class="m-l-5" aria-hidden="true"></i>
			</a>
		</div>
		<div class="img bg-wrap text-center py-4 pt-2" style="background-image: url(images/bg_foto2.webp);">
			<div class="user-logo">
				<div class="img" style="background-image: url(images/profilkosong.jpg);"></div>
				<h3>username</h3>
			</div>
		</div>
		<h1><a class="pt-2 text-center py-4 mb-5 hungry" style="color :white">hungry partner</a></h1>
		<ul class="list-unstyled components mb-5">
			<li>
				<a href="home.php">home</a>
			</li>
			<li>
				<a href="trending.php">trending food</a>
			</li>
			<li class="active">
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Resep</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li>
						<a href="makanan.php">makanan</a>
					</li>
					<li>
						<a href="dessert.php">dessert</a>
					</li>
					<li>
						<a href="minuman.php">minuman</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="contact.php">Contact</a>
			</li>
			<li>
				<a href="login/login.php">logout</a>
			</li>
		</ul>

		<div class="footer">
			<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;
				<script>document.write(new Date().getFullYear());</script> All rights reserved | This template
				is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
					target="_blank">Colorlib.com</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>

	</div>
</nav>