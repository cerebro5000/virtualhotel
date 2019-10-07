<div class="container mt-3">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">menu</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="?controller=usuario&action=preferencias">Mi Cuenta</a>
				<a class="dropdown-item" href="#">Mis Hoteles</a>
				<a class="dropdown-item" href="#">Reservaciones</a>
				<div role="separator" class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Registra un Hotel</a>
			</div>
			<a href="?controller=usuario&action=index" class="btn btn-outline-secondary">Inicio</a>
		</div>
		<input type="text" class="form-control" aria-label="Text input with dropdown button" disabled="true">
		<div class="input-group-append">
			<img src="img/fondo feo.jpg" style="width: 4em;">
			<label class="input-group-text"><?php echo $user->nombre; ?></label>
			<a href="?" class="btn btn-outline-secondary">Cerrar Sesion</a>
		</div>
	</div>
</div>