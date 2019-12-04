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
					<p class="card-text"><?php echo $value['direccion']?> <br>
					<?php echo $value['telefono'] ?><br>
					</p>
				</div>
				<hr>
				<div class="card-body">
					<input type="text" name="" hidden="true" value="<?php echo $value['id_hotel']; ?>">
					<button class="btn btn-outline-primary" id="seehotel">Ver Hotel</button>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('button[id="seehotel"]').click(function(event){
			var input = $(this).parent('.card-body').children('input').get(0);
			$.ajax({
				url: 'index.php?controller=hotel&action=see',
				data: {it : input.value },
				type: 'POST',
				success: function(dato){
					switch(dato){
						case 'true':
							window.location.href = 'index.php?controller=usuario&action=hotel';
						break;
						default:
							alert('hotel no disponible');
						break;
					}
				}
			});
		});
	});
</script>