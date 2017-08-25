<?php 
include ("../sec/19.php"); 
include("d19s.php");
?>


<script type="text/javascript">
	function startCalc(){
		interval=setInterval("calc()",1)
	}
	function calc(){
		one=document.sum.total.value;
		two=document.sum.bayar.value;
		document.sum.sisa.value=(one*1)-(two*1)
	}
	function stopCalc(){
		clearInterval(interval)
	}
</script>



<head>
<title>Print Struk</title>
</head>


<div align="center">
<h1 align="center"><?php echo $rsa ['name'] ?></h1>
<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#000000" width="20%">
    	
		<div>
		<?php 
		$tgl = date('d/m/Y');
		echo "Date : " .$tgl ; 
		?>	
		<br> <a>Cashier :</a>
		<?php echo ($_SESSION['log1']."<br />"); ?>
		<a>Trx :</a>
		TX00<?php echo $_GET[u] ?>
		</div>
		
		
		<tr bgcolor="#FFFFFF" style="font-weight:bold">
			<td width="200px">Product Name</td>
			<td width="30px">Qty</td>
			<td width="50px">Price</td>
			<td width="50px">Amount</td>
		</tr>
           
<?php
		$res = $link->query("SELECT * FROM sales WHERE trx='$_GET[u]' AND sto='" .$_SESSION['stores']. "' AND stat='hold' AND cashier='" .$_SESSION['log1']. "'");
		while ($row = $res->fetch_assoc()):
		$harga = $row ['price'];
		$total = $row ['total'];
?>
		   
		<tr bgcolor="#FFFFFF">
			<td width="200px"><?php echo $row['prd'] ?> - <?php echo $row['unit'] ?>  </td>
			<td><?php echo $row['qty'] ?></td>
			<td><?php echo "Rp " .number_format($harga). ",-"; ?></td>
			<td><?php echo "Rp " .number_format($total). ",-"; ?></td>
        </tr>

<?php
		endwhile;
?>		
		
		<tr >
			<td style="background-color:#ffffff"><b>Total Amount: </b></td>
			<td style="background-color:#ffffff" ></td>
			<td style="background-color:#ffffff" ></td>
			<td style="background-color:#ffffff" > <b><?php echo "Rp " .number_format($total_hold). ",-";?></b></td>
		</tr>
			
        </table>
	</div>	
		

<body>
<form name="sum" action="../inc/d19b.php" method="post">
	<div align="center">
        <table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#000000" width="20%">
										<tr>
											<td style="background-color:#ffffff"><b>Detail</b></td>
											<td style="background-color:#ffffff"><b>Pembayaran</b></td>
                                        </tr>
										<input type="hidden" name="trx" value="<?php echo $_GET[u] ?>">
										<input type="hidden" name="cashier" value="<?php echo $_SESSION['log1'] ?>">
										<input type="hidden" name="dt" value="<?php echo date('d/m/Y');?>">
										<input type="hidden" name="mt" value="<?php echo date('m');?>">
										<input type="hidden" name="yr" value="<?php echo date('Y');?>">
										<input type="hidden" name="net_profit" value="<?php echo $total_netprofit_hold ?>">
										<input type="hidden" name="stores" value="<?php echo $_SESSION ['stores'] ?>">
										<tr>
											<td style="background-color:#ffffff">Total</td>
											<td style="background-color:#ffffff"><input type="text" name="total" value="<?php echo $total_hold ?>" onFocus="startCalc();" onBlur="stopCalc();" readonly></td>
                                        </tr>
										<tr>
											<td style="background-color:#ffffff">Bayar</td>
											<td style="background-color:#ffffff"><input type="text" name="bayar" onFocus="startCalc();" onBlur="stopCalc();"/></td>
                                        </tr>
										<tr>
											<td style="background-color:#ffffff">Sisa</td>
											<td style="background-color:#ffffff"><input type="text" name="sisa" /></td>
                                        </tr>
										<tr>
											<td style="background-color:#ffffff">Proses</td>
											<td style="background-color:#ffffff"><input type="submit" value="Pay Order" /></td>
                                        </tr>
			
			
			<tbody> 

                                        <tr>
											<td style="background-color:#ffffff"></td>
											<td style="background-color:#ffffff"></td>
                                        </tr>

             
             		</tbody>
        </table>
	</div>
</form>
</body>