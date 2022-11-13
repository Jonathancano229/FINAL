<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a href="index.php?vista=home">
    <img class="logo_navbar" src="https://litoral.edu.co/portal/wp-content/uploads/2020/01/Logo_dark.png" alt="">
    </a>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Usuarios</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?vista=user_new">Nuevo</a>
                        <a class="dropdown-item" href="index.php?vista=user_list">Lista</a>
                        <a class="dropdown-item" href="index.php?vista=user_search">Buscar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Categorias</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?vista=category_new">Nuevo</a>
                        <a class="dropdown-item" href="index.php?vista=category_list">Lista</a>
                        <a class="dropdown-item" href="index.php?vista=category_search">Buscar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Activos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?vista=product_new">Nuevo</a>
                        <a class="dropdown-item" href="index.php?vista=product_list">Lista</a>
                        <a class="dropdown-item" href="index.php?vista=product_category">Por categoria</a>
                        <a class="dropdown-item" href="index.php?vista=product_search">Buscar</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="btn btn-light">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="btn btn-success">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>