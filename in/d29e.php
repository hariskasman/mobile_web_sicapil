<?php 
include ("../sec/29.php"); 
include("d29s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>


<body class="bg-lightBlue"> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 42.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<script type="text/javascript">
	function rumus(){
		interval=setInterval("calc()",1)
	}
	function calc(){
		var1=document.sm.skrg.value;
		var2=document.sm.qty.value;
		document.sm.sisa.value=(var1*1)-(var2*1) //bisa isi tambah (+) ,, kali (*) ,, kurang (-)
	}
	function srumus(){
		clearInterval(interval)
	}
</script>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d29e.php" name="sm" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>MOVE ALL ITEM</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				<input class="form-control" name="tanggal" type="hidden" value="<?php echo date("Y-m-d"); ?>" readonly>
				<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
				</div>
				<hr class="thin"/>
				<input type="text" name="id" value="<?php echo $rsa ['id']; ?>" size="25" hidden>
				<div class="input-control text full-size" data-role="input">
				ITEM PIC :			
				<input type="text" placeholder="picture item.." name="ipic" value="<?php echo $rsa ['ipic']; ?>" size="25" readonly>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ITEM NAME :			
				<input type="text" placeholder="item name.." name="iname" value="<?php echo $rsa ['iname']; ?>" size="25" readonly>				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SATUAN :			
				<input type="text" placeholder="satuan item.." name="satuan" value="<?php echo $rsa ['satuan']; ?>" size="25" readonly>				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ROOM:			
				<select name="room">
					<?php
					$res = $link->query("SELECT * FROM ruang");
					while ($row = $res->fetch_assoc()):
					?>
					<option value="<?php echo $row['room']; ?>"><?php echo $row['room']; ?></option>
					<?php 
					endwhile;
					?>
				</select>				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOCATION :			
				<input type="text" placeholder="detail location.." name="detail_room" value="<?php echo $rsa ['detail_room']; ?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				QTY :			
				<input type="text" placeholder="qty.." name="skrg" value="<?php echo $rsa ['qty']; ?>" onFocus="rumus();" onBlur="srumus();" size="25" readonly>				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				TERIMA DARI :			
				<input type="text" placeholder="terima dari.." name="terima" value="<?php echo $rsa ['terima']; ?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BUKTI TERIMA :			
				<input type="text" placeholder="bukti terima.." name="pic_terima" value="<?php echo $rsa ['pic_terima']; ?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				TARUH :			
				<input type="text" placeholder="taruh item.." name="taruh" value="<?php echo $_SESSION[log1]; ?>" size="25" readonly>				
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">Enter</button>
			</form>	
</div>


</div><!--end wrap-->

</body>
</html>
