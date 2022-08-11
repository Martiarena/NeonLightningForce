<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.php"); ?>
</head>
<body>
	<div class="responsive-back">
		<div class="clouds">
			<div class="luna">
				<div class="body-website interior-pagina">
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
							<div class="text-back">
								<div class="titular"><img style="margin-top:-4px;" src=<?php if ($cod_idioma==1){ ?>"img/gallery-beat-em-up-openbor-indie-game.gif"<?php }else{ ?>"img/galeria-beat-em-up-openbor-indie-game.gif"<?php } ?> /></div>
								<ul class="lista-galeria">
									<li><a class="fancybox" href="img/img1-beat-em-up-openbor-indie-game.png"><img src="img/img1-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img2-beat-em-up-openbor-indie-game.png"><img src="img/img2-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img3-beat-em-up-openbor-indie-game.png"><img src="img/img3-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img4-beat-em-up-openbor-indie-game.png"><img src="img/img4-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img5-beat-em-up-openbor-indie-game.png"><img src="img/img5-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img6-beat-em-up-openbor-indie-game.png"><img src="img/img6-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img7-beat-em-up-openbor-indie-game.png"><img src="img/img7-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img8-beat-em-up-openbor-indie-game.png"><img src="img/img8-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img9-beat-em-up-openbor-indie-game.png"><img src="img/img9-beat-em-up-openbor-indie-game.png" /></a></li>
									<li><a class="fancybox" href="img/img10-beat-em-up-openbor-indie-game.png"><img src="img/img10-beat-em-up-openbor-indie-game.png" /></a></li>
									<li class="hide-mobile">&nbsp;</li>
									<li><a class="fancybox-media" href="https://youtu.be/pwkfc-5_ul0"><img src="img/video1-beat-em-up-openbor-indie-game.jpg" /></a></li>
									<li><a class="fancybox-media" href="https://youtu.be/l48Gpar9ejw"><img src="img/video2-beat-em-up-openbor-indie-game.jpg" /></a></li>
									<li><a class="fancybox-media" href="https://youtu.be/9bqU-_Lpf40"><img src="img/video3-beat-em-up-openbor-indie-game.jpg" /></a></li>
									<li><a class="fancybox-media" href="https://youtu.be/5PKbDj6Qo-s"><img src="img/video4-beat-em-up-openbor-indie-game.jpg" /></a></li>
								</ul>
							</div>
						</div>
						<div class="cl"></div>
						<?php $menu = "gallery"; include("includes/menu.php"); ?>
						<?php include("includes/footer.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>