<nav>
	<div class="menus-nlf">
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
		</div>
	</div>
</nav>