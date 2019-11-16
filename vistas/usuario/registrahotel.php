<div class="container">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<div class="col-xl-4">
			<li class="nav-item">			
				<label class="nav-link <?php echo $paso1; ?>" id="info-tab" role="tab" aria-controls="info" aria-selected="true">Informacion</label>
			</li>
		</div>
		<div class="col-xl-4">
			<li class="nav-item">
				<label class="nav-link <?php echo $paso2; ?>" id="profile-tab" role="tab" aria-controls="profile" aria-selected="false">Agregar habitacion</label>
			</li>
		</div>
		<div class="col-xl-4">
			<li class="nav-item">
				<label class="nav-link <?php echo $paso3; ?>" id="contact-tab" role="tab" aria-controls="contact" aria-selected="false">Publicar</label>
			</li>
		</div>
	</ul>
	<div class="tab-content">
		<?php if ($paso1 == 'active'): ?>
			<div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
		<?php else: ?>
			<div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
		<?php endif ?>
				<div class="jumbotron">
					<hr>
					<h6>Informacion General</h6>
					<hr>
					<div class="row">
						<div class="col-xl-12">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre">
							</div>
						</div>
					</div>
					<hr>
					<h6>Direcccion</h6>
					<hr>
					<div class="row">
						<div class="col-xl-5">
							<div class="form-group">
								<label for="direccion">Calle con numero</label>
								<input type="text" class="form-control" id="direccion">
							</div>
						</div>

						<div class="col-xl-5">
							<div class="form-group">
								<label for="colonia">Colonia</label>
								<input type="text" class="form-control" id="colonia">
							</div>
						</div>

						<div class="col-xl-2">
							<div class="form-group">
								<label for="cp">C. P.</label>
								<input type="text" class="form-control" id="cp">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-6">
							<div class="form-group">
								<label for="estado">Estado</label>
								<select class="form-control" id="estado">
									<option value="">seleccione un estado</option>
								<?php foreach ($estado as $key => $value): ?>
									<option value="<?php echo $value['id'] ?>"> <?php echo $value['nombre'] ?></option>
								<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-6">
							<div class="form-group">
								<label for="telefono">Telefono</label>
								<input type="text" class="form-control" id="telefono">
							</div>
						</div>

						<div class="col-xl-6">
							<div class="form-group">
								<label for="email">Correo electronico</label>
								<input type="text" class="form-control" id="email">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12">
							<hr>
							<h6>Servicios:</h6>
							<hr>
						</div>
						<div class="col-xl-12">
							<?php foreach ($variable as $key => $value): ?>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" name="servicios" value="<?php echo $value['id_servicios']; ?>">
								<label class="form-check-label"><?php echo $value['nombre']; ?></label>
							</div>	
							<?php endforeach ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<label>Imagenes del hotel</label>   <a href="#" onclick="addField()">Añadir Archivo</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6">
							<div id="fileshotel"></div>
						</div>
					</div>
					
					<button class="btn btn-primary next-step" id="continuestep1">Continuar</button>
				</div>
			</div>
		<?php if ($paso2 == 'active'): ?>
			<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<?php else: ?>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<?php endif ?>
				<div class="jumbotron">
					<h6>Informacion habitacion</h6>
					<div class="row">
						<div class="col-xl-6">
							<div class="form-group">
								<select class="form-control" id="tipo">
									<option value="">Tipo de habitacion</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8">
							<div class="form-group">
								<label for="password-horizontal">Tipo de camas</label>
								<input type="tipo" class="form-control" id="cama">
							</div>
						</div>

						<div class="col-xl-2">
							<div class="form-group">
								<label for="password-horizontal">Precio</label>
								<input type="precio" class="form-control" id="precio">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<label>Imagenes del hotel</label>   <a href="#" onclick="addFieldH()">Añadir Archivo</a>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xl-6">
							<div id="fileshabitacion"></div>
						</div>
					</div>
					
					<label for="foto">Imagenes</label>
					<input type="file" id="foto" name="foto">

					<label for="texto">Descripcion:</label>
					<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

					<input type="submit" class="submit" value="Subir foto">
					<div class="step-actions">
						<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
					</div>

				</div>
			</div>
		<?php if ($paso3 == 'active'): ?>
			<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<?php else: ?>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<?php endif ?>
				<div class="jumbotron">
					<h6></h6>
					<div class="step-actions">
						<button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#continuestep1').click(function(event){
			if ($('#nombre').val() == "" && $('#direccion').val() == "" && $('#colonia').val() == "" && $('#cp').val() == "" && $('#telefono').val() == "") {
				alert('campos vacios');
			}
			else if($('input[name="servicios"]:checked').length == 0){
				alert('falta escoger servicios');
			}
			else{
				event.preventDefault();
				var datos = [];
				$('input[name="servicios"]:checked').each(function(){
					datos.push(($(this).attr("value")));
				});

				var fileshotel = [];
				var elementos = document.getElementsByName('fotoshotel');

				for(var i = 0 ; i < elementos.length ; i++)
					fileshotel.push(elementos[i].files[0]);

				var datosform = new FormData();
				
				datosform.append("nombre", $('#nombre').val() );
				datosform.append("direccion", $('#direccion').val() );
				datosform.append("colonia", $('#colonia').val() );
				datosform.append("cp", $('#cp').val() );
				datosform.append("telefono", $('#telefono').val() );
				datosform.append("email", $('#email').val() );
				fileshotel.forEach(function(image, i) {
					datosform.append('image_' + i, image);
				});
				datosform.append("servicios", datos );

				$.ajax({
					url: 'index.php?controller=hotel&action=inicio',
					data: datosform,
					contentType: false,
					cache: false,
					processData:false,
					type: 'POST',
					success: function(dato){
						switch(dato){
							case 'true':
								window.location.href = 'index?controller=usuario&action=registrahotel';
							break;
							default:
								alert(dato);
							break;
						}
					}
				});
			}
		});
	});
