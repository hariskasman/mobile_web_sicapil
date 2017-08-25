<?php 
ini_set('display_errors',0); 
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($link,$_POST['username']);
$password=mysqli_real_escape_string($link,$_POST['password']);
$codx=mysqli_real_escape_string($link,$_POST['codx']);
$stores=mysqli_real_escape_string($link,$_POST['stores']);


// MENU AKSES USER
if ($_POST['1'] == "1")
	{
		$m1=mysqli_real_escape_string($link,$_POST['a']);
		$_SESSION['m1']=$m1;
	}
	
if ($_POST['2'] == "1")
	{
		$m2=mysqli_real_escape_string($link,$_POST['b']);
		$_SESSION['m2']=$m2;
	}

if ($_POST['3'] == "1")
	{
		$m3=mysqli_real_escape_string($link,$_POST['c']);
		$_SESSION['m3']=$m3;
	}

if ($_POST['4'] == "1")
	{
		$m4=mysqli_real_escape_string($link,$_POST['d']);
		$_SESSION['m4']=$m4;
	}	

if ($_POST['5'] == "1")
	{
		$m5=mysqli_real_escape_string($link,$_POST['e']);
		$_SESSION['m5']=$m5;
	}
	
if ($_POST['6'] == "1")
	{
		$m6=mysqli_real_escape_string($link,$_POST['f']);
		$_SESSION['m6']=$m6;
	}

if ($_POST['7'] == "1")
	{
		$m7=mysqli_real_escape_string($link,$_POST['g']);
		$_SESSION['m7']=$m7;
	}
	
if ($_POST['8'] == "1")
	{
		$m8=mysqli_real_escape_string($link,$_POST['h']);
		$_SESSION['m8']=$m8;
	}
	
if ($_POST['9'] == "1")
	{
		$m9=mysqli_real_escape_string($link,$_POST['i']);
		$_SESSION['m9']=$m9;
	}	
	
if ($_POST['10'] == "1")
	{
		$m10=mysqli_real_escape_string($link,$_POST['j']);
		$_SESSION['m10']=$m10;
	}
	
if ($_POST['11'] == "1")
	{
		$m11=mysqli_real_escape_string($link,$_POST['k']);
		$_SESSION['m11']=$m11;
	}	
	
if ($_POST['12'] == "1")
	{
		$m12=mysqli_real_escape_string($link,$_POST['l']);
		$_SESSION['m12']=$m12;
	}	

if ($_POST['13'] == "1")
	{
		$m13=mysqli_real_escape_string($link,$_POST['m']);
		$_SESSION['m13']=$m13;
	}	
	
if ($_POST['14'] == "1")
	{
		$m14=mysqli_real_escape_string($link,$_POST['n']);
		$_SESSION['m14']=$m14;
	}	

if ($_POST['15'] == "1")
	{
		$m15=mysqli_real_escape_string($link,$_POST['o']);
		$_SESSION['m15']=$m15;
	}

if ($_POST['16'] == "1")
	{
		$m16=mysqli_real_escape_string($link,$_POST['p']);
		$_SESSION['m16']=$m16;
	}	
	
if ($_POST['17'] == "1")
	{
		$m17=mysqli_real_escape_string($link,$_POST['q']);
		$_SESSION['m17']=$m17;
	}

if ($_POST['18'] == "1")
	{
		$m18=mysqli_real_escape_string($link,$_POST['r']);
		$_SESSION['m18']=$m18;
	}	
	
if ($_POST['19'] == "1")
	{
		$m19=mysqli_real_escape_string($link,$_POST['s']);
		$_SESSION['m19']=$m19;
	}

if ($_POST['20'] == "1")
	{
		$m20=mysqli_real_escape_string($link,$_POST['t']);
		$_SESSION['m20']=$m20;
	}	
	
if ($_POST['21'] == "1")
	{
		$m21=mysqli_real_escape_string($link,$_POST['u']);
		$_SESSION['m21']=$m21;
	}		
	
if ($_POST['22'] == "1")
	{
		$m22=mysqli_real_escape_string($link,$_POST['v']);
		$_SESSION['m22']=$m22;
	}
	
