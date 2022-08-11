<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.php"); ?>
</head>
<body>
	<div class="responsive-back">
		<div class="clouds">
			<div class="luna">
				<div class="body-website interior-pagina tips">
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
								<div class="titular"><img src="img/tips-beat-em-up-openbor-indie-game.gif" /></div>
								<ul class="tips">
									<?php if ($cod_idioma==1){?>
									<li>You begin with 5 lives and 3 credits. Make free use of the evasion buttons, particularly in the end stages.</li>
									<li>Use patience when fighting bosses. Be mindful of your life bar.</li>
									<li>Steven can perform techniques and combos using melee weapons.</li>
									<li>The stages are linear, but it doesn’t hurt to explore.</li>
									<li>Be mindful of bullets and mines. They can do a lot of damage.</li>
									<li>You gain extra lives as you increase your score.</li>
									<?php }else{ ?>
									<li>Inicias con solo 3 cr&eacute;ditos y 5 vidas, cu&iacute;dalos usando los botones de evasi&oacute;n, te har&aacute;n falta cerca del final.</li>
									<li>Ten paciencia al combatir un jefe, cuida tu barra de vida.</li>
									<li>Steven es el &uacute;nico personaje que puede realizar t&eacute;cnicas y combos con las armas.</li>
									<li>Los niveles son lineales pero te aconsejamos explorar(?) y golpear algunas cosas.</li>
									<li>Cu&iacute;date de las balas y minas, quitan harta vida.</li>
									<li>Recibir&aacute;s vidas extra por acumular puntos.</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<?php $menu = "tips"; include("includes/menu.php"); ?>
						<?php include("includes/footer.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
