    <div class="register-photo">
        <div class="form-container">            
            <form method="post" action="<?php echo base_url();?>/index.php/admin/done">
                <h2 class="text-center"><strong>Cambiar</strong> contraseña.</h2>
                <select class="form-control" name="actualizarU" id="" required="" >
                    <option disabled selected>Selecciona un usuario</option>
                    <?php
                        foreach($usuarios as $cuentas){
                            if($cuentas['idUsuario'] != 1 ){
                                echo " <option value='".$cuentas['idUsuario']."'>".$cuentas['nombreU']."</option>";
                            }
                        }
                    ?>
                </select>
                <div class="form-group"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" required="" placeholder="Nueva contraseña"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" required="" placeholder="Confirmar contraseña"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" name="permiso" type="checkbox" value="1">Administrador</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(86,198,198);">Cambiar</button></div>
            </form>

            <form method="post" action="<?php echo base_url();?>/index.php/admin/done" >
                <h2 class="text-center"><strong>Eliminar</strong>&nbsp;usuario.</h2>
                <select class="form-control" name="eliminarU" id="" >
                    <option disabled selected>Selecciona un usuario</option>
                    <?php
                        foreach($usuarios as $cuentas){
                            if($cuentas['idUsuario'] != 1 ){
                                echo " <option value='".$cuentas['idUsuario']."'>".$cuentas['nombreU']."</option>";
                            }
                        }
                    ?>
                </select>               
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(86,198,198);">Eliminar</button></div>
            </form>            



        </div>

        
        
    </div>
   