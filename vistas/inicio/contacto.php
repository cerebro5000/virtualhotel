<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-lg-6">
				<form action="#" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nombre Completo</label>
						<input type="email" class="form-control" id="nombre" name="nombre">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Telefono</label>
						<input type="email" class="form-control" id="tel" name="tel">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Correo electronico</label>
						<input type="email" class="form-control" id="email" name="mail">
					</div>
					<div class="form-group">
						<label for="comentario">Comentario</label>
						<textarea id="comentario" class="form-control" name="comentario"></textarea>
					</div>
					
					<?php if(!empty($errores)):?>
						<div class="alert error">
							<?php echo $errores; ?>
						</div>
					<?php elseif(($enviar)):?>
						<div class="alert success">
							<p>Enviado correctamente</p>
						</div>
					<?php endif ?>
					
					<input type="submit" class="btn btn-primary" value="Enviar" name="submit">
				</form>				
			</div>
			<div class="col-lg-6"><img src="img/fondo feo.jpg" width="100%"></div>
		</div>
	</div>	
</div>
