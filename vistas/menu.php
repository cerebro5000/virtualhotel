<body>
<div class="container mt-3">
	<form id="iniciosesion" action="index.php?controller=usuario&action=login" method="post">
	<div class="input-group mb-3">
		<div class="input-group-prepend" id="button-addon3">
			<a id="inicio" href="?controller=inicio&action=inicio" class="btn btn-outline-secondary" type="button">Inicio</a>
			<a id="contactenos" href="?controller=inicio&action=contacto" class="btn btn-outline-secondary" type="button">Contactenos</a>
		</div>
		
		<div class="input-group-prepend" id="button-addon3">
			<label class="input-group-text">usuario</label>
		</div>
		<input id="usuario" type="text" class="form-control" placeholder="">
		<div class="input-group-prepend" id="button-addon3">
			<label class="input-group-text">contraseña</label>
		</div>
		<input id="contrasena" type="password" class="form-control" placeholder="">
		<div class="input-group-append" id="button-addon3">
			<a  id="login" name="login"  class="btn btn-outline-primary"  href="javascript:goLogin()">Login</a>
			<a id="registro" href="?controller=inicio&action=registro" class="btn btn-outline-primary" type="button">registro</a>
		</div>
	</div>
	</form>
</div>
<script type="text/javascript">
	function goLogin() {
		var connect, form, response, result, user, pass, sesion;
		user = $('#correo').value;
		pass = $('#password').value;
		form = 'user=' + user + '&pass=' + pass;
		
		connect = new XMLHttpRequest();
		connect.open('POST','/index.php?controller=usuario&action=login',true);
		connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		location.replace('index.php?controller=usuario&action=login');
		connect.send(form);
		alert('enviado');
	}
	function runScriptLogin(e) {
		if(e.keyCode == 13) {
			goLogin();
		}
	}
</script>

