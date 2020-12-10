<div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php 
                    foreach ($carrusel as $fotosC) {
                        if ($fotosC['idPhoto']== 1) {
                            echo "<div data-bs-hover-animate='pulse' class='swiper-slide' style='background-image:url(".base_url()."/assets/img/".$fotosC['nombre'].".jpg);'></div>";
                        }else {
                            echo "<div class='swiper-slide' style='background-image:url(".base_url()."/assets/img/".$fotosC['nombre'].".jpg);'></div>";
                        }                      
                    }                    
                ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Nuestro trabajo</h2>
                <p class="text-center">Descripción breve de las caracteristicas y calidad del servicio. </p>
            </div>
            <div class="row photos">
                    <?php
                        foreach($galeria as $fotos){                            
                            echo "<div class='col-sm-6 col-md-4 col-lg-3 item'><a href='".base_url()."/assets/img/".$fotos['nombre'].".jpg' data-lightbox='photos'><img class='img-fluid' src='".base_url()."/assets/img/".$fotos['nombre'].".jpg'></a></div>";
                        }
                    ?>               
            </div>
        </div>
    </div>