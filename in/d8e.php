<?php 
include ("../sec/8.php"); 
include("d8s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 257.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<body class="bg-lightBlue"> 


<div class="content" align="center" style="background-color:#00BF9A;">
  
<?php include ("../sec/amenu.php"); ?>

<div class="login-form padding20 block-shadow">
		<b>MOBILE MENU :</b>
		<button class="button loading-pulse lighten primary" onclick="location='d8em.php';"> SETTING </button>
		</br>
		<b>SIDE MENU :</b>
		<button class="button loading-pulse lighten primary" onclick="location='hx.php';"> TUKAR </button>
		<br/>
		<b>TEMPLATES :</b>
		<button class="button loading-pulse lighten primary" onclick="location='d8et.php';"> MENU </button>
		<br/>
		<br/>
		</br>
		<b>NEWS :</b>
		<button class="button loading-pulse lighten success" onclick="location='nz.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='nx.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		</br>
		<b>IKLAN :</b>
		<button class="button loading-pulse lighten success" onclick="location='iz.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='ix.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		</br>
		<b>TEXT :</b>
		<button class="button loading-pulse lighten success" onclick="location='tz.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='tx.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		</br>
		<b>SLIDE :</b>
		<button class="button loading-pulse lighten success" onclick="location='sz.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='sx.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		</br>
		<b>CNTENT :</b>
		<button class="button loading-pulse lighten success" onclick="location='cz.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='cx.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		<form action="../inc/d8e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>SETTING</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rs ['id']; ?>" >
				<div class="input-control text full-size" data-role="input">
				ADMIN LOGO :
				<input type="text" name="alogo" value="<?php echo $rs['alogo']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ADMIN LOGO WIDTH :
				<input type="text" name="alogo_wt" value="<?php echo $rs['alogo_wt']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ADMIN LOGO HEIGHT:
				<input type="text" name="alogo_ht" value="<?php echo $rs['alogo_ht']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOGO :
				<input type="text" name="logo" value="<?php echo $rs['logo']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOGO WIDTH :
				<input type="text" name="logo_width" value="<?php echo $rs['logo_width']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOGO HEIGHT:
				<input type="text" name="logo_height" value="<?php echo $rs['logo_height']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICON :			
				<input type="text" name="icon" value="<?php echo $rs['icon']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				INDIKATOR :		
				<textarea rows="5" cols="26" readonly><?php echo $rs['indikator']; ?></textarea>				
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE TOP INDIKATOR :			
				<textarea name="slide_top_indi" rows="5" cols="26"><?php echo $rs['slide_top_indi']; ?></textarea>	
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE INDIKATOR :			
				<textarea name="slide_indi" rows="5" cols="26"><?php echo $rs['slide_indi']; ?></textarea>	 
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE TOP STAT :			
				<input type="text" name="slide_top_stat" placeholder="thumbnail,img-rounded,img-circle,img-thumbnail" value="<?php echo $rs['slide_top_stat']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE TOP WIDTH :			
				<input type="text" name="slide_top_width" value="<?php echo $rs['slide_top_width']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE TOP HEIGHT :			
				<input type="text" name="slide_top_height" value="<?php echo $rs['slide_top_height']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE STAT :			
				<input type="text" name="slide_stat" placeholder="thumbnail,img-rounded,img-circle,img-thumbnail" value="<?php echo $rs['slide_stat']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE WIDTH :			
				<input type="text" name="slide_width" value="<?php echo $rs['slide_width']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE HEIGHT :			
				<input type="text" name="slide_height" value="<?php echo $rs['slide_height']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICON COLOR :
				<input type="text" name="icon_menu" value="<?php echo $rs['icon_menu']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SISTEM NAME :
				<input type="text" name="sis_name" value="<?php echo $rs['sis_name']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SIDE MENU NAME :
				<input type="text" name="side_menu" value="<?php echo $rs['side_menu']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				FULL NAME :
				<input type="text" name="full_name" value="<?php echo $rs['full_name']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				FACEBOOK :
				<input type="text" name="facebook" value="<?php echo $rs['facebook']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				TOPIC :
				<input type="text" name="topic" value="<?php echo $rs['topic']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				THEME COLOR :
				<input type="text" name="theme" value="<?php echo $rs['theme']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				FONT MENU :
				<input type="text" name="font_menu" value="<?php echo $rs['font_menu']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MENU ATAS COLOR :
				<input type="text" name="menu_atas_color" value="<?php echo $rs['menu_atas_color']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MENU BWH COLOR :
				<input type="text" name="menu_bwh_color" value="<?php echo $rs['menu_bwh_color']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				TXT COLOR :
				<input type="text" name="txt" value="<?php echo $rs['txt']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				TXT RUN  :
				<input type="text" name="txt_run" value="<?php echo $rs['txt_run']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SITE :
				<input type="text" name="site" value="<?php echo $rs['site']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SEO :
				<input type="text" name="seo" value="<?php echo $rs['seo']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				EMAIL :
				<input type="text" name="email" value="<?php echo $rs['email']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PHONE :
				<input type="text" name="phone" value="<?php echo $rs['phone']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				OFFICE :
				<input type="text" name="rekening" value="<?php echo $rs['rekening']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				TIME WORK :
				<input type="text" name="time_work" value="<?php echo $rs['time_work']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				VIDEO :
				<input type="text" name="video" value="<?php echo $rs['video']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				VIDEO DES :
				<input type="text" name="video_des" value="<?php echo $rs['video_des']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MOBILE MENU :
				<input type="text" name="mobile_menu" value="<?php echo $rs['mobile_menu']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MOBILE BUTTON :
				<input type="text" name="mobile_button" value="<?php echo $rs['mobile_button']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MOBILE FONT :
				<input type="text" name="mobile_font" value="<?php echo $rs['mobile_font']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LIVE CHAT & VISITOR :
				<input type="text" name="widget" value="<?php echo $rs['widget']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				GOOGLE MAP :
				<input type="text" name="g_map" value="<?php echo $rs['g_map']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICO FACEBOOK :
				<input type="text" name="i_fb" value="<?php echo $rs['i_fb']; ?>" size="25" >
				check: <a href="http://findmyfbid.com/">http://findmyfbid.com/</a>
				</div>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICO WA :
				<input type="text" name="i_wa" value="<?php echo $rs['i_wa']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICO HP :
				<input type="text" name="i_hp" placeholder="input your phone number .." value="<?php echo $rs['i_hp']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICO WA DESC :
				<input type="text" name="i_wt" value="<?php echo $rs['i_wt']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICO BUTTON COLOR :
				<input type="text" name="i_bt" value="<?php echo $rs['i_bt']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				HOME PAGE :
				<input type="text" name="home" value="<?php echo $rs['home']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MENU NAME :
				<input type="text" name="mname" value="<?php echo $rs['mname']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NEWS NAME :
				<input type="text" name="nname" value="<?php echo $rs['nname']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NEWS COLOR :
				<input type="text" name="ncolor" value="<?php echo $rs['ncolor']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				GALLERY NAME :
				<input type="text" name="gname" value="<?php echo $rs['gname']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				GALLERY COLOR :
				<input type="text" name="gcolor" value="<?php echo $rs['gcolor']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				URL ICON OPEN :
				<input type="text" name="url_open" placeholder="url lengkap dengan http ..." value="<?php echo $rs['url_open']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				APP NAME :
				<input type="text" name="appname" value="<?php echo $rs['appname']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">UPDATE</button>
		</form>	
</div>
</div>
	
		

<!-- Bootstrap Table Js -->
<script src="../mod/bootstrap_table/js/jquery.min.js"></script>
<script src="../mod/bootstrap_table/js/bootstrap.min.js"></script>
<script src="../mod/bootstrap_table/js/metisMenu.min.js"></script>
<script src="../mod/bootstrap_table/js/jquery.dataTables.min.js"></script>
<script src="../mod/bootstrap_table/js/dataTables.bootstrap.min.js"></script>		

  

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
	
</body>
</html>
