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
                Voici notre Foire aux Questions!
            </h1>

            <div class="accordion container pb-5 mb-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                            Je me suis inscrit·e à une formation mais je ne pourrai finalement pas y assister, que dois-je
                            faire? </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <dl>
                                <dt>Notre politique de remboursement: </dt>
                                <dd>Vous pouvez consulter notre politique de remboursement en défilant la page de la formation
                                    en
                                    question vers le bas. Peu importe la manière dont vous procèderez, nous vous invitons à nous
                                    aviser de votre absence via l'adresse formation@craquebitume.org, nous pourrons ensuite
                                    procéder au remboursement complet ou partiel, si la situation le permet.
                                </dd>
        
        
        
                            </dl>
        
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Je suis formateur·rice et j'aimerais collaborer avec Craque-Bitume pour offrir une formation,
                            comment dois-je m'y prendre?
        
        
        
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <dl>
                                <dt>Comment contacter notre service à la formation: </dt>
                                <dd>Nous sommes friands de nouvelles idées de formations pour plaire à notre clientèle!
                                    Écrivez-nous directement à formation@craquebitume.orgpour proposer votre idée et il nous
                                    fera
                                    plaisir de considérer votre proposition!
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Comment puis-je accéder au rabais de 5$?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <dl>
                                <dt>Comment devenir membre: </dt>
                                <dd>Ce rabais est offert aux membres de Craque-Bitume. Vous pouvez vous procurer votre
                                    adhésion membre sur notre site web, dans la section magasin général. Une fois connecté à
                                    l'espace membre, le 5$ de rabais s'appliquera automatiquement lors de vos prochains achats!
                                    Ce rabais sur nos formations est notre manière de vous remercier de soutenir notre
                                    organisme.
        
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Comment dois-je m'y prendre pour accéder au prix réduit d'une série de formations?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <dl>
                                <dt>Nos partenaires financiers: </dt>
                                <dd>Nous pouvons offrir des prix réduits grâce à notre partenaire financier, le Centre de
                                    formation
                                    pour adultes Louis-Jolliet qui reconnaît certaines de nos formations comme une démarche
                                    d'apprentissage citoyenne. Pour y avoir accès, vous devez vous inscrire comme étudiant·e du
                                    Louis-Jolliet et vous engager à certaines obligations supplémentaires. Pour en connaître
                                    davantage, consultez la section de notre site web dédiée à cet effet en cliquant sur « en
                                    savoir
                                    plus » sur la page de la série de formation en question.
        
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
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