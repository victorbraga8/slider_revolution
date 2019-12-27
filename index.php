<!-- EM CASO DE USO DO BOOTSTRAP, FAÇA A CHAMADA VIA CDN OU APONTAMENTO DE SRC DOS ARQUIVOS USADOS, A ESTRUTURA DO TEMA NÃO APRESENTA RELAÇÃO OU VINCULO QUE GERE INCOMPATIBILIDADE  -->

<!-- ARQUIVOS SLIDER REVOLUTION HEADER -->	  
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/theme.css">        
<!--FIM ARQUIVOS SLIDER REVOLUTION HEADER -->

 <!-- ARQUIVOS SLIDER REVOLUTION FOOTER-->	  
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/theme.css">        
 <!--FIM ARQUIVOS SLIDER REVOLUTION FOOTER-->

 <!-- INICIALIZAÇÃO DE DOIS SLIDES DE EXEMPLO COM MARCAÇÃO NAS DIVS PARA ESTILIZAÇÃO DE TEXTO-->
 <div class="slider-container rev_slider_wrapper">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-primary" data-transition="random-premium">
								<img src="images/slides/1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

                                    <h1 id="texto-primario" class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-55','-55','-55','-55']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']"
									data-letterspacing="-1">Texto 2</h1>

								<div id="subtexto-primario" class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:0.8;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-5','-5','-5','15']"
									data-fontsize="['18','18','18','35']"
									data-lineheight="['20','20','20','40']">Sub 2</div>	    
 
							</li>
							<li class="slide-overlay" data-transition="random-premium">
								<img src="images/slides/2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<h1 id="texto-secundario" class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-55','-55','-55','-55']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']"
									data-letterspacing="-1">Texto 2</h1>

								<div id="subtexto-secundario" class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:0.8;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-5','-5','-5','15']"
									data-fontsize="['18','18','18','35']"
									data-lineheight="['20','20','20','40']">Sub 2</div>	    
														
							</li>
						</ul>
					</div>
				</div>
