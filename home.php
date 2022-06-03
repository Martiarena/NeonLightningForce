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
				<?php include("includes/header.php"); ?>
				<section>
					<div id="contenedor">
						<div class="contenido">
							<div class="personajes"></div>
							<?php if ($cod_idioma==1){?><a class="trailer-e fancybox-media" rel="mediagallery" href="https://youtu.be/nHBa5KBhNx4"></a><?php }else{ ?><a class="trailer fancybox-media" rel="mediagallery" href="https://youtu.be/nHBa5KBhNx4"></a><?php } ?>
							<?php if ($cod_idioma==1){?><a class="btn-download fancybox" href="#inline1"></a><?php }else{ ?><a class="btn-descargar fancybox" href="#inline1"></a><?php } ?>
							<div class="cl"></div>
						</div>
					</div>
				</section>
				<?php $menu = "index"; include("includes/footer.php"); ?>
			</div>
		</div>
	</div>
</body>
</html>
