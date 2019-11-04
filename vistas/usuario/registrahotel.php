<ul class="stepper horizontal" id="horizontal-stepper">
  <li class="step active">
    <div class="step-title waves-effect waves-dark">Paso 1</div>
		<div class="step-new-content">
			
			<div class="container">
				<div><h2 class="sc-ui-card-header-title__title">Informacion hotel</h2>
					<div class="jumbotron">
						<h6><h6>
						<div class="row">
							<div class="col-xl-12">
								<div class="form-group">
									<label for="email-horizontal">Nombre</label>
									<input type="email" class="validate form-control" id="email-horizontal" required>
								</div>
							</div>
						</div>
						
						<h6>Direcccion<h6>						
						<div class="row">
							<div class="col-xl-5">
								<div class="form-group">
									<label for="email-horizontal">Calle con numero</label>
									<input type="email" class="validate form-control" id="email-horizontal" required>
								</div>
							</div>
									
							<div class="col-xl-5">
								<div class="form-group">
									<label for="email-horizontal">Colonia</label>
									<input type="email" class="validate form-control" id="email-horizontal" required>
								</div>
							</div>
								
							<div class="col-xl-2">
								<div class="form-group">
									<label for="email-horizontal">C. P.</label>
									<input type="email" class="validate form-control" id="email-horizontal" required>
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-xl-6">
								<div class="form-group">
									<label for="email-horizontal">Correo electronico</label>
									<select class="form-control" required>
									</select>
								</div>
							</div>
								
							<div class="col-xl-6">
								<div class="form-group">
									<label for="email-horizontal">Estado</label>
									<select class="form-control" required>
									</select>
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-xl-6">
								<div class="form-group">
									<label for="email-horizontal">Telefono</label>
									<input type="email" class="validate form-control" id="email-horizontal" required>
								</div>
							</div>
								
							<div class="col-xl-6">
								<div class="form-group">
									<label for="email-horizontal">Correo electronico</label>
									<input type="email" class="validate form-control" id="email-horizontal" required>
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-xl-6">
							<p>
							Servicios:<br>
								<input type="checkbox" id="checkboxEnLinea1" value="opcion_1">Alberca<br>
							</div>
						</div>
						
						<div class="contenedor">
							<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
								<label for="foto">Imagenes</label>
								<input type="file" id="foto" name="foto">
								
								<label for="texto">Descripcion:</label>
								<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
								
								<input type="submit" class="submit" value="Subir foto">
							</form>
						
						</div>
						
						<div class="step-actions">
							<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">
							Continuar</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</li>
	
  <li class="step">
	<div class="step-title waves-effect waves-dark">Paso 2</div>
		<div class="step-new-content">
	
			<div class="container">
				<div><h2 class="sc-ui-card-header-title__title">Agregar habitaciones</h2>
					<div class="jumbotron">
						<h6><h6>
	
						<div class="row">
							<div class="col-xl-6">
								<div class="form-group">
									<label for="password-horizontal">Tipo de habitacion</label>
									<input type="password" class="validate form-control" id="password-horizontal" required>
								</div>
							</div>
						</div>
		
						<div class="row">
							<div class="col-xl-8">
								<div class="form-group">
									<label for="password-horizontal">Tipo de camas</label>
									<input type="password" class="validate form-control" id="password-horizontal" required>
								</div>
							</div>
							
							<div class="col-xl-2">
								<div class="form-group">
									<label for="password-horizontal">Numero de camas</label>
									<input type="password" class="validate form-control" id="password-horizontal" required>
								</div>
							</div>
				
							<div class="col-xl-2">
								<div class="form-group">
									<label for="password-horizontal">Precio</label>
									<input type="password" class="validate form-control" id="password-horizontal" required>
								</div>
							</div>
						</div>
		
						<div class="contenedor">
							<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
								<label for="foto">Imagenes</label>
								<input type="file" id="foto" name="foto">
								
								<label for="texto">Descripcion:</label>
								<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
								
								<input type="submit" class="submit" value="Subir foto">
							</form>
						
						</div>		

					    <div class="step-actions">
							<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
						</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
  </li>	
  
  <li class="step">
	<div class="step-title waves-effect waves-dark">Paso 3</div>
		<div class="step-new-content">
	
			<div class="container">
				<div><h2 class="sc-ui-card-header-title__title">Publicar</h2>
					<div class="jumbotron">
						<h6><h6>
						<div class="step-actions">
							<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>		
</ul>
