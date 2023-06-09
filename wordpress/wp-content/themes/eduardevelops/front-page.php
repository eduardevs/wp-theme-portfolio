<?php get_header() ?>

<main id="wrap">
    <div id="banner" class="">
        <section id="apropos" class="container">
            <h2>À propos</h2>
            <p>Faisons connaissance</p>
            <div class="row d-flex">
                <div class="col-12 col-md-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Eduardo.png'; ?>" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-8">
                    <h5 class="text-orange">Qui suis-je ?</h5>
                    <h4>Je suis Eduardo,</h4>
                    <h4>et je développe des sites et des applications web.</h4>
                    <!--  <p>Je suis développeur web depuis une reconvertion professionnelle. Le coding est devenu pour moi une activité passionnante. Constamment, je cherche à ameliorer mes compétences. Jetez un oeil sur mon portfolio et regardez si on peut travailler ensemble!
            </p> -->
                    <p>Passionated about new technologies. I am an entusiasthic programmer always looking for new challenges.</p>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Nom : Jesus Eduardo Pina</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>Email : jeseduardopi@gmail.com</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>De : Vénézuéla</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-3">

                            <a href="<?php echo get_template_directory_uri() . '/docs/Eduardo Pina - Developpeur Web.pdf'; ?>" class="btn btn-primary btn-lg ml-md-5 rounded-pill" target="_blank">Télecharger mon CV</a>
                            <a href="#portfolio" id="call-portfolio" class="btn btn-secondary btn-lg ml-md-5 rounded-pill">Mon portfolio</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container">
            <div class="row d-flex justify-content-between">
                <?php if (have_posts()) : while (have_posts()) : ?>
                        <?php the_post() ?>
                        <?php get_template_part('parts/_cards') ?>
                <?php endwhile;
                endif;
                ?>
        </section>


    </div>
</main>
<?php get_footer() ?>