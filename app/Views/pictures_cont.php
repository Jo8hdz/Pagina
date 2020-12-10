   <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Actualizar galeria</h2>
                <p class="text-center">Descripción breve de las caracteristicas y calidad del servicio. </p>               
            </div>
            <div class="row photos" class="box">
                <?php
                    foreach($galeria as $fotos){                            
                        echo "<div class='col-sm-6 col-md-4 col-lg-3 item'><a href='".base_url()."/assets/img/".$fotos['nombre'].".jpg' data-lightbox='photos'><img class='img-fluid' src='".base_url()."/assets/img/".$fotos['nombre'].".jpg'></a><div class='texto'>".$fotos['idPhoto']."</div></div>";
                    }
                ?>                
            </div>
        </div>
    </div>
    <div class="newsletter-subscribe">
        <div class="container">
            <form class="form-inline" method="post" action="<?php echo base_url();?>/index.php/admin/galeria">
                <div class="form-group">
                    <input class="form-control" type="text" name="posA" required="" placeholder="Imagen a mover" maxlength="2" minlength="2">
                    <br></br>
                    <input class="form-control" type="text" name="posD" required="" placeholder="Posición deseada" maxlength="2" minlength="2">
                </div>
                <div class="form-group">
                    
                    <button class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:rgb(255,255,255);">Mover Imagenes</button>
                </div>
            </form>
        </div>
    </div>
    <div class="newsletter-subscribe">
        <div class="container">
            <form name="MiForm" id="MiForm" class="form-inline" method="post"action="<?php echo base_url();?>/index.php/admin/galeria" enctype="multipart/form-data">
    
                <div class="form-group"><input type="file" class="form-control" id="image" name="imagen"  multiple></div>
                <div class="form-group"><button name="submit" class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:rgb(255,255,255);">Subir Imagen</button></div>
            </form>
        </div>
    </div>
   
    <div class="newsletter-subscribe">
        <div class="container">
            <form class="form-inline" method="post" action="<?php echo base_url();?>/index.php/admin/galeria">
                <div class="form-group">
                    <input class="form-control" type="text" name="imgDel" required="" placeholder="Imagen a eliminar" maxlength="2" minlength="2">
                </div>
                <div class="form-group">
                   
                    <button class="btn btn-outline-primary" type="submit" style="background-color:#56c6c6;color:rgb(255,255,255);">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
                
    
                
    