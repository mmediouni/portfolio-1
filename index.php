<?php
require('contact.php');
if(!empty($_POST)){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['message'];

	$errores=array();
	if(empty($name)){
		$errores['name'] = 'Entrez un pseudo';
	}
	if(empty($email)){
		$errores['email'] = 'Entrez un e-mail';
	}
	if(empty($comment)){
		$errores['message'] = 'Entrez un message';
	}
	if(count($errores)==0){

		addComment($name,$email,$comment);
		$succes= 'Votre formulaire a bien était envoyer !!';
		unset($name);
		unset($email);
		unset($comment);
	
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Potfolio</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<aside>
		<img src="image/PhotoSonia3.jpg">
		<h1>RACHI Sonia</h1>
		<nav>

			<a href="#home"><i class="fas fa-home"></i>à propos</a>
			<a href="#about"><i class="fas fa-user-alt"></i></i>compétences</a>
			<a href="#contact"><i class="far fa-envelope"></i>contact</a>
		</nav>
	</aside>
	<div class="clear"></div>
	<!--
		
	-->
	<main>
		<section id="home">
			<h1>Développeuse-Intégratrice Web Junior</h1>

		</section>
		<section id="about">
			<h2><span>à</span> propos de moi</h2>
			<p class='maPersonne'>Bonjour ,Moi c'est Sonia Rachi , j'ai 25 ans et je suis développeuse web junior
				.Bienvenue chez << moi>>!
			</p>
			<p class='maPersonne'>Ma réussite professionnelle étant mon objectif ,je souhaite acquérir de l'expérience
				dans divers domaines tels que le développement web.Je suis capable de travailler
				en autonomie dan sun environnement dynamique et exigeant .L'informatique a toujours
				été une passion et je souhaite en faire mon métier .Une forte motivation et des capacités
				d'analyse de méthode et de rigueur m'aideront à forger mon avenir afin de devenir une
				bonne développeuse.</p>
		</section>
		<section id="competence">
			<h2>Compétences</h2>
			<p><span>Javascipt</span></p>
			<div class='container'>
				<p class="competence js">60%</p>
			</div>
			<p><span>PHP</span></p>
			<div class='container'>
				<p class="competence php">70%</p>
			</div>
			<p><span>HTML5</span></p>
			<div class='container'>
				<p class="competence html">95%</p>
			</div>
			<p><span>CSS3</span></p>
			<div class='container'>
				<p class="competence css">95%</p>
			</div>
			<p><span>JQUERY</span></p>
			<div class='container'>
				<p class="competence jquery">60%</p>
			</div>
			<p><span>Bootstrap</span></p>
			<div class='container'>
				<p class="competence bootstrap">80%</p>
			</div>
		</section>
		<!--<section id='folio'>
			<h2>Projets</h2>
			<a href="https://github.com/rachuSonia/3wa-restaurant/">projet</a>
		</section>-->
		<section id='contact'>
			<h2>Contact</h2>
			<form method='POST'>
				<div>
					<label for="name">Name :</label>
					<input type="text" name="name" id="name" value='<?php if(isset($name)) echo $name; ?>'>
					<?php if(!empty($errores['name'])):?>
										<div class='erreur'>
											<?= $errores['name']; ?>
										</div>
						<?php endif; ?>
				</div>
				<div>
					<label for="couriel">e-mail :</label>
					<input type="email" name="email" id='couriel' value='<?php if(isset($email)) echo $email; ?>'>
					<?php if(!empty($errores['email'])):?>
										<div class='erreur'>
											<?= $errores['email']; ?>
										</div>
						<?php endif; ?>
				</div>
				<div>
					<label for="message">message :</label>
					<textarea id="message" name="message" rows="10" cols="70"><?php if(isset($comment)) echo $comment; ?></textarea>
					<?php if(!empty($errores['message'])):?>
										<div class='erreur'>
											<?= $errores['message']; ?>
										</div>
						<?php endif; ?>
				</div>
				<?php
					if(isset($succes) && count($errores)==0) : ?>
						 <p class="erreur"><?= $succes ?></p>
			
				<?php endif; ?>
				<div>
					<button type="submit">Message</button>
				</div>
			</form>
		</section>
	</main>
	<footer>
		<ul>
			<li><i class="fas fa-map-marker-alt"></i>  1rue de l'Oise 95300 Pontoise , France</li>
			<li><i class="fas fa-phone"></i> 06 46 80 73 35 </li>
			<li><i class="fas fa-envelope-open-text"></i> sonia.RACHU@hotmail.com</li>
			<li><a href="https://www.linkedin.com/in/sonia-rachi-a629a117a/"><i class="fab fa-linkedin"></i> profil linkedin</a></li>
		</ul>
	</footer>
</body>
</html>