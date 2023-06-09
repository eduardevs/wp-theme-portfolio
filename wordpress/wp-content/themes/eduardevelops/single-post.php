<?php get_header() ?>
<div class="w-100">
    <div class="container">
        <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:40%; height:auto; display=flex; margin: 0 auto;" />
        <h1><?php the_title() ?></h1>
        <p> <?php the_content() ?></p>
    </div>
</div>
<?php get_footer() ?>