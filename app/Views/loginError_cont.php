

<div class="login-clean">
        <form method="post" action="<?php echo base_url();?>/index.php/Admin/administrarCheck">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-person" style="color:#465765;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="userName" required="" placeholder="Usuario"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" required="" placeholder="Contraseña"></div>
            <div class="alert alert-danger" role="alert">Usuario o contraseña invalidos.</div>
            <div class="form-group"><button type="submit" class="btn btn-primary btn-block" style="background-color:rgb(86,198,198);">Iniciar</button></div>
        </form>
    </div>