<div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;<?php echo base_url();?>/assets/img/foto_A0_Rectangle_4_pattern@2x.png&quot;);"></div>
            <form method="post" action="<?php echo base_url();?>/index.php/Admin/crearUsuario">
                <h2 class="text-center"><strong>Crear</strong> un usuario.</h2>
                <div class="form-group"><input class="form-control" type="text" name="UserName" minlength="3" required placeholder="Nombre de usuario"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" minlength="8" required placeholder="Contraseña"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" required="" placeholder="Confirmar contraseña"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="admin" value="1">Administrador</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(86,198,198);">Crear</button></div>
            </form>
        </div>
        
    </div>
    
        
    