<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

    <!-- Footer -->
    <footer class="footer">
        <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf2 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <a class="footer--logo" href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>">
                        <img src="<?php bloginfo('template_url'); ?>/medias/extras/craquebitume2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 order-lg-1 pt-5">
								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                    <h2><b><?php the_field('partenaires_text'); ?></b></h2>
							<?php endwhile; wp_reset_postdata(); ?>
                    <div class="container">
                        <div class="row">
								<?php
                    				$partenaires = new WP_Query(array('post_type' => 'partenaire'));
                    				while ($partenaires->have_posts()) : $partenaires->the_post();
                				?>
                            <div class="col-md-6 col-3 footer--logo--partenaire p-2">
                                <a href="<?php echo the_field('url_company'); ?>"><?php the_post_thumbnail('small', array('class' => 'partner-icon')) ?></a>
                            </div>
							<?php endwhile; wp_reset_postdata(); ?>
                        </div>

                    </div>
                </div>
								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                <div class="col-lg-2 order-lg-2 col-md-12 col-sm-6 pb-sm-5 py-md-0 order-first">
                    <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" target="_blank" class="nav-link btnDonate"><?php the_field('don'); ?></a>
                </div>
                <div class="col-lg-5 col-md-6 order-lg-3 py-5">
                    <h2><b><?php the_field('contacter_text'); ?></b></h2>
                    <div class="row">
                        <div class="col-12 py-2">
                            <img src="<?php bloginfo('template_url'); ?>/medias/extras/telephonne.svg" alt="" style="height: 40px;">
                            <p style="display: inline; width: 95%; padding-left: 20px;">418-523-4580</p><br>

                        </div>
                        <div class="col-12 py-2">
                            <img src="<?php bloginfo('template_url'); ?>/medias/extras/mail.svg" alt="" style="height: 35px;">
                            <p style="display: inline; width: 95%; padding-left: 20px;">craque-bitume@gmail.com</p><br>
                        </div>
                        <div class="col-12 py-2">
                            <img src="<?php bloginfo('template_url'); ?>/medias/extras/location.svg" alt="" style="height: 40px;">

                            <a
                                href="https://www.google.com/maps?q=Carrefour+Cardijn+435+rue+Du+Roi,+G1K+2X1&client=firefox-b-d&sca_esv=577675572&sxsrf=AM9HkKkrSkLzRtHY02JImwrbLA0KimU_JA:1698623484537&uact=5&gs_lp=Egxnd3Mtd2l6LXNlcnAiKUNhcnJlZm91ciBDYXJkaWpuIDQzNSBydWUgRHUgUm9pLCBHMUsgMlgxMgUQABiiBDIFEAAYogQyBRAAGKIEMgUQABiiBEjgIlCAHFjcH3ACeACQAQCYAZwBoAHOA6oBAzEuM7gBA8gBAPgBAcICCBAAGKIEGLAD4gMEGAEgQYgGAZAGAw&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjxqqnPuZyCAxUqHTQIHRaLCtcQ_AUoAXoECAQQAw">

                                <p style="display: inline; width: 95%; padding-left: 20px;">Carrefour Cardijn 435 rue Du Roi, bureaux 6 et 8, G1K 2X1</p>
                            </a>
                        </div>
                        <div class="col-6 py-2 socials" width="50%">
                            <a href="https://www.facebook.com/craquebitume"><img src="<?php bloginfo('template_url'); ?>/medias/extras/facebook.svg" alt="" height="50px;"></a>
                            <a href="https://www.instagram.com/craque.bitume/"><img src="<?php bloginfo('template_url'); ?>/medias/extras/instagram.svg" alt="" height="55px;"></a>
                            <a href="https://www.youtube.com/channel/UCslOkrRcaN3gJofnJpr8kbQ/videos"><img src="<?php bloginfo('template_url'); ?>/medias/extras/youtube.svg" alt="" height="60px;"></a>
                        </div>
                    </div>
                </div>
                <div class="row order-lg-last">
                    <div class="col-12">
                        <small>
                            <p>© 2023, Craque-Bitume, Minous-slayers | <a
                                    href="https://github.com/Jasmine-Lapierre/craque-bitume-minous-slayers/"><?php the_field('github') ?></a></p>

                        </small>
							<?php endwhile; wp_reset_postdata(); ?>
                    </div>

                </div>

            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
    <script src="script/script.js"></script>


<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
