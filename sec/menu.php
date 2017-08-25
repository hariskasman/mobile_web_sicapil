<div class="container">
			<div class="row">
				<div id="sp-logo" class="col-xs-8 col-sm-3 col-md-3">
					<div class="sp-column logobckg" ><a class="logo" href="../in/index.php"><h1>
						<img class="sp-default-logo hidden-xs" src="<?php echo $rs ['logo'] ?>" alt="<?php echo $rs ['sis_name'] ?>">
						<img class="sp-retina-logo hidden-xs" src="<?php echo $rs ['logo'] ?>" alt="<?php echo $rs ['logo'] ?>" >
						<img class="sp-default-logo visible-xs" src="<?php echo $rs ['logo'] ?>" alt="<?php echo $rs ['logo'] ?>"></h1></a>
					</div>
				</div>
				
				<div id="sp-menu" class="col-xs-4 col-sm-9 col-md-9">
					<div class="sp-column flex">			
						<div class='sp-megamenu-wrapper'>
								<a id="offcanvas-toggler" class="visible-xs visible-sm" href="#"><i class="fa fa-bars"></i></a>
								<ul class="sp-megamenu-parent menu-fade-down-fade-up hidden-xs hidden-sm" >
									<li class="sp-menu-item current-item" ><a href="index.php" style="color:#<?php echo $rs ['font_menu'] ?>"><b>Home</b></a></li>
									
									<?php
									$resa = $link->query("SELECT * FROM page WHERE stat='on'");
									while ($rowa = $resa->fetch_assoc()):
									?>
									
									<li class="sp-menu-item <?php echo $rowa ['down'] ?>" ><a style="color:#<?php echo $rs ['font_menu'] ?>" href="p.php?u=<?php echo $rowa['name'] ?>" ><b><?php echo $rowa ['name'] ?></b></a>
										<div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
											<div class="sp-dropdown-inner" style="background-color:#<?php echo $rs ['theme'] ?>">
												<ul class="sp-dropdown-items" >
													
													<?php
													$hal = $rowa ['name'];
													$resb = $link->query("SELECT * FROM page WHERE ul='$hal'");
													while ($rowb = $resb->fetch_assoc()):
													?>
													
													<li class="sp-menu-item" style="background-image: url(<?php echo $rs ['menu_atas'] ?>);"><a  style="color:#<?php echo $rs ['font_menu'] ?>" href="p.php?u=<?php echo $rowb['name'] ?>" ><?php echo $rowb ['name'] ?></a></li>
													
													<?php 
													endwhile;
													?>	
													
												</ul>
											</div>
										</div>
									</li>
										
									<?php 
									endwhile;
									?>	
										
								</ul>			
						</div>
					</div>
				</div>
			</div>
		</div>