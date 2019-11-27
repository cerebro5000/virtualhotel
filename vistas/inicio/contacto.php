<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-lg-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Nombre Completo</label>
						<input type="text" class="form-control" id="nombre" name="nombre">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Telefono</label>
						<input type="text" class="form-control" id="tel" name="tel">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Correo electronico</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="comentario">Comentario</label>
						<textarea id="comentario" class="form-control" name="comentario"></textarea>
					</div>
					
					<button id="enviar" type="submit" class="btn btn-primary">Enviar</button>				
			</div>
			<div class="col-lg-6"><img src="img/fondo feo.jpg" width="100%"></div>
		</div>
	</div>	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#enviar').click(function(event){
			if ($('#nombre').val() == "" ) {
				alert('Nombre vacio');
			}
			else if($('#tel').val() == ""){
				alert('Telefono vacio escriba uno');
			}
			else if($('#email').val() == ""){
				alert('correo electronico vacio escriba uno');
			}
			else if($('#comentario').val() == ""){
				alert('comentario vacio escriba uno');
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