<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img class="logo_navbar" src="https://litoral.edu.co/portal/wp-content/uploads/2020/01/Logo_dark.png" alt="">
    <div class="container-fluid">
        <h3 class="text-light">Inventario Litoral</h3>
    </div>
    </div>
</nav>

<!-- formulario -->

<div class="main-container">
    <form class="box login border border rounded shadow-lg" action="" method="POST" autocomplete="off">
        <h3 class=" text-light bg-primary text-center rounded">LOGIN</h3>
        <div class="mb-3 mt-3 w-75 ms-5">
            <label for="email">Usuario:</label>
            <input type="text" class="form-control" placeholder="Digite su usuario" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
        </div>
        <div class="mb-3 w-75 ms-5">
            <label for="pwd">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Digite su contraseña" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
        </div>
        <button type="submit" class="btn btn-primary ms-5 mb-3">Iniciar sesion</button>

		<?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				require_once "./php/main.php";
				require_once "./php/iniciar_sesion.php";
			}
		?>
    </form>

</div>