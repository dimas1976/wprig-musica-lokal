<?php
/*
Template Name: Media
*/
get_header();
?>
    <div id="motiv-media" class="mb-5" data-aos="fade-down">
        <div class="credit">Foto: &copy; Cem Renkligül </div>
    </div>
    <div id="accordion" class="pt-4 pb-5">
        <div class="card" data-aos="fade-right">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                        VIDEO
                    </button>
                </h5>
            </div>
                <div class="container">
                    <div class="row">
                        <div id="collapseOne" class="collapse show col-sm-12 col-md-6" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <figure>
                                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/8JzEtFdB7Yc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <figcaption>
                                        ~Sing for Peace~
                                        Dieser Song ist komponiert und getextet von Kindern, Jugendlichen und den ausführenden Dozenten unserer Mai (Ferien) Workshops.
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse show col-sm-12 col-md-6" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <figure>
                                    <iframe class="lazyload" width=100%" height="250" src="https://www.youtube.com/embed/NunezH2-Vf0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <figcaption>
                                        Dieser Workshop fand von Frühjahr bis Herbst 2018 in der Louise-Schröder Schule statt.
                                        In lockeren Zeitabständen ging es um das Einstudieren verschiedener Rhythmen und Sounds
                                        auf (entsorgten) Alltagsgegenständen.
                                        Dumisani Mabaso: „Wir möchten den Kindern zeigen, dass man auch ohne 'richtige'
                                        Instrumente wunderbar Musik machen kann. Beats und Sounds kreieren z.B. nur mit der
                                        eigenen Stimme oder vermeintlich abstrakten Dingen.“
                                        Thando Walbaum: „Die Kinder haben angefangen, sich mehr Gedanken über 'Müll' zu machen
                                        und was daraus noch entstehen kann; anstatt Sachen gleich wegzuwerfen.“
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="collapseOne" class="collapse show col-sm-12 col-md-6" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <iframe class="lazyload" width="100%" height="250" src="https://www.youtube.com/embed/wHPF73e3x7w"
                                        allowfullscreen title="Der Film über Musica Altona e.V."></iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card" data-aos="fade-right">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
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
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                        GALLERY
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"></div>
        </div>
    </div>
<?php
get_footer();
?>
