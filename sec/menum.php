<div class="sp-module _menu" >
	<div class="sp-module-content" >
		<ul class="nav menu" >
			<li class="item-101 current"><a style="color:#<?php echo $rs ['mobile_font'] ?>" href="index.php" >Home</a></li>
			
			
									<?php
									$resa = $link->query("SELECT * FROM page WHERE stat='on'");
									while ($rowa = $resa->fetch_assoc()):
									?>
									
									<li class="item-150" ><a style="color:#<?php echo $rs ['mobile_font'] ?>" href="p.php?u=<?php echo $rowa['name'] ?>" ><?php echo $rowa ['name'] ?></a>
										<ul class="nav-child unstyled small">
													
													<?php
													$hal = $rowa ['name'];
													$resb = $link->query("SELECT * FROM page WHERE ul='$hal'");
													while ($rowb = $resb->fetch_assoc()):
													?>
													
													<li class="item-151"><a style="color:#<?php echo $rs ['mobile_font'] ?>" href="p.php?u=<?php echo $rowb['name'] ?>" ><?php echo $rowb ['name'] ?></a></li>
													
													<?php 
													endwhile;
													?>	
													
										</ul>
									</li>
										
									<?php 
									endwhile;
									?>	
			
		</ul>
	</div>
</div>