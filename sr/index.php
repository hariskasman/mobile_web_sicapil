<?php
include ("../config.php");
include("../lib/sett.php");
?>

<!DOCTYPE html>
<html lang="en">

<link rel='shortcut icon' type='image/x-icon' href='<?php echo $rs ['icon'] ?>' />
	
	<!-- SEO by Isesware -->
	<meta name="description" itemprop="description" content="<?php echo $rs ['seo']; ?> - <?php echo $rs ['site']; ?>" />
	<link rel="canonical" href="<?php echo $rs ['site']; ?>" />
	<meta property="isesware.com:title" content="<?php echo $rs ['site']; ?>" />
	<meta property="isesware.com:type" content="<?php echo $rs ['seo']; ?>" />
	<meta property="isesware.com:url" content="<?php echo $rs ['site']; ?>" />
	<meta property="isesware.com:image" content="<?php echo $rs ['site']; ?>" />
	<meta property="isesware.com:site_name" content="<?php echo $rs ['seo']; ?>" />
	<meta property="isesware.com:description" content="<?php echo $rs ['seo']; ?>" />
	<meta property="article:published_time" content="<?php echo $rs ['site']; ?>" />
	<meta property="article:modified_time" content="<?php echo $rs ['site']; ?>" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?php echo $rs ['seo']; ?>" />
	<meta name="twitter:description" content="<?php echo $rs ['seo']; ?>" />
	<meta name="twitter:image" content="<?php echo $rs ['site']; ?>" />
	<meta itemprop="image" content="<?php echo $rs ['site']; ?>" />
	<!-- -->

  <title><?php echo $rs ['sis_name'] ?></title>
  
<style>
body {
  background: #eee;
  font: 12px Lucida sans, Arial, Helvetica, sans-serif;
	color: #333;
	text-align: center;
}

a {
	color: #2A679F;
}
/*========*/

.form-wrapper {
	background-color: #f6f6f6;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
	background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: linear-gradient(top, #f6f6f6, #eae8e8);
	border-color: #dedede #bababa #aaa #bababa;
	border-style: solid;
	border-width: 1px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	-moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	margin: 100px auto;
	overflow: hidden;
	padding: 8px;
	width: 450px;
}

.form-wrapper #search {
	border: 1px solid #CCC;
	-webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
  color: #999;
	float: left;
	font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
	height: 20px;
	padding: 10px;
	width: 320px;
}

.form-wrapper #search:focus {
	border-color: #aaa;
	-webkit-box-shadow: 0 1px 1px #bbb inset;
	-moz-box-shadow: 0 1px 1px #bbb inset;
	box-shadow: 0 1px 1px #bbb inset;
	outline: 0;
}

.form-wrapper #search:-moz-placeholder,
.form-wrapper #search:-ms-input-placeholder,
.form-wrapper #search::-webkit-input-placeholder {
	color: #999;
	font-weight: normal;
}

.form-wrapper #submit {
	background-color: #0483a0;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
	background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
	background-image: linear-gradient(top, #31b2c3, #0483a0);
	border: 1px solid #00748f;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	color: #fafafa;
	cursor: pointer;
	height: 42px;
	float: right;
	font: 15px Arial, Helvetica;
	padding: 0;
	text-transform: uppercase;
	text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
	width: 100px;
}

.form-wrapper #submit:hover,
.form-wrapper #submit:focus {
	background-color: #31b2c3;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
	background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
	background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form-wrapper #submit:active {
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	outline: 0;
}

.form-wrapper #submit::-moz-focus-inner {
	border: 0;
}

@media only screen and (max-width: 500px) {
    body {
        background-color: lightblue;
    }
}
</style>
<form class="form-wrapper" action="../fm/data.php" Method="GET">
	<img src="logo3D.png" alt="ifma" >
    <input type="text" name="u" id="search" placeholder="Check IFMA ID..." required>
    <input type="submit" value="CHECK" id="submit">
</form>
</html>