</script>
<script type="text/javascript">
var numero = 0;

// Funciones comunes
c = function (tag) { // Crea un elemento
   return document.createElement(tag);
}
d = function (id) { // Retorna un elemento en base al id
   return document.getElementById(id);
}
e = function (evt) { // Retorna el evento
   return (!evt) ? event : evt;
}
f = function (evt) { // Retorna el objeto que genera el evento
   return evt.srcElement ?  evt.srcElement : evt.target;
}

h = function(element,tag,value){ //hace uso del atributo nuevo
   element.setAttribute(tag, value);
}

addField = function () {
	container = d('fileshotel');
	span = c('SPAN');
	span.className = 'file';
	span.id = 'file' + (++numero);

	div = c('div');
	div.classList = 'input-group mb-3';

	div2 = c('div');
	div2.classList = 'custom-file';

	div3 = c('div');
	div3.classList = 'input-group-append';



	field = c('INPUT');   
	field.name = 'fotoshotel';
	field.type = 'file';
	field.classList = 'custom-file-input';
	field.onchange = function(){
		label.innerHTML = field.files[0].name;
	}

	label = c('label');
	label.innerHTML = '';
	label.classList = 'custom-file-label';
	h(label, "data-browse" ,"Buscar");



	a = c('Button');
	a.name = span.id;
	a.classList = 'btn btn-outline-primary';
	a.onclick = removeField;
	a.innerHTML = ' Quitar';


	div2.appendChild(field);
	div2.appendChild(label);
	div.appendChild(div2);
	div.appendChild(div3);
	div3.appendChild(a);
	span.appendChild(div);
	

   container.appendChild(span);
}

addFieldH = function () {
	container = d('fileshabitacion');
	span = c('SPAN');
	span.className = 'file';
	span.id = 'file' + (++numero);

	div = c('div');
	div.classList = 'input-group mb-3';

	div2 = c('div');
	div2.classList = 'custom-file';

	div3 = c('div');
	div3.classList = 'input-group-append';



	field = c('INPUT');   
	field.name = 'fotoshabitacion';
	field.type = 'file';
	field.classList = 'custom-file-input';
	field.onchange = function(){
		label.innerHTML = field.files[0].name;
	}

	label = c('label');
	label.innerHTML = '';
	label.classList = 'custom-file-label';
	h(label, "data-browse" ,"Buscar");



	a = c('Button');
	a.name = span.id;
	a.classList = 'btn btn-outline-primary';
	a.onclick = removeField;
	a.innerHTML = ' Quitar';


	div2.appendChild(field);
	div2.appendChild(label);
	div.appendChild(div2);
	div.appendChild(div3);
	div3.appendChild(a);
	span.appendChild(div);
	

   container.appendChild(span);
}

removeField = function (evt) {
   lnk = f(e(evt));
   span = d(lnk.name);
   span.parentNode.removeChild(span);
}
</script>