<nav>
	<div id="contenedor">
		<?php if($menu == "home" ){ ?><div class="responsive-hidden"><?php } ?>
		<h3 class="titulo-novedad"><?php if ($cod_idioma==1){?>News<?php }else{ ?>Novedades<?php } ?></h3>
		<div class="novedades">
			<div class="scrollbar" id="style-2">
				<ul><?php if ($cod_idioma==1){?>
					<li><strong>Feb 9, 2020</strong><br />
					Fixed color errors on palettes and improved music quality!</li>
					<li><strong>August 24, 2017</strong><br />
					Neon Lightning Force's Android version ready to download!</li>
					<li><strong>June 25, 2017</strong><br />
					Neon Lightning Force's official English version ready to download!</li>
					<li><strong>October 29, 2016</strong><br />
					Updated Gallery section with new images and videos.</li>
					<li><strong>June 7, 2016</strong><br />
					Added Vixor and Atlas profiles to the Characters section.</li>
					<li><strong>June 25, 2016</strong><br />
					Neon Lightning Force Download avalaible! Tips section finished.</li>
					<li><strong>June 21, 2016</strong><br />
					Oficial release date of the game: June 25, 2016.</li>
					<li><strong>June 18, 2016</strong><br />
					Oficial website released! Check out the lastest news of the proyect.</li>
                	<?php }else{ ?>
                	<li><strong>9 de Febrero del 2020</strong><br />
					&iexcl;Corregidos errores de color en las paletas y se mejor&oacute; la calidad de la m&uacute;sica!</li>
                	<li><strong>24 de Agosto del 2017</strong><br />
					&iexcl;Versi&oacute;n para Android de Neon Lightning Force lista para descargar!</li>
					<li><strong>25 de Junio del 2017</strong><br />
					&iexcl;Versi&oacute;n en ingl&eacute;s de Neon Lightning Force lista para descargar!</li>
					<li><strong>29 de Octubre del 2016</strong><br />
					Actualizada secci&oacute;n Galer&iacute;a con nuevas im&aacute;genes y videos</li>
					<li><strong>7 de julio del 2016</strong><br />
					A&ntilde;adidos perfiles de Vixor y Atlas a la secci&oacute;n Personajes.</li>
					<li><strong>25 de junio del 2016</strong><br />
					&iexcl;Descarga de Neon Lightning Force disponible! Secci&oacute;n de Tips terminada.</li>
					<li><strong>21 de junio del 2016</strong><br />
					Fecha de salida oficial del juego: 25 de junio del 2016.</li>
					<li><strong>18 de junio de 2016</strong><br />
					&iexcl;Estreno del sitio web oficial! Con las &uacute;ltimas novedades del proyecto.</li>
                    <?php } ?>
				</ul>
			</div>
		</div>
		<?php if($menu == "home" ){ ?></div><?php } ?>
		<div class="respo-menu-fixed">
			<div <?php if($menu == "home" ){ ?>class="menu-principal border-text text-box responsive-hidden"<?php }else{ ?>class="menu-principal border-text text-box"<?php } ?>>
				<?php if($menu == "home" ){ ?>
					<div class="text-arcade text-center">
						<p>Click en las banderas para seleccionar un idioma</p>
					</div>
				<?php }else{ ?>			
				<ul>
					<li <?php if($menu == "index" ){echo 'class="selected"';} ?>><a href="home.php?cod_idioma=<?php echo $cod_idioma; ?>"><?php if ($cod_idioma==1){?>Home<?php }else{ ?>Inicio<?php } ?></a></li>
					<li <?php if($menu == "story" ){echo 'class="selected"';} ?>><a href="story.php?cod_idioma=<?php echo $cod_idioma; ?>"><?php if ($cod_idioma==1){?>Story<?php }else{ ?>Historia<?php } ?></a></li>
					<li <?php if($menu == "characters" ){echo 'class="selected"';} ?>><a href="characters.php?cod_idioma=<?php echo $cod_idioma; ?>"><?php if ($cod_idioma==1){?>Characters<?php }else{ ?>Personajes<?php } ?></a></li>
					<li <?php if($menu == "gallery" ){echo 'class="selected"';} ?>><a href="gallery.php?cod_idioma=<?php echo $cod_idioma; ?>"><?php if ($cod_idioma==1){?>Gallery<?php }else{ ?>Galer&iacute;a<?php } ?></a></li>
					<li <?php if($menu == "tips" ){echo 'class="selected"';} ?>><a href="tips.php?cod_idioma=<?php echo $cod_idioma; ?>">Tips</a></li>
				</ul>
				<a href="#" id="mmovil"><?php if ($cod_idioma==1){?>Menu<?php }else{ ?>Men&uacute;<?php } ?></a>
				<div class="cl"></div>
				<?php } ?>
			</div>
			<p class="respo-firma">&copy; <a href="http://www.trueroledreams.org/">True Role Dreams</a> 2016. <?php if ($cod_idioma==1){?>Some rights reserved x.x.<?php }else{ ?>Algunos derechos reservados x.x.<?php } ?></p>
			<div class="cl"></div>
		</div>

	</div>
</nav>
<footer>
	<p class="firma">&copy; <a href="http://www.trueroledreams.org/">True Role Dreams</a> 2016. <?php if ($cod_idioma==1){?>Some rights reserved x.x.<?php }else{ ?>Algunos derechos reservados x.x.<?php } ?> | <?php if ($cod_idioma==1){?><a class="fancybox" href="img/credits-beat-em-up-openbor-indie-game.jpg">Credits & resources</a><?php }else{ ?><a class="fancybox" href="img/creditos-e-beat-em-up-openbor-indie-game.jpg">Cr&eacute;ditos y recursos</a><?php } ?></p>
</footer>
<script type="application/javascript" src="https://a.exdynsrv.com/video-slider.js"></script>
<script type="application/javascript">
var adConfig = {
    "idzone": 4127194,
    "frequency_period": 60,
    "close_after": 0,
    "sound_enabled": 0,
    "on_complete": "hide",
    "branding_enabled": 1,
    "screen_density": 20
};
ExoVideoSlider.init(adConfig);
</script>