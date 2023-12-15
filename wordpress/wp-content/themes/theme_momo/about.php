<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php
		get_template_part( 'partials/heros' ); 
		get_template_part( 'partials/description' ); ?>
<!--	<section class="hero-generique--section">
            <div class="hero-generique--background">
                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/intro-craque_1500x.webp" alt="">
            </div>
            
            <h1 class="hero-generique--titre">
                <span class="formation--titre">À PROPOS DE CRAQUE-BITUME</span>
            </h1>
        </section>

        <section>
        <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <div class="container description-generale py-5 my-5 py-xl-0 my-xl-0">

                <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h2>

            </div>
        </section> -->
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>

<?php 
get_footer(); // Affiche footer.php 
?>