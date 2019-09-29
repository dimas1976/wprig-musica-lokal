<?php
/*
Template Name: Media
*/
get_header();
?>
    <div id="motiv-media" class="mb-5" data-aos="fade-down">
        <div class="credit">Foto: &copy; Anek Artwork</div>
    </div>
    <div id="accordion" class="pt-4 pb-5">
        <div class="card" data-aos="fade-right">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        VIDEO
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <iframe class="lazyload" width="560" height="315" src="https://www.youtube.com/embed/wHPF73e3x7w"  allowfullscreen title="Der Film über Musica Altona e.V."></iframe>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-right">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        AUDIO
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <a href="#"><i class="fas fa-download"></i> audio1 <br></a>
                    <a href=""><i class="fas fa-download"></i> audio2</a>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-right">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        GALLERY
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <figure>
                        <img class="img-fluid lazyload" data-src="<?= bloginfo("template_url"); ?>/assets/img/media/gallery/bundespraesidialamt.jpg" alt="Bundespräsident Joachim Gauck zeichnet Patricia Renz und Gino Romero Ramirez mit dem Verdienstkreuz">
                        <figcaption>4. Oktober 2016 - Bundespräsident Joachim Gauck zeichnet Patricia Renz und <br>Gino Romero Ramirez mit dem Verdienstkreuz am Bande für das interkulturelle Kinder- <br>und Jugendmusikprojekt 'Musica Altona' bei der Ordensverleihung zum Tag der <br>Deutschen Einheit in Schloss Bellevue aus.</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>