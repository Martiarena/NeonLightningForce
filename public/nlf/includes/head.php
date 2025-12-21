<?php 
if (isset($_REQUEST['cod_idioma'])) {
	$cod_idioma = $_REQUEST['cod_idioma'];
} else {
	$cod_idioma ="";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<title>Neon Lightning Force | Beat'em up arcade</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="author" content="TrueRoleDreams" />
<meta name="description" lang="es" content="A&ntilde;o 2044, Tras la Tercera guerra mundial los pa&iacute;ses del norte han quedado devastados por su potente arsenal nuclear. Estados Unidos y la Uni&oacute;n Europea no existen m&aacute;s cediendo ante una nueva potencia La Uni&oacute;n del Pac&iacute;fico y su capital Ne&oacute;polis en Sudam&eacute;rica." />
<meta name="description" lang="en" content="The year is 2044. after the events of World War III, the United States and European Union are no more, so utterly devastated they were by the nuclear fallout. the power vacuum in northern America gave rise to the 'Pacific Union', with Neopolis as it's capital in South America." />
<meta name="keywords" content="Rpg maker comunidad, rpg maker 2003, rpg maker XP, rpg maker MV, rpg maker VX, true role dreams, OpenBor, Beat em up" />
<meta property="og:image" content="http://trueroledreams.org/games/nlf/img/face1-beat-em-up-openbor-indie-game.jpg" />
<meta property="og:image:alt" content="http://trueroledreams.org/games/nlf/img/face2-beat-em-up-openbor-indie-game.jpg" />
<meta name="DC.title" content="Neon Lightning Force | Beat'em up arcade" />
<meta name="DC.description" lang="es" content="A&ntilde;o 2044, Tras la Tercera guerra mundial los pa&iacute;ses del norte han quedado devastados por su potente arsenal nuclear. Estados Unidos y la Uni&oacute;n Europea no existen m&aacute;s cediendo ante una nueva potencia La Uni&oacute;n del Pac&iacute;fico y su capital Ne&oacute;polis en Sudam&eacute;rica." />
<meta name="DC.description" lang="en" content="The year is 2044. after the events of World War III, the United States and European Union are no more, so utterly devastated they were by the nuclear fallout. the power vacuum in northern America gave rise to the 'Pacific Union', with Neopolis as it's capital in South America." />
<meta name="geo.region" content="PE-LIM" />
<meta property="og:image" content="http://trueroledreams.org/games/nlf/img/face1-beat-em-up-openbor-indie-game.jpg" />
<meta property="og:image:alt" content="http://trueroledreams.org/games/nlf/img/face2-beat-em-up-openbor-indie-game.jpg" />

<meta property="og:title" content="Neon Lightning Force | Beat'em up arcade" />
<meta property="og:type" content="Videogame" />
<meta property="og:description" lang="es" content="A&ntilde;o 2044, Tras la Tercera guerra mundial los pa&iacute;ses del norte han quedado devastados por su potente arsenal nuclear. Estados Unidos y la Uni&oacute;n Europea no existen m&aacute;s cediendo ante una nueva potencia La Uni&oacute;n del Pac&iacute;fico y su capital Ne&oacute;polis en Sudam&eacute;rica." />
<meta property="og:url" content="http://trueroledreams.org/games/nlf/" />
<meta property="og:image" content="http://trueroledreams.org/games/nlf/img/face1-beat-em-up-openbor-indie-game.jpg" />
<meta property="og:image:alt" content="http://trueroledreams.org/games/nlf/img/face2-beat-em-up-openbor-indie-game.jpg" />
<!-- <meta property="og:description" lang="en" content="The year is 2044. after the events of World War III, the United States and European Union are no more, so utterly devastated they were by the nuclear fallout. the power vacuum in northern America gave rise to the 'Pacific Union', with Neopolis as it's capital in South America." /> -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<script src="resources/fancybox/lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="resources/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="resources/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
	});
</script>
<script type="text/javascript" src="resources/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox-media').attr('rel', 'media-gallery').fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			closeBtn   : false,
			padding : 0,
        
			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});
	});
</script>
<script type="text/javascript">
	$(function(){
		
		var pull		= $('#mmovil');
			menu		= $('.menu-principal ul');
			menuHeight	= menu.height();
			
		$(pull).on('click',function(e){
			e.preventDefault();
			menu.slideToggle();			
		});
		
		$(window).resize(function(){
			var w = $(window).width();
			if(w>768 && menu.is(':hidden')){
				menu.removeAttr('style');	
			}
		});
		
	});
</script>
<style type="text/css">
.fancybox-type-iframe.fancybox-opened .fancybox-skin, .fancybox-type-inline.fancybox-opened .fancybox-skin, .fancybox-type-image.fancybox-opened .fancybox-skin{
	border-style: solid;
	border-width: 8px;
	-moz-border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
	-webkit-border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
    -o-border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
    border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
}
</style>
