<?php 
/**
 * 	Template Name: FAQ
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
	<section class="FAQ-section">
            <h1 class="pt-5 mt-5">
                <?php the_field('titre_faq') ?>
            </h1>

            <div class="accordion container pb-5 mb-5" id="accordionExample">
				<?php
									$index = 1;
                    				$FAQ = new WP_Query(array('post_type' => 'question'));
									
                    				while ($FAQ->have_posts()) : $FAQ->the_post();
                				?>
				                <div class="accordion-item">
                    <h2 class="accordion-header" id="question<?php echo $index; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>"
                            aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                        <?php the_field('question'); ?>
						
						</button>
                    </h2>
                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="question<?php echo $index; ?>"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <dl>
                                <dt> <?php the_field('reponse_titre'); ?></dt>
                                <dd> <?php the_field('reponse'); ?>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
				<?php $index++  ;
	            endwhile;
                wp_reset_postdata(); 
                ?>
  
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