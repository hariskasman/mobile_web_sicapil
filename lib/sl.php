<div id="ap-smart-layerslider-mod_91" class="slider-pro style4 ">
<div class="sp-slides row-fluid" >  

		<?php
		$resb = $link->query("SELECT * FROM slide WHERE sort='home'");
		while ($rowb = $resb->fetch_assoc()):
		?>
		
		<div class="sp-slide" style="width:150px;height:150px;">				  
			 <img class="sp-image" src="<?php echo $rowb ['pic']; ?>" alt=""/>		 
							<!-- Description (layers) -->
			<div class="ap-layer">
				<div class="sp-layer"
					data-position="topLeft"
					data-width="60%"
					data-horizontal="200"
					data-vertical="200"
					data-show-transition="left"
					data-show-duration="1000"
					data-show-delay="2400">
					<h1 style="font-size:620%;font-weight:200;color:#<?php echo $rowb ['name_color']; ?>;text-shadow:2px 4px 10px #222;"><b><?php echo $rowb ['name']; ?></b></h1>
				</div>
				<div class="sp-layer"
					data-position="bottomLeft"
					data-width="45%"
					data-horizontal="205"
					data-vertical="300"
					data-show-transition="right"
					data-show-duration="1300"
					data-show-delay="2800">
					<p style="font-size:32px;line-height:1.8;color:#<?php echo $rowb ['des_color']; ?>;text-shadow:1px 2px 5px #222;">
					<b><?php echo $rowb ['des']; ?></b>
					</p>
				</div>
				
			</div>
		</div>
					 
	<?php 
	endwhile;
	?>				 
		
					
	</div>
</div>		