if ($_POST['23'] == "1")
	{
		$m23=mysqli_real_escape_string($link,$_POST['w']);
		$_SESSION['m23']=$m23;
	}		
	
if ($_POST['24'] == "1")
	{
		$m24=mysqli_real_escape_string($link,$_POST['x']);
		$_SESSION['m24']=$m24;
	}	
	
if ($_POST['25'] == "1")
	{
		$m25=mysqli_real_escape_string($link,$_POST['y']);
		$_SESSION['m25']=$m25;
	}

if ($_POST['26'] == "1")
	{
		$m26=mysqli_real_escape_string($link,$_POST['z']);
		$_SESSION['m26']=$m26;
	}	
	
if ($_POST['27'] == "1")
	{
		$m27=mysqli_real_escape_string($link,$_POST['za']);
		$_SESSION['m27']=$m27;
	}	
	
if ($_POST['28'] == "1")
	{
		$m28=mysqli_real_escape_string($link,$_POST['zb']);
		$_SESSION['m28']=$m28;
	}	
	
if ($_POST['29'] == "1")
	{
		$m29=mysqli_real_escape_string($link,$_POST['zc']);
		$_SESSION['m29']=$m29;
	}	
	
$sql_query="SELECT id FROM pengguna WHERE username='$username' and password='$password' and codx='$codx'";
$result=mysqli_query($link,$sql_query);
$rww=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row

if($count==1)
	{
	$_SESSION['log1']=$username;
	$_SESSION['stores']=$stores;
	header("location:m/ds.php");	
	}
	else
	{
	$error="Username or Password is invalid";
	}
	}
?>

<?php 
	$q = "SELECT * FROM setting WHERE id='1'";
	$r = mysqli_query($link,$q);
	$rw = mysqli_fetch_array($r); 
	
?>	

<!DOCTYPE html><html>

<head>

<title><?php echo $rw ['sis_name']; ?></title>
<link rel='shortcut icon' type='image/x-icon' href='<?php echo $rw ['logo_a'] ?>' />

<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
<link href="up/logox.png" rel="apple-touch-icon-precomposed" sizes="196x196" />
<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
<link rel="stylesheet" type="text/css" data-bootloader-hash="IejIE" href="m/css/st.css" />
<link rel="stylesheet" type="text/css" data-bootloader-hash="wv/gh" href="m/css/sa.css" />
<meta name="description" content="<link rel='shortcut icon' type='image/x-icon' href='<?php echo $rw ['seo'] ?>' />" />

</head>

<?php include ("s_view.php"); ?>

<body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">

<script id="u_0_b">(function(a){a.__updateOrientation=function(){var b=!!a.orientation&&a.orientation!==180,c=document.body;if(c)c.className=c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g,' ')+' '+(b?'landscape':'portrait');return b;};})(window);</script>
<div id="viewport">
<h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0"><?php echo $rw ['sis_name']; ?></h1>

<div class="_129_" id="header-notices"></div>

<div class="_4g33 _52we _52z5" id="header">
<div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter">
<a href="#"><i class="img sp_7aonsSRaAE4 sx_b5d183"><u><?php echo $rw ['sis_name']; ?></u></i></a>
</div>
</div>

<div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
<div class="_4g33">
<div class="_4g34" id="u_0_0">
<div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_login_notice">
<div class="_52jd"></div></div><div><div data-sigil="m_login_upsell"></div>
<div class="aclb _5rut">

<form method="post" action="" class="mobile-login-form _5spm" id="u_0_1" novalidate="1" data-sigil="m_login_form">
<div class="_56be _5sob">

<div class="_55wo _55x2 _56bf">
<input autocorrect="off" autocapitalize="off" onchange="changeValue(this.value)" class="_56bg _4u9z _5ruq" name="username" placeholder="Username" value="" type="text" data-sigil="m_login_email" />

