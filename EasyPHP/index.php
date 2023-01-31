<!DOCTYPE html>
<html lang="fr">
<?php
	//var_dump($_GET) ;
	//if(isset($_GET['css'])) var_dump($_GET['css']) ;
	/*
	if(isset($_GET['css'])) {
		$style=$_GET['css'] ;
	} else {
		$style='styles' ;
	}
	*/
	$style=(isset($_GET['css'])?$_GET['css']:'styles') ;

	$html='
	<head>
		<meta charset="utf-8">      
		<title>Colloque GEII</title>
		<link rel="stylesheet" type="text/css" href="'.$style.'.css">
	</head>' ;
	echo $html ;
	$html='
	<body>
		<div id="menu">
			<h1>Menu</h1>
			<h2>Accueil</h2>
			<h2>Consultation</h2>
			<ul>
				<li>Les commissions</li>
				<li>Les IUT représentés</li>
				<li>Les exposants partenaires</li>
				<li>Les participants</li>
				<li>Les hôtels</li>
			</ul>
			<h2>Inscription</h2>
			<h2>Les autres colloques</h2>
			<ul>';
	for($i=2010 ; $i<=2022 ; $i++) {
		if($i<>2011 AND $i<>2014) {
			$html.= '
				<li><a href="https://colloquegeii.iut.fr/colloque_'.$i.'">'.$i.'</a></li>' ;
		}
	}
	$html.='
			</ul>
		</div>
		<div id="main">
			<h1>Bienvenue à bord !</h1>

			<p>Le Colloque National Pédagogique des départements de Génie Electrique et Informatique Industrielle est le rendez-vous annuel 
			des 52&nbsp;départements GEII des <a href="http://www.iut-fr.net/">IUT de France</a>.</p>
			<p>C’est l’occasion pour l’ensemble de la communauté GEII à la fois d’échanger sur les programmes, pratiques pédagogiques, techniques 
			et de rencontrer de nombreux exposants venus présenter leurs nouveautés en matière de supports et d’équipements didactiques et industriels. 
			Ce sont au total environ 200&nbsp;personnes qui se rencontrent sur 3&nbsp;jours.</p>
			<p>La continuité de son organisation, sans interruption depuis sa création, témoigne de la force, de la cohérence et de la solidarité du 
			réseau national des départements GEII. Elle prouve également le dynamisme d’une communauté qui, à l’écoute des évolutions techniques et 
			sociétales depuis quatre décennies, joue un rôle moteur dans la transmission du savoir dans le domaine des nouvelles technologies, 
			en perpétuelle évolution.</p>
			<p>Itinérant par tradition, le colloque GEII allie travail et convivialité chaleureuse, chaque année dans une région et une ville d’accueil 
			différentes. Pour cette 39<sup>ème</sup> édition, qui se déroulera les 6, 7 et 8&nbsp;juin prochain, c’est l’équipe du département GEII de l’IUT de Haguenau, 
			composante de l’université de Strasbourg, qui signe son organisation et y apporte sa touche personnelle. Derrière cette équipe, c’est l’ensemble 
			du personnel de l’<a href="http://iuthaguenau.unistra.fr/">IUT de Haguenau</a> ainsi que ses partenaires et notamment la 
			<a href="http://www.ville-haguenau.fr/">ville Haguenau</a> qui mettent tout en œuvre pour s’inscrire dignement 
			dans la droite lignée de ses excellents prédécesseurs et vous souhaitent un excellent Colloque GEII 2012 !</p>
			<p>Vincent Frick</p>
			<p>Chef du département GEII</p>
			<p>Vice-président de l’ACD GEII</p>
			<p>Président de l’organisation du colloque GEII 2012</p>
		</div>
		<div>
			<p>Apparence du site : <a href="?css=styles">Style 1</a> ; <a href="?css=styles2">Style 2</a></p>
		</div>
	</body>';
	echo $html ;
?> 
</html>









