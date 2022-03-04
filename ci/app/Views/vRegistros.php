<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
</head>
<body>
	<div class="container">
		<h1>Registros Actuales</h1>
		<table>
			<thead>
				<tr>
					
					<th>ID</th>
					<th>Usuarios</th>
					<th>Contraseña</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios as $usuario) { ?>
				<tr>
					<td><?php echo $usuario['id_usuario']; ?></td>
					<td><?php echo $usuario['usuario']; ?></td>
					<td><?php echo $usuario['password']; ?></td>
				</tr>
				<?php  } ?>
			</tbody>
		</table>


	</div>

</body>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Luis</a>
	</div>
	</footer>
</html>