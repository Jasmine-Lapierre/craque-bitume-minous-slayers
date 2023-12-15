<?php 
/**
 * 	Template Name: Team
 * 	Identique à page, mais avec une barre latérale
 * Template Post Type: post, page, equipe
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article class="section-equipe">
			<?php
		get_template_part( 'partials/heros' ); 
		get_template_part( 'partials/description' ); ?>
  <!--  <section class="hero-generique--section">
        <div class="hero-generique--background">
            <img src="<?php bloginfo('template_url'); ?>/medias/accueil/intro-craque_1500x.webp" alt="">
        </div>

        <h1 class="hero-generique--titre">
            <span class="formation--titre">L'ÉQUIPE DE CRAQUE-BITUME</span>
        </h1>
    </section>

    <section> <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf2 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

        <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf2 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">
        <div class="container description-generale">

            <h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </h2>

        </div>
    </section>  -->
    <section class="equipe">
        <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">


        <div class="container-xl container-fluid">
            <div class="row">
                <?php
                    $equipe = new WP_Query('post_type=equipe');
                    while ($equipe->have_posts()) : $equipe->the_post();
                ?>
                <div class="col-lg-4 col-md-12 py-4">
                    <div class="card " data-bs-toggle="modal" data-bs-target="#<?php the_field('name'); ?>">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top equipe')); ?>
                        <div class="card-body equipe">
                            <p><?php the_title(); ?><br>
                                <small><?php the_field('poste'); ?></small>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <?php   endwhile;
                wp_reset_postdata(); 
                ?>
            </div>
        </div>

    </section>
    <!-- Modal -->
    <?php
                    $equipe = new WP_Query('post_type=equipe');
                    while ($equipe->have_posts()) : $equipe->the_post();
                ?>
    <div class="modal fade" id="<?php the_field('name'); ?>" tabindex="-1"
        aria-labelledby="<?php the_field('name'); ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="<?php the_field('name'); ?>Label"><?php the_title(); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php the_field('description_modal'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php   endwhile;
                wp_reset_postdata(); 
                ?>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

?>

<?php 
get_footer(); // Affiche footer.php 
?>