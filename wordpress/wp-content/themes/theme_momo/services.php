<?php 
/**
 * 	Template Name: Services
 *  Template Post Type: volet, Volet, Volets, post, page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>

   <main class="section-volet">
        <article>
				<?php
		get_template_part( 'partials/heros' ); 
		get_template_part( 'partials/description' ); ?>
           
            <div>
                <section>
                    <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                    class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">        
                    <div class="volet--grid container">
                        <div class="row">
                            <div class="col-12 mb-4 mt-5 pt-5 m-lg-0 p-lg-0 col-lg-6 order-lg-last">
                                <div class="wrap">
                                    <img src="<?php the_field('image_1') ?>" alt="">
                                </div>
                            </div>

                            <div class="col-12 mb-5 pb-5 mb-lg-0 pb-lg-0 col-lg-6">

                                <div>
                                <?php the_field('volet_contenu1'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="deuxieme">
                    <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                    class="leaf2 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">        
                    <div class="volet--grid container">
                        <div class="row">
                            <div class="col-12 mb-4 mt-5 pt-5 m-lg-0 p-lg-0 col-lg-6">
                                <div class="wrap">
                                    <img src="<?php the_field('image_2') ?>" alt="">
                                </div>
                            </div>

                            <div class="col-12 mb-5 pb-5 mb-lg-0 pb-lg-0 col-lg-6">

                                <div>
                                <?php the_field('volet_contenu2'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				<?php
    $next_post = get_next_post();
    $prev_post = get_previous_post();
     
    if ( $next_post || $prev_post ) : ?>

<section>
    <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
        class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">
    <div class="container">
        <div class="row">
								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
            <h1 class="continue pb-4"><?php the_field('continue_text') ?></h1>
							<?php endwhile; wp_reset_postdata(); ?>

            <?php if ( ! empty( $prev_post ) ) : ?>





            <div class="col-md-6 col-12 py-2">
				<a href="<?php echo get_permalink( $prev_post ); ?>">
                <div class="card">
                    <div class="row">
                        <div class="col-5">

                                <?php echo get_the_post_thumbnail( $prev_post, [ 250, 250 ], array('class' => 'other-page') ); ?>
                        </div>
                        <div class="col-7">
                                <div class="card-body card-body-side card-body-side-prev">
                                    <h3><strong><?php
							echo get_field('volet_titre', $prev_post );?> <br>
                                            								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                                            <small><?php the_field('precedant') ?></small>
							<?php endwhile; wp_reset_postdata(); ?>
</strong></h3>
                                </div>
                        </div>
                    </div>

                </div>
				</a>
            </div> <?php endif; ?>

            <?php if ( ! empty( $next_post ) ) : ?>
            <div class="col-md-6 col-12 py-2">
				<a href="<?php echo get_permalink( $next_post ); ?>">
                <div class="card">
                    <div class="row">
                        <div class="col-7">
                                <div class="card-body card-body-side">
                                    <h3><strong><?php
							echo get_field('volet_titre', $next_post );?> <br>
                                            								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                                            <small><?php the_field('suivant') ?></small>
							<?php endwhile; wp_reset_postdata(); ?>
</strong></h3>
                                </div>
                        </div>
                        <div class="col-5">
                                <?php echo get_the_post_thumbnail( $next_post, [ 250, 250 ], array('class' => 'other-page') ); ?> 
                        </div>
                    </div>
                </div>
				</a>
            </div>


        </div>
    </div>

</section>

<?php endif; ?>
</div>       
			<?php endif; ?>
        </article>
<?php 
get_footer(); // Affiche footer.php 
?>