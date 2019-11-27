<div class="container">
	<div class="row">
<?php
foreach($hoteles as $key => $value):
	echo $value['id_hotel'] 
	//$value['nombre'],
//	$value['direccion'], $value['email'],
//	$value['telefono'];
?>
	<div class="col-xl-4">
		<div class="card" style="width: 18rem;">
		  <img src="..." class="card-img-top" alt="...">
		  <div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		  <hr>
		  <div class="card-body">
			<a href="#" class="btn btn-primary">Card link</a>
			<button class="btn btn-outline-primary">Another link</button>
		  </div>
		</div>
	</div>
<?php endforeach?>
	</div>
</div>