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
            <h1> </h1>
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
                                        <h1>La nature et l'écocitoyenneté vous interpellent?</h1>
                                        <p>Craque-bitume, un collectif d'écologie urbaine, pourrait bien être l'écho à
                                            votre appel!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <h1 class="imgtext">Notre produit en vedette</h1>
                                        <img src="<?php bloginfo('template_url'); ?>\medias\accueil\AmenagementComestible_720x.webp"
                                            alt="produit-en-vedette">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1>ABC de l'aménagement comestible</h1>
                                        <p>Voir les détails</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <img src="<?php bloginfo('template_url'); ?>\medias\extras\Donate_0cd00f03-4f26-4a71-b4a0-a829377b4855_375x.webp"
                                            alt="donner">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1>Faites un don!</h1>
                                        <p>Votre support est apprécié!</p>
                                    </div>
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

            <h1>NOS VOLETS</h1>
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 py-3">
                        <a href="pages/volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 py-3">
                        <a href="pages/volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-6 col-md-12 py-3">
                        <a href="pages/volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>

                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-6 col-md-12 py-3">
                        <a href="pages/volets.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>

                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>


        </section>


        <!-- Formations -->
        <section class="formation">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1>FORMATIONS RÉCENTES</h1>

            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 py-3">
                        <a href="pages/formations.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-3">
                        <a href="pages/formations.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-3">
                        <a href="pages/formations.html" class="card-hub">
                            <div class="card">
                                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/pexels-photo-121629_535x.webp" class="card-img-top">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <br> <small> Lorem ipsum dolor sit amet, consectetur adipiscing elit</small>
                                    </p>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 pe-5 voirPlus">
                        <a href="pages/hub_formations.html">Voir plus ></a>
                    </div>
                </div>
            </div>

        </section>


        <!-- Temoignage -->
        <section class="temoignage">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf2 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1>TÉMOIGNAGES</h1>
            <div class="swiper mx-md-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <img src="<?php bloginfo('template_url'); ?>/medias/accueil/temoignage_1.jpeg"
                                            alt="Rebecca Guillaume, membre de l'organisme">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1>"Un bon fond de retraite investie"</h1>
                                        <p>wow c'est vrmnt le fun ça, j'ai bien investie mes fonds de retraite</p>
                                        <p>- Rebecca Guillaume, contributrice depuis 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <img src="<?php bloginfo('template_url'); ?>\medias\accueil\temoignage_2.jpeg"
                                            alt="Christine Hebert, membre de l'organisme">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1>"On voit vraiment l'impact de nos dons"</h1>
                                        <p>Craque-Bitume est très transparent dans l'utilisation de leurs dons! Je sais
                                            toujours
                                            où va
                                            mon argent!</p>
                                        <p>- Christine Hebert, contributrice depuis 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="swiper-image">
                                        <img src="<?php bloginfo('template_url'); ?>\medias\accueil\temoignage_3.jpeg"
                                            alt="Jérémy Bouilleux, membre de l'organisme">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="text">
                                        <h1>"Ici c'est comme ma famille"</h1>
                                        <p>Je me sens respecté et apprécié, je suis heureux d'investir mon temps et mon
                                            argent
                                            dans cet
                                            organisme!</p>
                                        <p>- Jérémy Bouilleux, contributeur depuis 2017</p>
                                    </div>
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


        <!-- Dons -->
        <section class="don">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <h1>FAITES UN DON!</h1>
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
                                    <label for="prenom">Prénom</label><br>
                                    <input type="text" id="prenom" class="container-fluid py-2 mt-2" placeholder="John">
                                </div>
                                <div class="form-group py-3">
                                    <label for="nom">Nom</label><br>
                                    <input type="text" id="nom" class="container-fluid py-2 mt-2" placeholder="Doe">
                                </div>
                                <div class="form-group py-3">
                                    <label for="email">Adresse courriel</label>
                                    <input type="email" id="email" class="container-fluid py-2 mt-2"
                                        placeholder="email@exemple.com">
                                </div>
                                <div class="form-group py-3 pb-5">
                                    <label for="number">Montant</label><br>

                                    <input type="number" id="number" value="0" class="container-fluid py-2 mt-2" min="0"
                                        step="1">
                                </div>
                                <button type="submit" class="py-2 mt-2 btn">Soumettre</button>
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