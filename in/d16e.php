<?php 
include ("../sec/16.php"); 
include("d16s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>

	<style>
        .login-form {
            width: 20rem;
            height: 25.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
	</style>


<body> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

</head>
<div class="login-form padding20 block-shadow">
        <form action="../inc/d16e.php" method="post">

			<div align="center">
            <h1 class="text-light"><small><h3>EDIT TRX</h3></small></h1>
			<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
			<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
			</div>
            <hr class="thin"/>
            <br />
			<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
            <div class="input-control text full-size" data-role="input">
                <label for="name">Username :</label>
                <input type="text" placeholder="username ..." name="username" value="<?php echo $rsa ['username']?>" size="25" readonly>
            </div>
            <br />
            <br />
			<div class="input-control text full-size" data-role="input">
                <label for="noted">Noted :</label>
                <input placeholder="noted" name="note" type="text" value="<?php echo $rsa ['note']?>" >
            </div> 
            <br />
            <br />
			<div class="input-control text full-size" data-role="input">
                <label for="noted">Minute :</label>
                <input placeholder="menit" name="menit" type="text" value="<?php echo $rsa ['menit']?>" >
            </div> 
            <br />
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="money">Money :</label>
                <input placeholder="money" name="money" value="<?php echo $rsa ['money']?>" type="text" >
            </div> 
			<br />
            <br />
            <div >
                <button type="submit" class="button primary loading-cube light">Enter</button>
               </form>
            </div>
</div>

</div><!--end wrap-->

</body>
</html>
