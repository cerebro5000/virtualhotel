<div class="container">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <label class="nav-link active" id="home-tab" role="tab" aria-controls="home" aria-selected="true">Informacion</label>
  </li>
  <li class="nav-item">
    <label class="nav-link" id="profile-tab" role="tab" aria-controls="profile" aria-selected="false">Agregar habitacion</label>
  </li>
  <li class="nav-item">
    <label class="nav-link" id="contact-tab" role="tab" aria-controls="contact" aria-selected="false">Publicar</label>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
				</form>
			</div>
			
				<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">
				Continuar</button>
		</div>
		
	</div>
  
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	<div class="jumbotron">
		<h6><h6>
		<div class="step-actions">
			<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
		</div>
	</div>

</div>
