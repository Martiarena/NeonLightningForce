<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.php"); ?>
</head>
<body>
	<div id="inline1" style="display: none; text-align:center;">
		<div class="clouds" style="width:340px;">
			<?php if ($cod_idioma==1){?>
			<h4 class="version">Choose version</h4>
			<a href="http://adf.ly/3029188/nlf-game" class="button-download" target="_blank">Original (PC)</a><br>
			<a href="http://q.gs/3029188/nlf-game-mobile" class="button-download" target="_blank">.Pak file (Android)</a>
			<?php }else{ ?>
			<h4 class="version">Elija la versi&oacute;n</h4>
			<a href="http://adf.ly/3029188/nlf-juego" class="button-download" target="_blank">Original (PC)</a><br>
			<a href="http://q.gs/3029188/nlf-juego-mobil" class="button-download" target="_blank">Archivo .Pak (Android)</a>
			<?php } ?>
		</div>
	</div>
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
						<div class="contenido">
							<div class="personajes">
								<nav class="desktop-menu"><?php $menu = "index"; include("includes/news.php"); ?></nav>
							</div>
							<div class="medios-descarga">
								<div class="trailer-box">
									<?php if ($cod_idioma==1){?><a class="trailer-e fancybox-media" rel="mediagallery" href="https://youtu.be/nHBa5KBhNx4"></a><?php }else{ ?><a class="trailer fancybox-media" rel="mediagallery" href="https://youtu.be/nHBa5KBhNx4"></a><?php } ?>
								</div>
								<?php if ($cod_idioma==1){?><a class="btn-download fancybox" href="#inline1"></a><?php }else{ ?><a class="btn-descargar fancybox" href="#inline1"></a><?php } ?>
								<nav class="mobile-menu"><?php $menu = "index"; include("includes/news.php"); ?></nav>
							</div>
						</div>
						<?php $menu = "index"; include("includes/menu.php"); ?>
						<?php include("includes/footer.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
