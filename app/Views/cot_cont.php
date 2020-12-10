    <div class="contact-clean" style="background-color:#f7f9fc;">
        <form method="post" action="<?php echo base_url();?>/index.php/Home/cotizacionEnviada">
            <h2 class="text-center"><strong>Solicitar cotización</strong></h2>
            <div class="form-group"><input class="form-control" type="text" name="Nombre" minlength="4"maxlength="10" required placeholder="Nombre"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" required minlength="11" maxlength="45" placeholder="Email"></div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group"><label>Telefono</label><input name="telefono" class="form-control" type="text" pattern="[0-9]+" minlength="10" required placeholder="Numero"></div>
                    <div class="form-group"><label>Tipo de evento</label><input name="evento" class="form-control" type="text" minlength="4"maxlength="25" required placeholder="Boda, XV años, etc."></div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label>Ubicación</label><input name="ubicacion" class="form-control" type="text" maxlength="30" placeholder="Colonia y Estado"></div>
                    <div class="form-group"><label>Horario</label><input name="horario" class="form-control" type="text" required minlength="5" maxlength="10" placeholder="Mañana, tarde, noche."></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group"><label>Fecha tentativa.</label><input name="fechaE" class="form-control" type="date" required min="2020-12-10" max="2022-12-10" placeholder="Dia"></div>
            </div>
            </div>
            <div class="form-group"><textarea name="detalles" class="form-control" rows="14" name="message" placeholder="Mas detalles que te parezcan relevantes" inline ></textarea></div>
            <div class="form-group"><button class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:#fffefe;">solicitar</button></div>
        </form>
    </div>