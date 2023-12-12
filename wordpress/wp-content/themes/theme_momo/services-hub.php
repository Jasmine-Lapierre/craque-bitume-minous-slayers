<?php 
/**
 * 	Template Name: Services Hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
	<section class="hero-generique--section">
            <div class="hero-generique--background">
                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/intro-craque_1500x.webp" alt="">
            </div>

            <h1 class="hero-generique--titre">
                <span class="formation--titre">NOS VOLETS</span>
            </h1>
        </section>

        <section>
            <div class="container description-generale">

                <h2>courte description sur les Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                    tempor metus nec arcu malesuada pharetra. Pellentesque hendrerit dapibus elit euismod hendrerit.
                    Maecenas ut rhoncus arcu?
                </h2>

            </div>
        </section>

        <section class="volets">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-6 pt-5 mt-5">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 py-5">
                        <a href="volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 py-5">
                        <a href="volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 py-5">

                        <a href="volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 py-5">

                        <a href="volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </section>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>

<?php 
get_footer(); // Affiche footer.php 
?>