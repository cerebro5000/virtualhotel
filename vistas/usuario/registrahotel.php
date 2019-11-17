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
								<?php foreach ($estados as $key => $value): ?>
									<option value="<?php echo $value['id_estado'] ?>"> <?php echo $value['nombre'] ?></option>
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
					<div class="row">
						<div class="col-xl-12">
							<button class="btn btn-primary" id="continuestep1">Continuar</button>
						</div>
					</div>
				</div>
			</div>
		<?php if ($paso2 == 'active'): ?>
			<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<?php else: ?>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<?php endif ?>
				<h6>Informacion habitacion</h6>
				<div class="row">
					<div class="col-xl-12">
						<button class="btn btn-outline-primary " id="agregarhab" onclick="addListh()">Agregar Habitacion</button>
				<div class="jumbotron">
					<h6>Informacion habitacion</h6>
					<div class="row">
						<div class="col-xl-6">
							<div class="form-group">
								<select class="form-control" id="tipo">
									<option value="">Tipo de habitacion</option>
									<label for="tipo">Tipo de habitacion</label>
								<select id="tipohabitacion" class="form-control">
									<option value="">seleccione una opcion</option>
									<?php foreach ($tipos as $key => $value): ?>
										<option value="<?php echo $value['id_tipo'] ?>"><?php echo $value['descripcion'] ?></option>
									<?php endforeach ?>
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
				</div>
				<div id="listahab"></div>
				<div class="jumbotron">
					<button class="btn btn-primary" id="backstep1">Regresar</button>
					<button class="btn btn-primary" id="continuestep2">Continuar</button>
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
				datosform.append("estado" , $('#estado').val() );
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
		$('#backstep1').click(function(event){
			event.preventDefault();
			$.ajax({
				url: 'index.php?controller=hotel&action=back',
				data: {step: 1},
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
		});
		$('#backstep2').click(function(event){
			event.preventDefault();
			$.ajax({
				url: 'index.php?controller=hotel&action=back',
				data: {step: 2},
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
		});
		$('#continuestep2').click(function(event){
			event.preventDefault();

		});
	});
</script>
<script type="text/javascript">
var numero = 0;
var thab = 0;

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

addListh = function () {
	container = d('listahab');
	span = c('SPAN');
	span.className = 'hab';
	span.id = 'hab' + (++thab);

	hr1 = c('hr');
	hr2 = c('hr');
	br = c('br');
	br2 = c('br');

	div = c('div');
	div.classList = 'jumbotron';
	label1 = c('label');
	label1.innerHTML ='Descripcion de habitacion';

	div1 = c('div');
	div1.classList = 'row';
	div2 = c('div');
	div2.classList = 'col-xl-12';
	div3 = c('div');
	div3.classList = 'col-xl-6';
	div4 = c('div');
	div4.classList = 'form-group';

	row1 = c('div');
	row1.classList = 'row';
	col1 = c('div');
	col1.classList = 'col-xl-8';
	label3 = c('label');
	label3.innerHTML ='Tipo de cama';
	select2 = c('select');
	select2.name = 'tipocama';
	select2.classList = 'form-control';
	op1 = c('option');
	op1.value = ''
	op1.innerHTML = 'seleccione una opcion';
	select2.appendChild(op1);
	var tipos = ["Individual", "Matrimonial", "King size", "Queen size"];
	tipos.forEach(myfor);

	col2 = c('div');
	col2.classList = 'col-xl-2';
	label4 = c('label');
	label4.innerHTML = 'Numero de camas';
	input1 = c('input');
	input1.type = 'text';
	input1.name = 'ncama';
	input1.classList = 'form-control';
	$(input1).on('input', function(){
		 this.value = this.value.replace(/[^0-9]/g,'');
	});
	

	col3 = c('div');
	col3.classList = 'col-xl-2';
	label5 = c('label');
	label5.innerHTML = "Precio";
	input2 = c('input');
	input2.name = 'precio';
	input2.type = "text";
	input2.classList = 'form-control';
	$(input2).on('input', function(){
		 this.value = this.value.replace(/([^0-9])?(\.[0-9]{1}){1}([^0-9])+/,'');
	});
	

	row2 = c('div');
	row2.classList = 'row';
	col4 = c('div');
	col4.classList = 'col-xl-12';
	label6 = c('label');
	label6.innerHTML = 'imagenes de la habitacion';
	qdd = c('Button');
	qdd.name = span.id;
	qdd.classList = 'btn btn-primary';
	qdd.onclick = addFieldH;
	qdd.innerHTML = 'Agregar archivos';

	row3 = c('div');
	row3.classList = 'row';
	col5 = c('div');
	col5.classList = 'col-xl-6';
	fileshabitacion = c('div');
	fileshabitacion.id = 'fileshabitacion';

	label2 = c('label');

	label2.innerHTML = 'Tipo de habitacion';
	h(label2, 'for', 'tipohabitacion');
	select1 = c('select');
	select1.name = 'tipohabitacion';
	select1.classList = 'form-control';
	op = c('option');
	op.value = ''
	op.innerHTML = 'seleccione una opcion';
	select1.appendChild(op);
	<?php foreach ($tipos as $key => $value): ?>
		op = c('option');
		op.value = '<?php echo $value['id_tipo'] ?>';
		op.innerHTML = '<?php echo $value['descripcion'] ?>';
		select1.appendChild(op);
	<?php endforeach ?>


	a = c('Button');
	a.name = span.id;
	a.classList = 'btn btn-outline-primary';
	a.onclick = removeField;
	a.innerHTML = ' Quitar';

	div2.appendChild(label1);
	div2.appendChild(br);
	div2.appendChild(a);
	div2.appendChild(hr1);
	div1.appendChild(div2);
	div4.appendChild(label2);
	div4.appendChild(select1);
	div3.appendChild(div4);
	div1.appendChild(div3);
	div.appendChild(div1);

	col1.appendChild(label3);
	col1.appendChild(select2);
	col2.appendChild(label4);
	col2.appendChild(input1);
	col3.appendChild(label5);
	col3.appendChild(input2);
	row1.appendChild(col1);
	row1.appendChild(col2);
	row1.appendChild(col3);
	div.appendChild(row1);

	col4.appendChild(hr2);
	col4.appendChild(label6);
	col4.appendChild(br2);
	col4.appendChild(qdd);
	row2.appendChild(col4);
	div.appendChild(row2);

	col5.appendChild(fileshabitacion);
	row3.appendChild(col5);
	div.appendChild(row3);
	span.appendChild(div);

	container.appendChild(span);
}

function myfor(item, index) {
		op = c('option');
		op.value = index+1;
		op.innerHTML = item;
		select2.appendChild(op);
	}
</script>