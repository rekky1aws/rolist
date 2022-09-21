 <?php 
	$DIR = ".."; // Must take to root.
	require $DIR."/components/head.php";
?>
	<link rel="stylesheet" type="text/css" href="/dist/style/about.css">
	<!-- <script type="text/javascript" src="script/XXXX.js" defer></script>-->
	<script type="text/javascript" src="/src/script/konami-code.js" defer></script>
	<title>Rollist - About Us</title>
<?php
	require $DIR."/components/header.php";
?>

<!-- Page Content -->
	<div class="container">
		<section>
			<h2>Présentation</h2>
			<p>Une équipe de deux amis développeurs qui se lancent le projet de faire une application Web permettant de suivre et d'organiser leurs parties de Jeu de Rôles sur table. </p>
		</section>

		<section>
			<h2>Equipe</h2>
			<p>L'équipe est composé de Donatien "rekkylaws" Hochart et de Loïc "lolocontact" Petitprez. Nous touchons tous les deux un peu a à tous les aspect de la création de ce site web, du code pur et dur des fonctionnalités, aux aspects estéthiques. </p>
			<article>
				<h3>Donatien "rekkylaws" Hochart</h3>
				<ul>
					<li><span> GitHub : </span><a href="https://github.com/rekky1aws/">rekky1aws</a></li>
				</ul>
			</article>
			<article>
				<h3>Loic "lolocontact" Petitprez</h3>
				<ul>
					<li><span> GitHub : </span><a href="https://github.com/lolocontact/">lolocontact</a></li>
				</ul>
			</article>
		</section>
	</div>

	Pour l'instant le design est immonde, ne nous en tenez pas rigueur, cela va changer par la suite.

<?php
	require $DIR."/components/footer.php";
?>