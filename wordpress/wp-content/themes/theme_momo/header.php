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

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>

	<nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="../index.html"><img src="../sources/medias/extras/craquebitume.png"
                        alt=""></a>

                <!-- Hamburger button -->
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation -->
                <div id="mainNav" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index.html" class="nav-link ">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="hub_volets.html" class="nav-link ">Volets</a>
                        </li>
                        <li class="nav-item">
                            <a href="hub_formations.html" class="nav-link ">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a href="equipe.html" class="nav-link ">Équipe</a>
                        </li>
                        <li class="nav-item">
                            <a href="a_propos.html" class="nav-link active">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="FAQ.html" class="nav-link ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="dons.html" class="nav-link btnDonate">Donnez!</a>
                        </li>

                    </ul>
                </div>
            </div>

		<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu([
				'theme_location'=> 'main-menu',
				'menu_class'    => 'navbar-nav',
				'list_item_class'  => 'nav-item',
				'link_item_class'     => 'nav-link',
			  ]);
		?>
	</nav>
</header>

<main><!-- Débute le contenu principal de notre site -->
