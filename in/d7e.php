<?php 
include ("../sec/7.php"); 
include("d7s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 125.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<body class="bg-lightBlue"> 


<div class="content" align="center">
  
<?php include ("../sec/amenu.php"); ?>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d7e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>ACCESS</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				FULLNAME :
				<input type="text" name="fullname" value="<?php echo $rsa['fullname'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DESCRIPTION :
				<input type="text" name="des" value="<?php echo $rsa['des'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				USERNAME :
				<input type="text" name="username" value="<?php echo $rsa['username'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PASSWORD :
				<input type="text" name="password" value="<?php echo $rsa['password'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				STORES :
				<input type="text" style="background-color:#CEF6EC" name="stores" value="<?php echo $rsa['stores'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOG CONTROL :
				<input type="text" style="background-color:#CEF6EC" name="log" value="<?php echo $rsa['log'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				KAS :
				<input type="text" style="background-color:#CEF6EC" name="kas" value="<?php echo $rsa['kas'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PICTURES :
				<input type="text" style="background-color:#CEF6EC" name="pic" value="<?php echo $rsa['pic'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				POST :
				<input type="text" name="a" value="<?php echo $rsa['a'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PAGE :
				<input type="text" name="b" value="<?php echo $rsa['b'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PRODUCT :		
				<input type="text" name="c" value="<?php echo $rsa['c'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SLIDE :
				<input type="text" name="d" value="<?php echo $rsa['d'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BUSINESS :
				<input type="text" name="e" value="<?php echo $rsa['e'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				GALLERY :		
				<input type="text" name="f" value="<?php echo $rsa['f'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ACCOUNT :
				<input type="text" name="g" value="<?php echo $rsa['g'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SETTING :
				<input type="text" name="h" value="<?php echo $rsa['h'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				COMMENT :		
				<input type="text" name="i" value="<?php echo $rsa['i'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SECURITY :
				<input type="text" name="j" value="<?php echo $rsa['j'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DIRECTORY :
				<input type="text" name="k" value="<?php echo $rsa['k'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				UPLOAD :		
				<input type="text" name="l" value="<?php echo $rsa['l'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BACKGROUND :
				<input type="text" name="m" value="<?php echo $rsa['m'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SHADOW :
				<input type="text" name="n" value="<?php echo $rsa['n'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PROFILE :
				<input type="text" name="o" value="<?php echo $rsa['o'] ?>" size="25" >
				</div>	
				<br/>
				<br/>
				<input type="hidden" placeholder="CASH FLOW" name="p" value="<?php echo $rsa['p'] ?>" size="25" >
				<input type="hidden" placeholder="MASTER PRODUCT" name="q" value="<?php echo $rsa['q'] ?>" size="25" >
				<input type="hidden" placeholder="SALES" style="background-color:#CEF6EC" name="r" value="<?php echo $rsa['r'] ?>" size="25" >
				<input type="hidden" placeholder="HOLD" style="background-color:#CEF6EC" name="s" value="<?php echo $rsa['s'] ?>" size="25" >
				<input type="hidden" placeholder="REPORT" style="background-color:#CEF6EC" name="t" value="<?php echo $rsa['t'] ?>" size="25" >
				<div class="input-control text full-size" data-role="input">
				LOG BOOK :
				<input type="text" placeholder="LOG BOOK" style="background-color:#F5DA81" name="u" value="<?php echo $rsa['u'] ?>" size="25" >
				</div>	
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOG BOOK - CPANEL :
				<input type="text" placeholder="LOG BOOK - CPANEL" style="background-color:#F5DA81" name="v" value="<?php echo $rsa['v'] ?>" size="25" >
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
