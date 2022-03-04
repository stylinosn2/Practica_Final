<!DOCTYPE html>
<html>
<head>
	
	<title>Ingreso uwu</title>
</head>
<body>
	<div class="container">
		<h1>INGRESO</h1>
		<form method="POST" action="<?php echo base_url(); ?>/Home/ingresarForm">
			<label for="email">Email</label>
			<input  type="email" id="email" name="email" placeholder="email"></input>
			<label for="password">Password</label>
			<input  type="password" id="password" name="password" placeholder="password"></input>
			<button type="submit">ingresar</button>

			
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