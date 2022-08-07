<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.php"); ?>
<link rel="stylesheet" type="text/css" href="resources/tabstyleinspiration/css/tabs.css" />
<script src="resources/tabstyleinspiration/js/modernizr.custom.js"></script>
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
							<div class="text-back">
								<div class="titular"><img src=<?php if ($cod_idioma==1){?>"img/characters-beat-em-up-openbor-indie-game.gif"<?php }else{ ?>"img/personajes-beat-em-up-openbor-indie-game.gif"<?php } ?> /></div>
								<div class="tabs tabs-style-bar">
									<div class="text-characters">
										<nav>
											<ul>
												<li><a href="#isoldashinawara" class="charam pisolda"></a></li>
												<li><a href="#stevenwolfgang" class="charam psteven"></a></li>
												<li><a href="#drrodericknegishi" class="charam pnegishi"></a></li>
											</ul>
											<ul class="second-list">
												<li><a href="#melaniashinawara" class="charas pmelania"></a></li>
												<li><a href="#atlasn2" class="charas patlas"></a></li>
												<li><a href="#thundervolt" class="charas pthundervolt"></a></li>
												<li><a href="#mikhailshenkman" class="charas pmikhail"></a></li>
												<li><a href="#neopolispolice" class="charas ppolices"></a></li>
												<li><a href="#vixor" class="charas pvixor"></a></li>
											</ul>
										</nav>
									</div>
									<div class="info-characters">
										<div class="content-wrap border-text">
											<section id="isoldashinawara">
												<div class="isolda-sprite sprite-content">
													<h3 class="name-character name-isolda"><?php if ($cod_idioma==1){?>Isolde Shinawara<?php }else{ ?>Isolda Shinawara<?php } ?></h3>															
													<div class="col-desc">
														<?php if ($cod_idioma==1){?>
														<span><strong>Age:</strong> 25 years old</span>
														<span><strong>Weight:</strong> 141 <u class="minus">lbs</u></span>
														<span><strong>Height:</strong> 5'64</span>
														<span><strong>Job:</strong> Police Detective</span>
														<p>Trained in Muay Thai from when she was a girl. As a Police officer, she brought in many dangerous criminals which earned her the nickname of “Steel Lady”.</p>
														<?php }else{ ?>
														<span><strong>Edad:</strong> 25 a&ntilde;os</span>
														<span><strong>Peso:</strong> 64 kg</span>
														<span><strong>Altura:</strong> 1.72 m</span>
														<span><strong>Ocupaci&oacute;n:</strong> Polic&iacute;a</span>
														<p>Entrenada desde ni&ntilde;a en muay thai, como polic&iacute;a de Ne&oacute;polis detuvo a peligrosos criminales. Apodada por sus colegas como &ldquo;La Dama de Acero&rdquo;</p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="stevenwolfgang">
												<div class="steven-sprite sprite-content">
													<h3 class="name-character name-steven">Steven Wolfgang</h3>
													<div class="col-desc">
														<?php if ($cod_idioma==1){?>
														<span><strong>Age:</strong> 28 years old</span>
														<span><strong>Weight:</strong> 160 <u class="minus">lbs</u></span>
														<span><strong>Height:</strong> 5'57</span>
														<span><strong>Job:</strong> Business Magnate</span>
														<p>Owner and CEO of Antares Corp. Trained in the best Kempo schools in the world. He financed, tested, and now wields a cutting-edge weapon: The Fire Glove.</p>
														<?php }else{ ?>
														<span><strong>Edad:</strong> 28 a&ntilde;os</span>
														<span><strong>Peso:</strong> 73 kg</span>
														<span><strong>Altura:</strong> 1.70 m</span>
														<span><strong>Ocupaci&oacute;n:</strong> Dir. General</span>
														<p>Due&ntilde;o de corp. antares, aficionado al kempo, entren&oacute; en las mejores escuelas del mundo. financia y prueba el prototipo de una rara arma, el guante de fuego.</p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="drrodericknegishi">
												<div class="negishi-sprite sprite-content">
													<h3 class="name-character name-negishi">Dr. Roderick Negishi</h3>
													<div class="col-desc">
														<?php if ($cod_idioma==1){?>
														<span><strong>Age:</strong> 40 years old</span>
														<span><strong>Weight:</strong> 572 <u class="minus">lbs</u></span>
														<span><strong>Height:</strong> 6'72</span>
														<span><strong>Job:</strong> Scientist</span>
														<p>A world renowned biogenetics scientist. Transformed into a new type of Bioroid due to an “accident”, for which he seeks vengeance.</p>
														<?php }else{ ?>
														<span><strong>Edad:</strong> 40 a&ntilde;os</span>
														<span><strong>Peso:</strong> 260 kg</span>
														<span><strong>Altura:</strong> 2.05 m</span>
														<span><strong>Ocupaci&oacute;n:</strong> Cient&iacute;fico</span>
														<p>Autoridad mundial en la biogen&eacute;tica, convertido en un extra&ntilde;o tipo de bioroide debido a un misterioso &ldquo;accidente&rdquo; del que busca venganza.</p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="melaniashinawara">
												<div class="melania-sprite sprite-content">
													<h3 class="name-character name-melania">Melania Shinawara</h3>
													<div class="col-desc secondary">
														<?php if ($cod_idioma==1){?>
														<p><span>Works as a stripper and escort in a high-end nightclub. Isolde’s cousin and roommate.</span></p>
														<?php }else{ ?>
														<p><span>Trabaja como stripper y dama de compa&ntilde;ia en un club norturno. Prima de Isolda con quien comparte apartamento.</span></p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="atlasn2">
												<div class="atlas-sprite sprite-content">
													<h3 class="name-character name-atlas"><?php if ($cod_idioma==1){?>Atlas Proyect<?php }else{ ?>Proyecto Atlas<?php } ?></h3>
													<div class="col-desc secondary">
														<?php if ($cod_idioma==1){?>
														<p><span>Combat droid developed by Talos Corp. Able to act on it’s own free will. Utilizes organic matter as fuel.</span></p>
														<?php }else{ ?>
														<p><span>Droid de combate creado por Corp. Talos. Puede actuar a voluntad, consume materia org&aacute;nica como combustible.</span></p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="thundervolt">
												<div class="thundervolt-sprite sprite-content">
													<h3 class="name-character name-thundervolt">Thundervolt</h3>
													<div class="col-desc secondary">
														<?php if ($cod_idioma==1){?>
														<p><span>Steven’s pet eagle. Always travels by his side, unless he “has work to do”. Extremely intelligent.</span></p>
														<?php }else{ ?>
														<p><span>Mascota de Steven, suele viajar a su lado salvo cuando su amo tiene &ldquo;negocios que atender&rdquo;. Es muy inteligente.</span></p>
														<?php } ?>
													</div>
												</div>
											</section>
											<section id="mikhailshenkman">
												<div class="mikhail-sprite sprite-content">
													<h3 class="name-character name-mikhail">Mikhail Shenkman</h3>
													<div class="col-desc secondary">
														<?php if ($cod_idioma==1){?>
														<p><span>Neopolis’ Chief of Police and Isolde’s boss. Served in the Russian Army in World War III.</span></p>
														<?php }else{ ?>
														<p><span>Comandante de policia en Ne&oacute;polis y jefe de Isolda. Sirvi&oacute; al ej&eacute;rcito de Rusia en la Tercera Guerra Mundial.</span></p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="neopolispolice">
												<div class="police-sprite sprite-content">
													<h3 class="name-character name-police"><?php if ($cod_idioma==1){?>Neopolis's Police<?php }else{ ?>Polic&iacute;a de Ne&oacute;polis<?php } ?></h3>
													<div class="col-desc secondary">
														<?php if ($cod_idioma==1){?>
														<p><span>Becoming complacent due to the present state of world peace, they seem to have stopped training, instead becoming expert donut devourers.</span></p>
														<?php }else{ ?>
														<p><span>Confiados en la actual paz mundial, dejaron de entrenar volvi&eacute;ndose &aacute;vidos devoradores de rosquillas.</span></p>
														<?php } ?>
													</div>
													<div class="cl"></div>
												</div>
											</section>
											<section id="vixorwolfgang">
												<div class="vixor-sprite sprite-content">
													<h3 class="name-character name-vixor">Vixor Wolfgang</h3>
													<div class="col-desc secondary">
														<?php if ($cod_idioma==1){?>
														<p><span>Owner and CEO of Talos Corp. Suspected of ties with Neopolis drug cartels responsible for most of the criminal activity.</span></p>
														<?php }else{ ?>
														<p><span>Due&ntilde;o de Corp. Talos. Sospechoso de estar vinculado a los c&aacute;rteles de Ne&oacute;polis responsables por varios cr&iacute;menes</span></p>
														<?php } ?>
													</div>
												</div>
											</section>
										</div><!-- /content -->
									</div>
								</div>
							</div>
						</div>
						<?php $menu = "characters"; include("includes/menu.php"); ?>
						<?php include("includes/footer.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="resources/tabstyleinspiration/js/cbpFWTabs.js"></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});
		})();
	</script>
</body>
</html>
