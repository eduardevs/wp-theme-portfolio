    <? get_header() ?>

    <main id="wrap">
        <div id="banner" class="">
            <!-- <div class="banner-img">
        </div> -->
            <img src="<?php echo get_template_directory_uri() . '/images/Logo_Trust_White.png'; ?>"  alt="" class="img-fluid banner-img">
            <div id="banner-bg" class="transparent-grey row col-12 d-none d-sm-block">
            </div>
        </div>
        <div id="main" class="clear-top">


            <section id="portfolio" class="container mt50">
                <!-- !TODO!
                <h2>Portfolio</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus molestias quis aperiam repellat recusandae deserunt debitis natus commodi, possimus inventore ratione quam consequuntur deleniti sapiente voluptas porro reprehenderit. Eligendi, quia.</p> -->

                <!--  <div class="row d-flex justify-content-between">




                    <div class="">

                        <div class="row">

                            <div id="menu" class="col-12 text-center d-flex justify-content-center ml-n-15">

                                <nav>
                                    <ul class="row">
                                        <li class="col-6">
                                            <a href="javascript:initGalerie('listeImgFirstWorks')">
                                                <h5>Frontend</h5>
                                            </a>
                                        </li>
                                        <li class="col-6">

                                            <a href="javascript:initGalerie('listeImgSecondWorks')">
                                                <h5>Backend</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div id="content" class="col-12 d-flex flex-wrap">
                            </div>

                        </div>
                    </div>
-->
        </div>
        </section>


        <section id="blog" class="mt50">

            <h2>Blog</h2>
            <p>Regardez mon nouveau blog !</p>
            <div class="container">


                <div class="row container d-flex justify-content-between">

                    <!-- partial-->
                    <?php if (have_posts()) : while (have_posts()) : ?>

                            <?php the_post() ?>
                            <?php get_template_part('parts/_cards') ?>
                    <?php endwhile;
                    endif;
                    ?>
                </div>
                <!--   <div class="card col-10 col-md-4 mt-5">
                    <div class="bg-light">
                        <img src="./img/childtheme-blog.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <h5>Création des thèmes en Wordpress</h5>
                            <p>
                                Quand on travail avec un thème de WordPress, une des meilleures pratiques est de créer un thème enfant (child theme)
                                mais, <span class="font-weight-bold">c’est quoi un thème enfant ?</span>
                            </p>
                            <a href="https://develoraptor.tech/comment-creer-un-theme-enfant-en-wordpress/" target="_blank" class="text-orange"> Lire plus...</a>
                        </div>
                    </div>
                </div>
                <div class="card col-10 col-md-4 mt-5">
                    <div class="bg-light">
                        <img src="./img/mvc.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <h5>Architecture MVC</h5>
                            <p>
                                Le MVC ou Modele-Vue-Contrôleur (Modele-View-Controler) est une des plus utilisées architectures dans le développement des application web. Mais à quoi se doit sa réussite…
                            </p>
                            <a href="https://develoraptor.tech/mvc/" target="_blank" class="text-orange"> Lire plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                 </div>-->

            </div>
        </section>



        </div>




    </main>
    <?php get_footer() ?>

    <!-- CDN JQUERY ET BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="./js/type-effect.js"></script>
    <script src="./js/sidebar.js"></script>
    <script src="./js/mosaique.js"></script>

    </body>

    </html>