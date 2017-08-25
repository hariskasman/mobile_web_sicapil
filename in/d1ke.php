<?php 
include ("../sec/1.php"); 
include("d1s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>

	<style>
        .login-form {
            width: 20rem;
            height: 15.75rem;
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
        <form action="../inc/d1ke.php" method="post">

			<div align="center">
            <h1 class="text-light"><small><h3>EDIT KATEGORI</h3></small></h1>
			<input type="hidden" name="id" value="<?php echo $rsb ['id']?>" >
			<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
			<input type="hidden" name="username" value="<?php echo $_SESSION['log1']; ?>" >
			</div>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="name">Name :</label>
                <input type="text" placeholder="entry name.." name="name" value="<?php echo $rsb['name'] ?>" size="25" >
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