<div class="_1upc _mg8" data-sigil="m_login_password">
<div class="_4g33"><div class="_4g34 _5i2i _52we">
<div class="_5xu4">
<input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" name="password" placeholder="Kata Sandi" id="u_0_2" type="password" data-sigil="password-plain-text-toggle-input" /></div></div>

				   <input type="hidden" id="x" name="codx" value=""> 
				   <input type="hidden" id="st" name="stores" value=""> 
				   <input type="hidden" id="m1" name="1" value="">
				   <input type="hidden" id="m2" name="2" value="">
				   <input type="hidden" id="m3" name="3" value="">
				   <input type="hidden" id="m4" name="4" value="">
				   <input type="hidden" id="m5" name="5" value="">
				   <input type="hidden" id="m6" name="6" value="">
				   <input type="hidden" id="m7" name="7" value="">
				   <input type="hidden" id="m8" name="8" value="">
				   <input type="hidden" id="m9" name="9" value="">
				   <input type="hidden" id="m10" name="10" value="">
				   <input type="hidden" id="m11" name="11" value="">
				   <input type="hidden" id="m12" name="12" value="">
				   <input type="hidden" id="m13" name="13" value="">
				   <input type="hidden" id="m14" name="14" value="">
				   <input type="hidden" id="m15" name="15" value="">
				   <input type="hidden" id="m16" name="16" value="">
				   <input type="hidden" id="m17" name="17" value="">
				   <input type="hidden" id="m18" name="18" value="">
				   <input type="hidden" id="m19" name="19" value="">
				   <input type="hidden" id="m20" name="20" value="">
				   <input type="hidden" id="m21" name="21" value="">
				   <input type="hidden" id="m22" name="22" value="">
				   <input type="hidden" id="m23" name="23" value="">
				   <input type="hidden" id="m24" name="24" value="">
				   <input type="hidden" id="m25" name="25" value="">
				   <input type="hidden" id="m26" name="26" value="">
				   <input type="hidden" id="m27" name="27" value="">
				   <input type="hidden" id="m28" name="28" value="">
				   <input type="hidden" id="m29" name="29" value="">

<div class="_5s61 _216i _5i2i _52we">
<div class="_5xu4"><div class="_2pi9" id="u_0_3" style="display:none"><a href="#" data-sigil="password-plain-text-toggle">
<span class="mfss" id="u_0_4" style="display:none">SEMBUNYIKAN</span>
<span class="mfss" id="u_0_5">PERLIHATKAN</span></a></div></div>
</div>
</div>
</div></div>
</div>

<div class="_2pie" style="text-align:center;"><button type="submit" value="Masuk" class="_54k8 _56bs _56b_ _56bw _56bt" name="login" id="u_0_6" data-sigil="touchable m_login_button"><span class="_55sr">Masuk</span></button></div>

<div class="_xo8"></div>

<noscript><input type="hidden" name="_fb_noscript" value="true" /></noscript>

</form>

<div class="_43mg"><span class="_43mh">-</span></div>
<div class="_43mg"><span class="_43mh">Copyright Isesware</span>
<?php include ("footer.php"); ?>
</div>


<div>

</div>
</div>
</div>
</div>
</div>
<div></div>
<div class="_55wr _5ui2">
<div class="_5dpw">
<div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="marea">
</div>
<div class="_5ui4">
<span class="mfss fcg"></span></div>
</div>
</div>
</div>


<div class="viewportArea _2v9s" id="u_0_7" style="display:none" data-sigil="marea">
<div class="_5vsg" id="u_0_8"></div>
<div class="_5vsh" id="u_0_9"></div>
<div class="_5v5d fcg"><div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Memuat...</div></div>
<div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
<div class="container"><div class="image"></div>
<div class="message" data-sigil="error-message"></div><a class="link" data-sigil="MPageError:retry">Coba Lagi</a></div></div></div></div>
<div id="static_templates">
<div class="mDialog" id="modalDialog" style="display:none">
<div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
<div class="_4g33 _52we"><div class="_5s61"><div class="_52z7">
<button type="submit" value="Batal" class="cancelButton btn btnD bgb mfss touchable" data-sigil="dialog-cancel-button blocking-touchable">Batal</button>
<button type="submit" value="Kembali" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Kembali" data-sigil="dialog-back-button blocking-touchable"><i class="img sp_7aonsSRaAE4 sx_877ffc" style="margin-top: 2px;"></i></button></div>
</div>

</body>

</html>                                                                                                                                                                                                                                                                                                                                   