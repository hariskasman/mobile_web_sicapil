<?php
include ("../config.php");
include("../lib/sett.php");
include ("../lib/lib1.php");
?>


  
    </head>
<body class="site com-sppagebuilder view-page no-layout no-task itemid-101 en-gb ltr  sticky-header layout-fluid">
	
        <div class="body-innerwrapper">
        <section id="sp-top-bar">
		
		<?php include ("../sec/menutop.php"); ?>
		
		</section><header id="sp-header" class="flex">
		
		<?php include ("../sec/menu.php"); ?>
		
		</header><section id="sp-title">
		<div class="row">
			<div id="sp-title" class="col-sm-12 col-md-12">
				<div class="sp-column "></div>
			</div>
		</div></section>
		
<section id="sp-main-body">
		<div class="row"><div id="sp-component" class="col-sm-12 col-md-12">
		<div class="sp-column ">
		<div id="system-message-container">
	</div>

<div id="sp-page-builder" class="sp-page-builder  page-1">
		
	<div class="page-content">
		<section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-module "><div class="sppb-addon-content"> 

    <!-- Slides -->
     <?php include ("../lib/sl.php"); ?>
           	     


<script type="text/javascript">
;(function($){
	$(document).ready(function() {	
	$('#ap-smart-layerslider-mod_91').sliderPro({
		width: 2340,
		height: 850,
		forceSize:'fullWidth',
		visibleSize:'auto',
		slideDistance: 0,
		responsive:true,
		imageScaleMode:'cover',
		autoScaleLayers:true,
		waitForLayers:false,
	
		orientation:'horizontal',
		loop:true,
	
								fade:true,
		fadeOutPreviousSlide:false,
		fadeDuration:700,
				autoplay:true,
		autoplayDelay:5000,
		autoplayOnHover:'pause',
				reachVideoAction:'playVideo',
		leaveVideoAction:'stopVideo',
		playVideoAction:'none',
		pauseVideoAction:'none',
		endVideoAction:'replayVideo',
				
		arrows:true,
		buttons:true,
		autoHeight: true 	});
	$("#ap-smart-layerslider-mod_91 .ap-layer").not(".sp-layer").contents().filter(function(){return this.nodeType == 3;}).remove();
	$("#ap-smart-layerslider-mod_91 .ap-layer").children().not(".sp-layer").remove();
  });})(jQuery);
</script>

<style type="text/css">
  #ap-smart-layerslider-mod_91 .sp-arrow{font-size:50px;width:70px;}
	
.sp-horizontal .sp-arrow {margin-top:-33.333333333333px;}
.sp-vertical .sp-arrow {margin-left:-33.333333333333px;}
 
 
 
#ap-smart-layerslider-mod_91 .sp-button{border-color:rgba(255,93,93,1);}
#ap-smart-layerslider-mod_91 .sp-selected-button{background-color:rgba(255,93,93,1);} 
#ap-smart-layerslider-mod_91 .sp-full-screen-button:before{color:#000000;}
@media (max-width: 979px) {
#ap-smart-layerslider-mod_91 .sp-arrow{font-size:45px;width:55px;}	
}

</style>

</div>
</div>
	
<?php
include ("h8.php"); 
?>

<div align="center" >

<table>
<tr>
<?php
$res = $link->query("SELECT * FROM menu WHERE nom='home'");
while ($rw = $res->fetch_assoc()):
?>
	<th> <img src="<?php echo $rw ['pic']; ?>" onclick="location='<?php echo $rw['url'] ;?>';" style="cursor:pointer;" width="<?php echo $rw['wt'] ;?>px" width="<?php echo $rw['ht'] ;?>px" ></th>
<?php endwhile; ?>
	
</tr>

</table>

</div>

		
<div class="sppb-container">
		<div class="sppb-row">
<?php 
include ("h6.php"); 
include ("h5.php");  
include ("h7.php");  
?>
		</div>
</div>	

	
<?php 
include ("h.php"); 
include ("h1.php"); 
?>


	<div class="sppb-container">
		<div class="sppb-row">
		<?php 
		include ("h2.php"); 
		include ("h3.php");
		?>
		</div>
	</div>


</div>
</div>
</div></section>



<section  class="sppb-section " style="">
<div class="sppb-container">
	<div class="sppb-row">
		<div class="sppb-col-sm-12"><div class="sppb-addon-container" style="">
			<div class="sppb-empty-space  clearfix" style="margin-bottom:10px;"></div>
			</div>
		</div>
	</div>
</div>
</section>

<section  class="sppb-section " style="">
<div class="sppb-container">
<div class="sppb-row"><div class="sppb-col-sm-12">
<div class="sppb-addon-container" style="">
<div class="sppb-empty-space  clearfix" style="margin-bottom:30px;"></div>
</div>
</div>
</div>
</div>
</section>

	

	<section  class="sppb-section " style="margin:0px;background-color:#404040;">
		<div class="sppb-row">
			<div class="sppb-col-sm-3">
			<div class="sppb-addon-container" style=""></div>
			</div>
			<div class="sppb-col-sm-6">
				<div class="sppb-addon-container" style="">
				<div class="sppb-divider sppb-divider-border" style=" border-bottom-color:#a85858;border-bottom-style:solid;border-bottom-width:1px;">
				</div>
				</div>
			</div>
			<div class="sppb-col-sm-3">
			<div class="sppb-addon-container" style=""></div>
			</div>
		</div>
	</section>	
	</div>
</div>

</div>
</div>
</div>



</section>


	
<?php 
include ("h4.php");
include ("../footer.php"); 
?>
        
		<div class="offcanvas-menu" style="background-image:url(<?php echo $rs ['mobile_menu'] ?>);">
            <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
            <div class="offcanvas-inner" style="background-image:url(<?php echo $rs ['mobile_button'] ?>);">
                <div class="sp-module ">
				<div class="sp-module-content">
				<div class="search flex-search">
	<form action="/v1/" method="post">
		<input name="searchword" id="mod-search-searchword" maxlength="200"  class="inputbox search-query" type="text" size="20" placeholder="Search ..." />		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="101" />
	</form>
</div>
</div>
</div>


<?php include ("../sec/menum.php"); ?>


           </div>
		   
		   
        </div>
    </div>
        
</body>
</html>