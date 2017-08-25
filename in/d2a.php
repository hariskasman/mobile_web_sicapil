<?php 
include ("../sec/2.php"); 
include("d2s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>

	<style>
        .login-form {
            width: 20rem;
            height: 31.75rem;
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
        <form action="../inc/d2a.php" method="post">

			<div align="center">
            <h1 class="text-light"><small><h3>ADD PAGES</h3></small></h1>
			<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
			<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
			</div>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="name">Name :</label>
                <input type="text" placeholder="isi name page.." name="name" value="" size="25" >
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="title">Title :</label>
                <input type="text" placeholder="isi title page.." name="judul" value="" size="25" >
            </div>
            <br />
            <br />
			<div class="input-control password full-size" data-role="input">
                <label for="des">Description :</label>
                <textarea name="des" rows="5" cols="26"></textarea> 
            </div> 
            <br />
            <br />
			<br />
            <br />
			<br />
			<br />
            <div class="input-control password full-size" data-role="input">
                <label for="picture">Pictures :</label>
                <input type="text" placeholder="isi picture link.." name="pic" value="" size="25" >
            </div>
			<br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="picture">Position :</label>
                <select name="stat">
					<option value="off">---</option>
					<option value="on">Pages Menu</option>
					<option value="off">Dropdown Menu</option>
				</select>
            </div>
            <div >
                <button type="submit" class="button primary loading-cube light">Enter</button>
               </form>
            </div>
</div>

</div><!--end wrap-->

</body>
</html>
