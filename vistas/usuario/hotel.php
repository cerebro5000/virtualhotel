<div class="container">
	<div class="row">
		<div class="col-xl-4" style="">
			<div class="jumbotron">
				<label>informacion hotelera</label>
				<br>
				
				<label>nombre:</label>
				<br>
				<b> <?php foreach($hoteles as $key => $value):?>
				<?php echo $value['nombre'] ?>
				<?php endforeach; ?> </b>
				<br>
				
				<label>direccion:</label>
				<br>
				<b> <?php foreach($hoteles as $key => $value):?>
				<?php echo $value['direccion'] ?>
				<?php endforeach; ?> </b>
				<br>
				
				<label>telefono</label>
				<br>
				<b> <?php foreach($hoteles as $key => $value):?>
				<?php echo $value['telefono'] ?>
				<?php endforeach; ?> </b>
				
			</div>
		</div>
		<div class="col-xl-8">
			<div class="row">
				<div class="col-xl-12">
					<div class="jumbotron">
						<label>servicios hotel</label>
						<br>
						<b> <?php foreach($servicio as $key => $value):?>
						<?php echo $value['nombre'] ?>
						<?php endforeach; ?></b>
						
						</br>
						<label>servicios hotel</label>
						<br>
						<b> <?php foreach($servicios as $key => $value):?>
						<?php echo $value['nombre'] ?>
						<?php endforeach; ?></b>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="jumbotron">
						<label>Habitacion</label>
						<br>
						<b><?php foreach($habitaciones as $key => $value):?>
						<?php echo $value['descripcion'];?>
						
						<?php endforeach; ?></b>
						
						<br>
						<b><?php foreach($habitacion as $key => $value):?>
						<?php echo $value['num_cama']?></b>
						<br>
						<b><?php echo $value['precio']?>
						<?php endforeach; ?></br>				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>