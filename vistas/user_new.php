<div class="container is-fluid mb-6 ms-1">
    <h2 class="title">Usuarios</h2>
    <h3 class="subtitle">Nuevo usuario</h3>
</div>
<div class="container pb-6 pt-6 mt-5">

    <!-- <div class="form-rest mb-6 mt-6"></div> -->

    <form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="control">
                    <label>Nombres</label>
                </div>
                <div class="control">
                    <input class="form-control" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}"
                        maxlength="40" required>
                </div>
            </div>
            <div class="col-4">
                <div class="control">
                    <label>Apellidos</label>
                </div>
                <div class="control">
                    <input class="form-control" type="text" name="usuario_apellido"
                        pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="control">
                    <label>Usuario</label>
                </div>
                <div class="control">
                    <input class="form-control" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}"
                        maxlength="20" required>
                </div>
            </div>
            <div class="col-4">
                <div class="control">
                    <label>Email</label>
                </div>
                <div class="control">
                    <input class="form-control" type="email" name="usuario_email" maxlength="70">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="control">
                    <label>Clave</label>
                </div>
                <div class="control">
                    <input class="form-control" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}"
                        maxlength="100" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar</button>

            </div>
            <div class="col-4">
                <div class="control">
                    <label>Repetir clave</label>
                </div>
                <div class="control">
                    <input class="form-control" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}"
                        maxlength="100" required>
                </div>
            </div>
        </div>
    </form>
</div>