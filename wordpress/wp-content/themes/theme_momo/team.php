<?php 
/**
 * 	Template Name: Team
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article class="section-equipe">
	<section class="hero-generique--section">
            <div class="hero-generique--background">
                <img src="<?php bloginfo('template_url'); ?>/medias/accueil/intro-craque_1500x.webp" alt="">
            </div>

            <h1 class="hero-generique--titre">
                <span class="formation--titre">L'ÉQUIPE DE CRAQUE-BITUME</span>
            </h1>
        </section>

        <section>
            <div class="container description-generale">

                <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </h2>

            </div>
        </section>
        <section class="equipe">
            <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
                class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">


            <div class="container-xl container-fluid">
                <div class="row">

                    <div class="col-lg-4 col-md-12 py-4">
                        <div class="card " data-bs-toggle="modal" data-bs-target="#felix">
                            <img src="<?php bloginfo('template_url'); ?>/medias/equipe/Antoine_720x.webp" class="card-img-top equipe">
                            <div class="card-body equipe">
                                <p>Felix Testa Radovanovic <br>
                                    <small>Poste</small></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-4">
                        <div class="card " data-bs-toggle="modal" data-bs-target="#jasmine">
                            <img src="<?php bloginfo('template_url'); ?>/medias/equipe/IMG_5504_1_f2b1d769-ac80-4081-9c3f-d54aa910874e_720x.webp" class="card-img-top equipe">
                            <div class="card-body equipe">
                                <p>
                                    Jasmine Lapierre <br> <small>Poste</small>
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-4">
                        <div class="card " data-bs-toggle="modal" data-bs-target="#felix">
                            <img src="<?php bloginfo('template_url'); ?>/medias/equipe/Antoine_720x.webp" class="card-img-top equipe">
                            <div class="card-body equipe">
                                <p>Felix Testa Radovanovic <br>
                                    <small>Poste</small></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-4">
                        <div class="card " data-bs-toggle="modal" data-bs-target="#jasmine">
                            <img src="<?php bloginfo('template_url'); ?>/medias/equipe/IMG_5504_1_f2b1d769-ac80-4081-9c3f-d54aa910874e_720x.webp" class="card-img-top equipe">
                            <div class="card-body equipe">
                                <p>
                                    Jasmine Lapierre <br> <small>Poste</small>
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-4">
                        <div class="card " data-bs-toggle="modal" data-bs-target="#felix">
                            <img src="<?php bloginfo('template_url'); ?>/medias/equipe/Antoine_720x.webp" class="card-img-top equipe">
                            <div class="card-body equipe">
                                <p>Felix Testa Radovanovic <br>
                                    <small>Poste</small></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 py-4">
                        <div class="card " data-bs-toggle="modal" data-bs-target="#jasmine">
                            <img src="<?php bloginfo('template_url'); ?>/medias/equipe/IMG_5504_1_f2b1d769-ac80-4081-9c3f-d54aa910874e_720x.webp" class="card-img-top equipe">
                            <div class="card-body equipe">
                                <p>
                                    Jasmine Lapierre <br> <small>Poste</small>
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>


                </div>
            </div>

        </section>
        <!-- Modal -->
        <div class="modal fade" id="felix" tabindex="-1" aria-labelledby="felixLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="felixLabel">Felix Testa Radovanovic</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Felix Testa Radovanovic est un étudiant en TIM. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Ut eget ante eget dui volutpat placerat eu nec dolor. Etiam at vulputate
                        tortor. Nulla cursus lacus a ex semper porttitor. Donec vitae finibus turpis. Nunc blandit
                        placerat suscipit. Integer tincidunt pulvinar viverra. Vivamus a tellus id felis sollicitudin
                        venenatis vel id urna. Sed pellentesque, lectus imperdiet placerat condimentum, enim dolor
                        elementum diam, at tempor eros tortor eget mi. Aliquam egestas luctus lacus efficitur
                        pellentesque. Sed facilisis, felis eu vulputate iaculis, odio quam vehicula ligula, vel
                        ultricies odio justo a ligula.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="jasmine" tabindex="-1" aria-labelledby="jasmineLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="jasmineLabel">Jasmine Lapierre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Jasmine Lapierre est une étudiante en TIM. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Ut eget ante eget dui volutpat placerat eu nec dolor. Etiam at vulputate tortor. Nulla
                        cursus lacus a ex semper porttitor. Donec vitae finibus turpis. Nunc blandit placerat suscipit.
                        Integer tincidunt pulvinar viverra. Vivamus a tellus id felis sollicitudin venenatis vel id
                        urna. Sed pellentesque, lectus imperdiet placerat condimentum, enim dolor elementum diam, at
                        tempor eros tortor eget mi. Aliquam egestas luctus lacus efficitur pellentesque. Sed facilisis,
                        felis eu vulputate iaculis, odio quam vehicula ligula, vel ultricies odio justo a ligula.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

?>

<?php 
get_footer(); // Affiche footer.php 
?>