<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.php"); ?>
</head>
<body>
	<div class="responsive-back">
		<div class="clouds">
			<div class="luna">
				<?php include("includes/header.php"); ?>
				<section>
					<div id="contenedor">
						<div class="contenido">
							<div class="personajes black responsive-hidden"></div>
							<div class="text-arcade text-languaje text-center">
								<p>Idioma / Languaje</p>
	                        	<div class="box-lang" style="border-right: 2px solid #FFF; padding-right: 3%; margin-right: 3%;">
	                        		<a href="home.php?cod_idioma=0"><img src="img/spain-beat-em-up-openbor-indie-game.png" /></a>
	                       		</div>
	                       		<div class="box-lang">
		                       		<a href="home.php?cod_idioma=1"><img src="img/english-beat-em-up-openbor-indie-game.png" /></a>
	                       		</div>
	                       	</div>
	                        <div class="cl"></div>
						</div>
					</div>
				</section>
				<?php $menu = "home"; include("includes/footer.php"); ?>
			</div>
		</div>
	</div>
</body>
</html>
