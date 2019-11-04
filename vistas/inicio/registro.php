<body>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-xl-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Usuario</label>
					<input type="text" class="form-control" id="usuarioR">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Contraseña</label>
					<input type="password" class="form-control" id="passR">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Repetir contraseña</label>
					<input type="password" class="form-control" id="repass">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" id="nombre">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Apellidos</label>
					<input type="text" class="form-control" id="apellido">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Telefono</label>
					<input type="text" class="form-control" id="tel">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Correo electronico</label>
					<input type="email" class="form-control" id="email">
				</div>
			
				<button id="registroform" name="registro" class="btn btn-primary">Registrar</button>
			</div>
			
			<div class="col-xl-6">
				<img src="img/fondo feo.jpg" width="100%">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#registroform').click(function(event){
			if ($('#usuarioR').val() == "" ) {
				alert('usuario vacio');
			}
			else if($('#passR').val() == "" && $('#repass').val() == ""){
				alert('contraseña vacia escriba una');
			}
			else if($('#nombre').val() == ""){
				alert('nombre vacio escriba uno');
			}
			else if($('#apellido').val() == ""){
				alert('apellidos vacio escriba uno');
			}
			else if($('#tel').val() == ""){
				alert('Telefono vacio escriba uno');
			}
			else if($('#email').val() == ""){
				alert('correo electronico vacio escriba uno');
			}
			else{
				event.preventDefault();
				$.post('index.php?controller=usuario&action=validar',
				{
					usuario : $('#usuarioR').val(),
					contrasena : $('#passR').val(),
					recontrasena : $('#repass').val(),
					nombre : $('#nombre').val(),
					apellido : $('#apellido').val(),
					telefono : $('#tel').val(),
					email : $('#email').val()

				},function(dato){
					alert(dato);
				});
			}
		});
	});
</script>