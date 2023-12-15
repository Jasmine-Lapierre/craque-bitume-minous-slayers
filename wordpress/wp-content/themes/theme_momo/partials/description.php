 <section>
        <img src="<?php bloginfo('template_url'); ?>\medias\extras\leaf.png"
            class="leaf3 col-xl-2 col-lg-3 pt-lg-0 col-md-4 mt-md-5 col-sm-4 col-6 pt-5 mt-5 pt-sm-4 mt-sm-5">

            <div class="container description-generale py-5 my-5 py-xl-0 my-xl-0">

                <h2><?php
					if( the_field('description_generale') ){
						the_field('description_generale');
					} else{
							 				 the_content(); 

					}
					
					
             ?>   </h2>

            </div>
        </section>
