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
				<?php
		get_template_part( 'partials/heros' ); 
		get_template_part( 'partials/description' ); ?>
	<!-- <section class="hero-generique--section">
            <div class="hero-generique--background">
                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/intro-craque_1500x.webp" alt="">
            </div>
            

            <h1 class="hero-generique--titre">
                <span class="formation--titre">NOS VOLETS</span>
            </h1>
        </section>

        <section>
        <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf2 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">
            <div class="container description-generale">

                <h2>courte description sur les Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                    tempor metus nec arcu malesuada pharetra. Pellentesque hendrerit dapibus elit euismod hendrerit.
                    Maecenas ut rhoncus arcu?
                </h2>

            </div>
        </section> -->

        <section class="volets">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-6 pt-5 mt-5">

            <div class="container">
                <div class="row">
					<?php
                    	$volets = new WP_Query(array('post_type' => 'volet'));
                    	while ($volets->have_posts()) : $volets->the_post();
                	?>
                    <div class="col-lg-4 col-md-4 col-12 py-5">
                        <a href="<?php echo get_permalink($the_post); ?>" class="card-hub">
                            <div class="card">
                                <?php the_post_thumbnail('large', array('class' => 'card-img-top')); ?>
                                <div class="card-body">
                                    <p><?php the_field('volet_titre'); ?>
                                		<br> <small> <?php the_field('description_courte'); ?></small>
                            		</p>
                                </div>
                            </div>
                        </a>
                    </div>
					<?php endwhile; wp_reset_postdata(); ?>
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