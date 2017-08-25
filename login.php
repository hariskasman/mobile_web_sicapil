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
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row

if($count==1)
	{
	$_SESSION['log1']=$username;
	$_SESSION['stores']=$stores;
	header("location:in/ds.php");	
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




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='<?php echo $rw ['alogo']; ?>' />

    <title><?php echo $rw ['sis_name'] ?></title>
	<!-- Coding by Programmer : Haris Saktiawan Kasman, S.Kom-->
    <link href="public/css/metro.css" rel="stylesheet">
	<link href="public/css/modal.css" rel="stylesheet">
    <link href="public/css/metro-icons.css" rel="stylesheet">
    <link href="public/css/metro-responsive.css" rel="stylesheet">
    <script src="public/js/jquery-2.1.3.min.js"></script>
    <script src="public/js/metro.js"></script>
	
 
    <style>
        .login-form {
            width: 25rem;
            height: 25.75rem;
            position: fixed;
            top: 40%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>

</head>

	<?php include ("s_view.php"); ?>

<body style="background-color:#00BF9A;">
    <div class=" padding20 block-shadow" style="background-color:#00BF9A;">
        <form id="login_form" method="post" action="" name="loginform" >

			<div align="center" style="background-color:#00BF9A;">
			<img src="<?php echo $rw ['alogo']; ?>" alt="isesware.com" width="<?php echo $rw ['alogo_wt']; ?>px" height="<?php echo $rw ['alogo_ht']; ?>px">
            <h1 class="text-light"><small><h3 style="color:white;"><?php echo $rw ['sis_name']; ?></h3></small></h1>
			<h1 class="text-light"><small><h5 style="color:white;"><b>by Bitung Technology Community</b></h5></small></h1>
			</div>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input" >
                <label for="user_login" style="color:white;">Username :</label>
                <input type="text" name="username" style="background-color:#00BF9A;color:white;border-color:white;" onchange="changeValue(this.value)" >
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password" style="color:white;">Password :</label>
                <input type="password" style="background-color:#00BF9A;color:white;border-color:white;" name="password"  >
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
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
            <div >
                <button type="submit" style="background-color:#00BF9A;color:white;border-color:white;" class="button primary loading-cube light">Login</button>
               </form>
			   	
            </div>
			<button id="myBtn" style="background-color:#00BF9A;color:white;border-color:white;" class="button primary loading-cube light" data-toggle="modal" data-target="#myModal">Registration</button>
    </div>
	

	
<?php include ("in/d1a.php"); ?>	

<script src="public/js/modal.js"></script>
</body>
</html>