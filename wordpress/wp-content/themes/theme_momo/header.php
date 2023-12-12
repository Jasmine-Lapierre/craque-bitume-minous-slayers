<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // Affiche le nom du blog ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
    </title>
    <?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

    <?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body <?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>>

    <header>
        <!-- Bannière popup -->
        <div class="popup" id="banniere">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p class="text">Travail complété dans le cadre du cours Projet Web</p>

                    </div>
                    <div class="col-5">
                        <a href="https://craquebitume.org/"><button class="button">Accéder au vrai site de
                                Craque-Bitume</button></a>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php bloginfo('template_url'); ?>"><img
                        src="<?php bloginfo('template_url'); ?>/medias/extras/craquebitume.png" alt=""></a>

                <!-- Hamburger button -->
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation -->
                <div id="mainNav" class="collapse navbar-collapse">
                    <ul class="navbar-nav">

                        <?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu([
				'theme_location'=> 'main-menu',
				'menu_class'    => 'navbar-nav',
				'list_item_class'  => 'nav-item',
				'link_item_class'     => 'nav-link',
			  ]);
		?>
                        <li class="nav-item">
                            <a href="pages/dons.html" class="nav-link btnDonate">Donnez!</a>
                        </li>
                    </ul>
                </div>
            </div>


        </nav>
    </header>

    <main>
        <!-- Débute le contenu principal de notre site -->