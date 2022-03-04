<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Registro</title>
</head>
<body>
	<div class="container">
		<h1>Registro Encontrado </h1>

		<form method="POST" action="<?php echo base_url(); ?>/Home/actualizarRegistro">
			<input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">	<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo $usuario; ?>">
			<label for="password">Password</label>
			<input type="text" name="password" value="<?php echo $password: ?>">	
			
			<button type="submit">ACTUALIZAR</button>	
		</form>
	</div>

</body>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Luis</a>
	</div>
	</footer>
</html>