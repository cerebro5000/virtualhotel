<div class="container mt-3">
	<div class="input-group mb-3">
		<div class="input-group-prepend" id="button-addon3">
			<a id="inicio" href="?controller=inicio&action=inicio" class="btn btn-outline-secondary">Inicio</a>
			<a id="contactenos" href="?controller=inicio&action=contacto" class="btn btn-outline-secondary">Contactenos</a>
		</div>
		
		<div class="input-group-prepend" id="button-addon3">
			<label class="input-group-text">usuario</label>
		</div>
		<input id="usuario" type="text" class="form-control" placeholder="">
		<div class="input-group-prepend" id="button-addon3">
			<label class="input-group-text">contraseña</label>
		</div>
		<input id="contrasena" type="password" class="form-control" placeholder="">
		<div class="input-group-append" id="button-addon3">
			<button id="login" name="login"  class="btn btn-outline-primary">Ingresar</button>
			<a id="registro" href="?controller=inicio&action=registro" class="btn btn-outline-primary" >registro</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#login').click(function(event){
			if ($('#usuario').val() == "" && $('#contrasena').val() == "") {
				alert('campos vacios');
			}
			else{
				event.preventDefault();
				$.post('index.php?controller=usuario&action=login',
				{
					usuario : $('#usuario').val(),
					contrasena : $('#contrasena').val()
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
