	<!DOCTYPE html>
	<html>
	<head>
		<style>
		body, html {
			height: 100%;
			margin: 0;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.box.login {
			max-width: 400px;
			padding: 20px;
			box-sizing: border-box;
		}
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
		}
		</style>
	</head>
	<body>
	<form class="box login" action="" method="POST" autocomplete="off">
		<h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario Jovenes Crack</h5>
		<div class="center">
			<img src="./img/TRANSPARENTE.png" width="100" height="500" alt="Imagen centrada">
		</div>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
				<input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field">
			<label class="label">Contraseña</label>
			<div class="control">
				<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
			</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-info is-rounded">Iniciar sesión</button>
		</p>

		<?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				require_once "./php/main.php";
				require_once "./php/iniciar_sesion.php";
			}
		?>
	</form>
	</body>
	</html>
