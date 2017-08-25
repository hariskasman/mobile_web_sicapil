<?php 
include ("../sec/16.php"); 
include("d16s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>

	<style>
        .login-form {
            width: 20rem;
            height: 27.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
	</style>


<body class="bg-lightBlue"> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

</head>
<div class="login-form padding20 block-shadow">
        <form action="../inc/d16a.php" method="post">

			<div align="center">
            <h1 class="text-light"><small><h3>TRANSACTION</h3></small></h1>
			<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
			<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
			<input class="form-control" name="date" type="hidden" value="<?php echo date("Y-m-d"); ?>" readonly>
			<input class="form-control" name="dt" type="hidden" value="<?php echo date("d/m/Y"); ?>" readonly>
			<input class="form-control" name="mt" type="hidden" value="<?php echo date("m"); ?>" readonly>
			<input class="form-control" name="yr" type="hidden" value="<?php echo date("Y"); ?>" readonly>
			</div>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="name">Username :</label>
				<input name="time" type="hidden" value="<?php echo date("h:i:s"); ?>" readonly>
                <input type="text" placeholder="username ..." name="username" value="<?php echo $_SESSION["log1"]; ?>" size="25" readonly>
            </div>
            <br />
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="trx">Transaction :</label>
                <select name="trx">
					<option value="out">---</option>
					<option value="in">INCOMES</option>
					<option value="out">EXPENSES</option>
				</select>
            </div>
            <br />
            <br />
			<div class="input-control text full-size" data-role="input">
                <label for="noted">Noted :</label>
                <input placeholder="noted" name="note" type="text" >
            </div> 
            <br />
            <br />
			<div class="input-control text full-size" data-role="input">
                <label for="menit">Minute :</label>
                <input placeholder="menit" name="menit" type="text" >
            </div> 
            <br />
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="money">Money :</label>
                <input placeholder="money" name="money" type="text" >
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
