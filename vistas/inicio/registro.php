<body>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-xl-6">
			<form action="#" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Usuario</label>
					<input type="email" class="form-control" id="usuarioR">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Contraseña</label>
					<input type="email" class="form-control" id="passR">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Repetir contraseña</label>
					<input type="email" class="form-control" id="repass">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="email" class="form-control" id="nombre">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Apellidos</label>
					<input type="email" class="form-control" id="apellido">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Telefono</label>
					<input type="email" class="form-control" id="tel">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Correo electronico</label>
					<input type="email" class="form-control" id="email">
				</div>
			
				<a href="javascript:goRegistro()" class="btn btn-primary">Registrar</a>
				</form>
			</div>
			
			<div class="col-xl-6">
				<img src="img/fondo feo.jpg" width="100%">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function goRegistro() {
		var connect, form, response, result, user, pass, sesion;
		user = $('#usuarioR').val();
		pass = $('#passR').val();
		nombre = $('#nombre').val();
		apellido = $('#apellido').val();
		alert(user +" "+ pass);
		if($('#passR').val() == $('#passR').val()){
			form = 'user=' + user + '&pass=' + pass;
			
			connect = new XMLHttpRequest();
			connect.open('POST','/index.php?controller=usuario&action=inicio',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			location.replace('index.php?controller=usuario&action=login');
			connect.send(form);
		}	
	}
</script>