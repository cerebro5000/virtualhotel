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
						<h5>Primer pestaña</h5>
						<p>imagen agregada para para la primera</p>
						</div>
						</div>
						<div class="carousel-item">
						<img src="img/fondo feo.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						<h5>Segunda pestaña</h5>
						<p>texto para la segunda pestaña</p>
						</div>
						</div>
						<div class="carousel-item">
						<img src="img/fondo feo.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						<h5>Tercera pestaña</h5>
						<p>texto para otra pestaña mas</p>
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
				<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
				<label for="usuario2" class="sr-only">Usuario</label>
				<input type="text" id="usuario2" class="form-control" placeholder="Usuario" required="" autofocus="">
				<label for="contrasena2" class="sr-only">Contraseña</label>
				<input type="Password" id="contrasena2" class="form-control" placeholder="Contraseña" required="">
				<button id="ingreso2" class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
				</div>
		</div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#ingreso2').click(function(event){
			if ($('#usuario2').val() == "" && $('#contrasena2').val() == "") {
				alert('campos vacios');
			}
			else{
				event.preventDefault();
				$.post('index.php?controller=usuario&action=login',
				{
					usuario : $('#usuario2').val(),
					contrasena : $('#contrasena2').val()
				},function(dato){
					switch(dato){
						case 'true':
							window.location.href = 'index.php?controller=usuario&action=inicio';
						break;
						case 'usuario incorrecto':
							alert('usuario o contraseña erronea verifique su informacion');
						break;
						case 'false':
							alert('usuario o contraseña erronea verifique su informacion');
						break;
					}
				});
			}
		});
	});
</script>
