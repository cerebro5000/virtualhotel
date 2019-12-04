<div class="container">
	<div class="row">
		<?php foreach($hoteles as $key => $value):?>
		<div class="col-xl-3">
			<div class="card" style="width: 17rem;">
				<?php if (!empty($value['imagen'])): ?>
					<?php foreach ($value['imagen'] as $key => $val): ?>
					<img src="<?php echo UPLOADHOTEL. $val ?>" class="card-img-top" alt="...">
					<?php endforeach ?>
				<?php else: ?>
					<img src="img/fondo feo.jpg" class="card-img-top" alt="...">
				<?php endif ?>
				
				<div class="card-body">
					<h5 class="card-title"><?php echo $value['nombre'] ?></h5>
					<p class="card-text"><?php echo $value['direccion'] ?></p>
					<?php echo $value['telefono'] ?><br>
					</p>
				</div>
				<hr>
				<div class="card-body">
					<input type="text" name="" hidden="true" value="<?php $value['id_hotel']; ?>">
					<button class="btn btn-outline-primary" id="eliminar">Eliminar</button>
					<button class="btn btn-outline-primary" id="editar">Editar</button>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registroform').click(function(event){
				event.preventDefault();
		$.post('index.php?controller=usuario&action=eliminarhotel');
		});
	});
</script>