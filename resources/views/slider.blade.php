@if($slide->count())
			<!-- START Zegen Home 2 REVOLUTION SLIDER 6.6.5 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="Zegen-Home-2" data-source="gallery" style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_2_1" style="" data-version="6.6.5">
					<rs-slides style="overflow: hidden; position: absolute;">
					@php
						$i=1;
					@endphp
					@foreach($slide as $data)
						<rs-slide style="position: absolute;" data-key="rs-{{$i}}" data-title="Web Show" data-thumb="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" data-anim="adpr:true;f:random;" data-in="o:0;r:ran(-45|45);sx:0;sy:0;row:5;col:5;" data-out="a:true;">
							<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="<?php echo $data->titre; ?>" title="z2-slider-{{$i}}" width="1920" height="1080" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" data-parallax="5" data-no-retina>
<!--
							--><h1
								id="slider-2-slide-{{$i}}-layer-2" 
								class="rs-layer Concept-Title"
								data-type="text"
								data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
								data-rsp_ch="on"
								data-xy="x:c;y:m;yo:7px,0,-10px,-48px;"
								data-text="w:normal,nowrap,nowrap,normal;s:75,50,45,28;l:82,55,50,30;fw:800,700,700,700;a:center;"
								data-dim="w:1098px,845px,736px,478px;h:92px,auto,auto,35px;"
								data-padding="b:10;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:105%;o:1;rY:45deg;rZ:90deg;" 
								data-frame_1="st:2110;sp:1200;sR:2110;"
								data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" 
								data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:3790;"
								data-frame_999_reverse="x:true;"
								style="z-index:10;font-family:'Open Sans';"
							><?php echo $data->titre; ?>
							</h1>
							<rs-layer
								id="slider-2-slide-{{$i}}-layer-14" 
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:c;xo:0,0,0,7px;y:m,t,t,t;yo:91px,312px,271px,218px;"
								data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;"
								data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:2680;sp:1360;sR:2680;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:4960;"
								style="z-index:9;font-family:'Open Sans';"
							><?php echo $data->description; ?>
							</rs-layer><!--

							-->
							@if($data->url)
							<a
								id="slider-2-slide-{{$i}}-layer-19" 
								class="rs-layer rev-btn"
								href="{{$data->url}}" target="_self"
								data-type="button"
								data-rsp_ch="on"
								data-xy="x:c;xo:0,0,0,5px;yo:526px,404px,361px,323px;"
								data-text="w:normal;s:18,14,14,12;l:50,41,36,32;fw:700;"
								data-dim="minh:0px,none,none,none;"
								data-padding="t:0,0,10,10;r:40,40,25,25;b:0,0,10,10;l:40,40,25,25;"
								data-border="bor:6px,6px,6px,6px;"
								data-frame_0="y:100%;"
								data-frame_1="e:power4.inOut;st:3790;sp:1200;"
								data-frame_999="o:0;st:w;sR:3460;"
								data-frame_hover="bgc:#000;bor:6px,6px,6px,6px;sp:100;e:power1.inOut;bri:120%;"
								style="z-index:12;font-family:'Poppins';"
							>Voir plus 
							</a>@endif<!--
-->						</rs-slide>
@php
	$i++;
@endphp
@endforeach
	 
					</rs-slides>
					<rs-static-layers><!--
					--></rs-static-layers>
				</rs-module>
				<script>
					
				</script>
<script>
		if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
			@endif