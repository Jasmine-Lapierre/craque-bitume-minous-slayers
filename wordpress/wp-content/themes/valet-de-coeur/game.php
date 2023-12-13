<?php 
/**
 * 	Template Name: Jeu
 *  Template Post Type: jeu
 */
get_header();
global $post;
$post_slug = $post->post_name;
?>


<div class="game">
    <div class="game__media">
        <?php the_post_thumbnail('large'); // Vignette large du post ?>
    </div>

    <div class="game__infos">
        <div class="game__stats">
            <div class="game__price"><?php the_field('prix'); ?>💵</div>
            <div class="game__duration"><?php the_field('duree_moyenne'); ?>⏱️</div>
            <div class="game__players"><?php the_field('nombre_de_joueurs'); ?>👨‍👩‍👦</div>
            <div class="game__age"><?php the_field('age_minimal'); ?>🎂</div>
        </div>

        <h2 class="game__title"><?php the_title(); // Titre du post ?></h2>

        <div class="game__desc"><?php the_content(); // Contenu principal de la page?></div>
    </div>
</div>

<?php 
get_footer();
?>