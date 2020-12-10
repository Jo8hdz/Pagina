    <div class="contact-clean" style="background-color:#f7f9fc;">
        <form method="post" method="post" action="<?php echo base_url();?>/index.php/admin/actualizados">
            <h2 class="text-center"><strong>Actualizar Datos</strong></h2>
            <div class="form-group"><input class="form-control" type="email" name="emailE" required maxlength="30" minlength="11" placeholder="Email"></div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group"><label>Telefono</label><input class="form-control" type="text" name="tel" required="" maxlength="10" minlength="10"></div>
                    <div class="form-group"><label>Whatsapp</label><input class="form-control" type="text" name="what" required="" maxlength="10" minlength="10"></div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label>Ubicación</label><input class="form-control" type="text" name="direcc" required=""></div>
                    <div class="form-group"><label style="color:rgba(80,94,108,0);">Horario</label></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-4">
                    <div class="form-group"><label>Nombres equipo</label><input class="form-control" type="text" name="editor" required="" placeholder="Editor "></div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group"><label style="color:rgba(80,94,108,0);">Label</label><input class="form-control" type="text" name="foto" required="" placeholder="Fotografo"></div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group"><label style="color:rgba(80,94,108,0);">Label</label><input class="form-control" type="text" name="dise" required="" placeholder="Diseñador"></div>
                </div>
            </div>
            <div class="form-group"></div>
            <div class="form-group"><button class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:#fffefe;">actualizar</button></div>
        </form>
    </div>