<?php 
/**
 * 	Template Name: News Hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
				<?php
		get_template_part( 'partials/heros' ); ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>
<!-- <section class="hero-generique--section">
            <div class="hero-generique--background">
                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/intro-craque_1500x.webp" alt="">
            </div>

            <h1 class="hero-generique--titre">
                <span class="formation--titre">NOS FORMATIONS</span>
            </h1>
        </section> -->

        <section class="formations">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-3 col-sm-4 col-5 pt-5 mt-5 pt-sm-4 mt-sm-5">

    <div class="container-xl container-fluid">
        <div class="col-12 trier">
            <div class="dropdown">
                <a><select name="filter" class="dateFilter">
								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                    <option value="desc"><?php the_field('recent_text'); ?></option>
                    <option value="asc"><?php the_field('old_text'); ?></option>
							<?php endwhile; wp_reset_postdata(); ?>
                </select></a>
            </div>
        </div>
        <div class="row formation-row">
            <?php
                $args = array('post_type' => 'formation', 'posts_per_page' => 6, 'orderBy' => 'date', 'order' => 'DESC');                                    
                $formations = new WP_Query($args);
                while ($formations->have_posts()) : $formations->the_post();
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 py-3 formation-card">
                <a href="<?php echo get_permalink($the_post); ?>">
                    <div class="card">
                        <?php the_post_thumbnail('large', array('class' => 'card-img-top')); ?>
                        <div class="card-body">
                            <p><?php the_field('formation_titre'); ?>
                                <br> <small> <?php the_field('date'); ?></small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="col-12 pe-5 voirPlus">
								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                <button id="voirPlus"><?php the_field('voir_plus'); ?></button>
							<?php endwhile; wp_reset_postdata(); ?>
            </div>
    </div>


        </section>

<?php 
get_footer(); // Affiche footer.php 
?>