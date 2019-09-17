<?php 
/*
 * 	Template Name: Home
 */?>


<?php get_header(); ?>


<div class="page page--home">
    <div class="pagewrap">
        <?php if(have_posts()): while(have_posts()) : the_post(); ?>

        <h1>
            <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
    </div>
</div>


<?php get_footer(); ?>