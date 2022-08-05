<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.php"); ?>
</head>
<body>
	<div class="responsive-back">
		<div class="clouds">
			<div class="luna">
				<div class="body-website">
					<div id="contenedor">
						<header>
							<div class="logo">
								<div class="languaje-icons">
									<a href="index.php"><img class="flag" src="img/spain-beat-em-up-openbor-indie-game.png" alt="Idioma en Espa&ntilde;ol"></a> <a href="index.php?cod_idioma=1"><img class="flag" src="img/english-beat-em-up-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</div>
						</header>
					</div>
					<div id="contenedor">
						<div class="text-container border-text-interior">
							<div class="story">
                                <?php if ($cod_idioma==1){?>
								<img src="img/story-beat-em-up-openbor-indie-game.gif" />
								<p>The year is 2044. After the events of World War III, the United States and European Union are no more, so utterly devastated they were by the nuclear fallout. The power vacuum in Northern America gave rise to the "Pacific Union", with Neopolis as it's capital in South America.</p>
								<p>While the world is still at peace, the Neopolis police still fights the crimes in it's city, even as they are getting more violent by the day.</p>
								<p>They send a special agent, Isolde Shinwara, to investigate those cases finding traces of Drako, a drug that makes a person stronger and aggressive. As follows the case, she will find it leads to a much more dangerous, and corrupt, path that was originally thought...</p>
                                <?php }else{ ?>
                                <img src="img/historia-beat-em-up-openbor-indie-game.gif" />
								<p>A&ntilde;o 2044, Tras la Tercera guerra mundial los pa&iacute;ses del norte han quedado devastados por su potente arsenal nuclear. Estados Unidos y la Uni&oacute;n Europea no existen m&aacute;s cediendo ante una nueva potencia La Uni&oacute;n del Pac&iacute;fico y su capital Ne&oacute;polis en Sudam&eacute;rica.</p>
								<p>Ante la aparente paz mundial, la polic&iacute;a de Ne&oacute;polis se ocupa de combatir la delincuencia de sus calles, que por causas desconocidas se hace cada d&iacute;a m&aacute;s violenta.</p>
								<p>Isolda Shinawara es una agente especial que investiga este caso hallando al Drako una droga que hace a los criminales m&aacute;s h&aacute;biles, fuertes y agresivos, lo que no imagina es que seguir la pista de este caso la conducir&aacute; a un sendero mucho m&aacute;s peligroso y corrupto de lo que parece...</p>
                                <?php } ?>
							</div>
						</div>
						<?php $menu = "story"; include("includes/menu.php"); ?>
						<?php include("includes/footer.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
