
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Actualizar carrucel</h2>
                <p class="text-center">Instrucciones breves. </p>               
            </div>
            <div class="row photos" class="box">
                <?php
                    foreach($carrusel as $fotos){                            
                        echo "<div class='col-sm-6 col-md-4 col-lg-3 item'><a href='".base_url()."/assets/img/".$fotos['nombre'].".jpg' data-lightbox='photos'><img class='img-fluid' src='".base_url()."/assets/img/".$fotos['nombre'].".jpg'></a><div class='texto'>".$fotos['idPhoto']."</div></div>";
                    }
                ?>                
            </div>
        </div>
    </div>
    <div class="newsletter-subscribe">
        <div class="container">
            <form name="MiForm" id="MiForm" class="form-inline" method="post"action="cargar.php" enctype="multipart/form-data">
    
                <div class="form-group"><input type="file" class="form-control" id="image" name="image"  multiple></div>
                <div class="form-group"><button name="submit" class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:rgb(255,255,255);">Subir Imagen</button></div>
            </form>
            <form class="form-inline" method="post">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" required="" placeholder="Posicion de la imagen" maxlength="2" minlength="2">
                    <input class="form-control" type="email" name="email" required="" placeholder="Posicion de la imagen" maxlength="2" minlength="2">
                </div>
                <div class="form-group">
                    <br></br><br></br>
                    <button class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:rgb(255,255,255);">Mover Imagenes</button>
                </div>
            </form>
        </div>
    </div>