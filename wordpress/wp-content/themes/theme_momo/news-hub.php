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
 <section class="hero-generique--section">
            <div class="hero-generique--background">
                <img src="../sources/medias/accueil/intro-craque_1500x.webp" alt="">
            </div>

            <h1 class="hero-generique--titre">
                <span class="formation--titre">NOS FORMATIONS</span>
            </h1>
        </section>

        <section class="formations">
            <img src="../sources\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-3 col-sm-4 col-5 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-12 trier">
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Trier les formations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Les plus récentes d'abord</a></li>
                                <li><a class="dropdown-item" href="#">Les plus anciennes d'abord</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                        <a href="formations.html">
                            <div class="card card-1">
                                <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                        <a href="formations.html">
                            <div class="card">
                                <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                        <a href="formations.html">
                            <div class="card">
                                <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                        <a href="formations.html">
                            <div class="card">
                                <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                        <a href="formations.html">
                            <div class="card">
                                <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                        <a href="formations.html">
                            <div class="card">
                                <img src="../sources/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    Description
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 pe-5 voirPlus">
                        <a href="#">Voir plus ></a>
                    </div>


                </div>
            </div>

        </section>

<?php 
get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>