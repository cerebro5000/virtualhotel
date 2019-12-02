<div class="container">
	<div class="row">
		<?php foreach($hoteles as $key => $value):?>
		<div class="col-xl-4">
			<div class="card" style="width: 18rem;">
				<img src="" class="card-img-top" alt="...">
				<div class="card-body">

					<h5 class="card-title"><?php echo $value['nombre'] ?></h5>
					<p class="card-text"><?php echo $value['direccion'] ?></p>
				</div>
				<hr>
				<div class="card-body">
					<input type="text" name="" hidden="true" value="<?php $value['id_hotel']; ?>">
					<a href="#" class="btn btn-primary">Card link</a>
					<button class="btn btn-outline-primary">Another link</button>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>