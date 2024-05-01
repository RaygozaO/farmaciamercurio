<div class="login-container">
    <div class="login-content">
        <p class="text-center">
            <i class="fas fa-user-circle fa-5x"></i>
        </p>
        <p class="text-center">
            Inicia sesión con tu cuenta
        </p>
        <form action="" method="POST" autocomplete="off" >
            <div class="form-group">
                <label for="usuario_log" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
                <input type="text" class="form-control" id="usuario_log" name="usuario_log" pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required="" >
            </div>
            <div class="form-group">
                <label for="pass_log" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
                <input type="password" class="form-control" id="pass_log" name="pass_log" pattern="[a-zA-Z0-9$@\-*]{7,20}" maxlength="20" required="" >
            </div>
            <button type="submit" class="btn-login text-center">Ingresar</button>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['usuario_log']) && isset($_POST['pass_log'])){
        require_once "./controllers/login_controller.php";
        $ins = new login_controller();
        echo $ins->sesion_controller();
    }
?>
