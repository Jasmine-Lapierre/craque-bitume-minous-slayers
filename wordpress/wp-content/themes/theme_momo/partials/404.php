<section class="page404">
            <img src="<?php bloginfo('template_url'); ?>/medias/extras/leaf.png" class="leaf1 col-xl-2 col-lg-3 col-md-4 col-sm-4 pt-sm-4 mt-sm-5">


        <svg id="pathWindsvg" class="motionPath motionPath-wind" data-name="Calque 1"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1298.18 267.81">
            <path id="pathWind" class="cls-1"
                d="m.31,179.44c46.16,15.18,115.93,31.75,200,26.67,144.49-8.74,300.44-56,299.56-129.78-.99-81.79-84.68-96.15-128.89-47.11-48.89,54.22,35.22,143.99,122.67,202.67,126.66,84.99,285.01,32.44,316.44,21.33" />
        </svg>

        <svg id="pathWindsvg2" class="motionPath motionPath-wind2" data-name="Calque 1"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1298.18 267.81">
            <path id="pathWind2" class="cls-1"
                d="m.31,179.44c46.16,15.18,115.93,31.75,200,26.67,144.49-8.74,300.44-56,299.56-129.78-.99-81.79-84.68-96.15-128.89-47.11-48.89,54.22,35.22,143.99,122.67,202.67,126.66,84.99,285.01,32.44,316.44,21.33" />
        </svg>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 order-lg-first col-md-12 order-last">
                        <img src="<?php bloginfo('template_url'); ?>/medias/404/tree.svg" alt="tree" class="tree">
                        <img src="<?php bloginfo('template_url'); ?>/medias/404/single_leaf.svg" alt="leaf" class="leaf-solo">
                        <img src="<?php bloginfo('template_url'); ?>/medias/404/single_leaf.svg" alt="leaf" class="leaf-no2">
                        <img src="<?php bloginfo('template_url'); ?>/medias/404/single_leaf.svg" alt="leaf" class="leaf-no3">

                        <svg id="pathFallsvg" class="motionPath motionPath-fall" data-name="Calque 1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1085.45 376.11">
                        <path class="cls-1" id="pathFall"
                            d="m4.23.85s148.44,93.33,229.33,73.78c0,0-166.22,86.22-229.33,58.67,0,0,125.33,129.78,220.44,95.11,0,0-75.56,98.67-220.44,88.89" />
                    </svg>
            

                    </div>
                    <div class="col-lg-7 col-md-12 pb-3">
                        <h1>
                            								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                                           <?php the_field('error_title') ?>
							<?php endwhile; wp_reset_postdata(); ?>

                        </h1>
                        <h2>                            								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                                           <?php the_field('error_404') ?>
							<?php endwhile; wp_reset_postdata(); ?>
</h2>
                        <h3>                            								<?php
                    				$extras = new WP_Query(array('post_type' => 'extra'));
                    				while ($extras->have_posts()) : $extras->the_post();
                				?>
                                           <?php the_field('error_text') ?>
							<?php endwhile; wp_reset_postdata(); ?>

                        </h3>

                    </div>

                </div>
            </div>

        </section>