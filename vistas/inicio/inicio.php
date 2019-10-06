<?php 
require_once "vistas/header.php";
?>
<body>
	<?php require_once "vistas/menu.php"; ?>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-lg-6">
					<div class="bd-example">
						<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							<div class="carousel-item active">
							<img src="img/fondo feo.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
							</div>
							<div class="carousel-item">
							<img src="img/fondo feo.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							</div>
							<div class="carousel-item">
							<img src="img/fondo feo.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<h5>Third slide label</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
							</div>
							</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
					<div class="checkbox mb-3">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					<p class="mt-5 mb-3 text-muted">©virtualhotel tecmm 2019-2020</p>
					</div>
			</div>
			
		</div>
	</div>
</body>
<?php 
require_once "vistas/footer.php";
 ?>