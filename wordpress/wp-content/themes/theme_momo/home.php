<?php 
/**
 * 	Template Name: Home
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<article>
    <section class="hero">
            <img src="<?php bloginfo('template_url'); ?>/medias/extras/leaf.png"
                class="leaf1 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">
            <!-- Slider main container -->
            <div class="swiper swiper-main mx-md-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <img src="<?php bloginfo('template_url'); ?>\medias\accueil\intro-craque_1500x.webp"
                                            alt="intro-craque_1500x">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1><?php the_field('swiper_1_titre'); ?></h1>
                                        <p><?php the_field('swiper_1_desc'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
								<?php
                    				$formations = new WP_Query(array('post_type' => 'formation', 'posts_per_page' => 1));
                    				while ($formations->have_posts()) : $formations->the_post();
                				?>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <a href="<?php echo get_permalink($the_post); ?>">
										<?php the_post_thumbnail('large', array('alt' => 'produit-en-vedette')); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                    <a href="<?php echo get_permalink($the_post); ?>">
                                        <h2 class="imgtext"><?php the_field('produit_vedette'); ?></h2>
                                        <h1><?php the_field('formation_titre'); ?></h1>
                                        <p><?php the_field('voir_plus'); ?></p>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php   endwhile;
                wp_reset_postdata(); 
                ?>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
										<a href="<?php echo esc_url( home_url( '/#donateJump' ) ); // Lien vers la page d'accueil ?>">
                                        <img src="<?php bloginfo('template_url'); ?>\medias\extras\Donate_0cd00f03-4f26-4a71-b4a0-a829377b4855_375x.webp"
                                            alt="donner">
											</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
									<a href="<?php echo esc_url( home_url( '/#donateJump' ) ); // Lien vers la page d'accueil ?>">
                                    <div class="text">
                                        <h1><?php the_field('swiper_3_titre'); ?></h1>
                                        <p><?php the_field('swiper_3_desc'); ?></p>
                                    </div>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>


        <!-- Volets -->
        <section class="voletsAcc">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf2 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1><?php the_field('volets_titre'); ?></h1>
            <div class="container-xl container-fluid">
                <div class="row">
                <?php
                    $volets = new WP_Query(array('post_type' => 'volet', 'posts_per_page' => 3));
                    while ($volets->have_posts()) : $volets->the_post();
                ?>
                    <div class="col-lg-4 col-md-12 py-3">
                        <a href="<?php echo the_permalink($the_post) ?>" class="card-hub">
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
				<?php   endwhile;
                wp_reset_postdata(); 
                ?>


                </div>
            </div>


        </section>


        <!-- Formations -->
        <section class="formation">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1><?php the_field('formations_recentes'); ?></h1>

            <div class="container-xl container-fluid">
                <div class="row">
                <?php
                    $formations = new WP_Query(array('post_type' => 'formation', 'posts_per_page' => 3));
                    while ($formations->have_posts()) : $formations->the_post();
                ?>
                    <div class="col-lg-4 col-md-12 py-3">
                        <a href="<?php echo the_permalink($the_post) ?>" class="card-hub">
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
				<?php   endwhile;
                wp_reset_postdata(); 
                ?>
                    <div class="col-12 pe-5 voirPlus">
                        <a href="<?php echo esc_url( home_url( '/index.php/hub-de-formations/' ) ); ?>"><?php the_field('voir_plus'); ?></a>
                    </div>
                </div>
            </div>

        </section>


        <!-- Temoignage -->
        <section class="temoignage">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf2 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1><?php the_field('temoignage_titre'); ?></h1>
            <div class="swiper mx-md-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
					<?php
                    	$temoignages = new WP_Query(array('post_type' => 'temoignage', 'posts_per_page' => 3));
                    	while ($temoignages->have_posts()) : $temoignages->the_post();
                	?>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <?php the_post_thumbnail('large') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1>"<?php the_field('temoignage') ?>"</h1>
                                        <p>- <?php the_title() ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php   endwhile;
                wp_reset_postdata(); 
                ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>


        <!-- Dons -->
        <section class="don" id="donateJump">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1><?php the_field('swiper_3_titre'); ?></h1>
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 order-lg-first order-last">
                        <div class="don-anim">
                            <img src="<?php bloginfo('template_url'); ?>/medias/accueil/jar.svg" alt="jar" class="jar">
                            <img src="<?php bloginfo('template_url'); ?>\medias\404\single_leaf.svg" alt="leaf" class="leaf-jar">
                            <svg class="leafJar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.534 980.863">
                                <path id="pathJar" data-name="Path 2"
                                    d="M17.27,.14S-43.04,199.65,238.57,306.37c37.5,14.21,62.82,49.99,63.14,90.09,1.19,150.96-231,366.56-301.44,412.69"
                                    transform="translate(-181.235 -57.541)" fill="none" stroke="none"
                                    stroke-width="1" />
                            </svg>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="formulaire">
                            <form>
                                <div class="form-group py-3">
                                    <label for="prenom"><?php the_field('prenom') ?></label><br>
                                    <input type="text" id="prenom" class="container-fluid py-2 mt-2" placeholder="John">
                                </div>
                                <div class="form-group py-3">
                                    <label for="nom"><?php the_field('nom') ?></label><br>
                                    <input type="text" id="nom" class="container-fluid py-2 mt-2" placeholder="Doe">
                                </div>
                                <div class="form-group py-3">
                                    <label for="email"><?php the_field('adresse_courriel') ?></label>
                                    <input type="email" id="email" class="container-fluid py-2 mt-2"
                                        placeholder="email@exemple.com">
                                </div>
                                <div class="form-group py-3 pb-5">
                                    <label for="number"><?php the_field('montant') ?></label><br>

                                    <input type="number" id="number" value="0" class="container-fluid py-2 mt-2" min="0"
                                        step="1">
                                </div>
                                <button type="submit" class="py-2 mt-2 btn"><?php the_field('soumettre') ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </article>
        
<?php endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>

<?php 

get_footer(); // Affiche footer.php 
?>