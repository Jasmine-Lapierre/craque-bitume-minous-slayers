<?php 
/**
 * 	Template Name: Formations
 *  Template Post Type: formation, Formation, Formations, post, page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>
   <main class="section-formation">
        <article itemscope itemtype="https://schema.org/Article">

            <section class="hero-generique--section">
                <div class="hero-generique--background">
				<?php the_post_thumbnail(); ?>
                </div>

                <h1 class="hero-generique--titre">
                    <div class="container">
                        <div class="row">
                            <div class="">
							<img class="iconePetit" src="<?php bloginfo('template_url'); ?>/medias/detailformation/cooking.png" alt="">         <small itemprop="articleSection" class="categorie"><?php the_field('categorie'); ?>	</small>		<img class="iconePetit" src="<?php bloginfo('template_url'); ?>/medias/detailformation/<?php the_field('icone'); ?>.png" alt="">  
<br>
                                <h1 itemprop="name" class="formation--titre p-0"><?php the_field('formation_titre'); ?> -
                                    <span itemprop="datePublished"><?php the_field('date'); ?></span></h1>
                            </div>
                        </div>
                    </div>
                </h1>
            </section>

            <section>
                <div itemprop="description" class="container description-generale">

                    <h2><?php the_field('description_generale'); ?>
                    </h2>

                </div>
            </section>
            <div itemprop="articleBody">
                <section>
                    <img src="../sources\medias\extras\leaf.png"
                    class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">        
                    <div class="formation--grid container">
                        <div class="row">
                            <div class="col-12 mb-4 mt-5 pt-5 m-lg-0 p-lg-0 col-lg-6 order-lg-last">
                                <div class="wrap">
                                    <img itemprop="image"
                                        src="../sources/medias/detailformation/developpement-durable_375x.webp" alt="">
                                    <div class="imgdescription">
                                        <p>Types de sols propices à la plantations</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-5 pb-5 mb-lg-0 pb-lg-0 col-lg-6">

                                <div>
                                <?php the_field('formation_contenu1'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="deuxieme">
                    <img src="../sources\medias\extras\leaf.png"
                    class="leaf2 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">        
                    <div class="formation--grid container">
                        <div class="row">
                            <div class="col-12 mb-4 mt-5 pt-5 m-lg-0 p-lg-0 col-lg-6">
                                <div class="wrap">
                                    <img itemprop="image" src="../sources/medias/detailformation/legumineuses_375x.webp"
                                        alt="">
                                    <div class="imgdescription">
                                        <p>Types de sols propices à la plantations</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-5 pb-5 mb-lg-0 pb-lg-0 col-lg-6">

                                <div>
                                <?php the_field('formation_contenu2'); ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <section>
                <img src="../sources\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">        
                <div class="container">
                    <div class="row">
                        <h1 class="continue pb-4">CONTINUEZ VOTRE LECTURE</h1>

                        <div class="col-md-6 col-12 py-2">
                            <a href="formations.html">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp"
                                                class="card-img-fluid">
                                        </div>
                                        <div class="col-7">
                                            <div class="card-body card-body-side card-body-side-prev">
                                                <h3><strong>Description <br>
                                                        <small>
                                                            < Précédent</small></strong></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-12 py-2">
                            <a href="formations.html">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="card-body card-body-side">
                                                <h3><strong>Description <br>
                                                        <small>Prochain ></small></strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp"
                                                class="card-img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        </article>
    </main>
<?php 
get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>