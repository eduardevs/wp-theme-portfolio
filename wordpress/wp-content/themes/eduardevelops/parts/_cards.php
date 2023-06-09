<div class="col-10 col-md-4 mt-5">
    <div class="p-5 border">
        <div class="bg-light">
            <!--<img src="./img/childtheme-blog.jpg" alt="" class="img-fluid"> -->
            <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
        </div>
        <div class="card-body">
            <div class="card-text">
                <h5><?php the_title();  ?></h5>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <span><?php the_author(); ?></span>
                <span><?php the_category();  ?></span>
                <a href="<?php the_permalink() ?>" target="_blank" class="text-orange"> Lire plus...</a>
            </div>
        </div>
    </div>
</div>


<!-- <div class="card" style="width: 16rem;">
    <div class="card-body">
        <h5 class="card-title">
            <h4><?php //the_title(); ?></h4>
        </h5>
        <h5 class="card-subtitle">
            <h4><?php //the_category();  
                ?></h4>
        </h5>
        <?php
        // TODO! the_terms(get_the_ID(), 'sport')
        ?>
        <p class="card-text"> <?php //the_excerpt(); 
                                ?></p>
        <a href="<?php //the_permalink(); 
                    ?>"> Lien vers l'article</a>
        {# <p><?php //the_author(); 
                ?></p> #}
    </div>
</div>
-->