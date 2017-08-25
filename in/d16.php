<?php 
include ("../sec/16.php"); 
include("d16s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		<h3 >Cash Flow </h3> <h4 >Expenses by Day </h4>
		
		<div>
		<label for=""> Daily Incomes</label>
		<input type="text" value="<?php echo "Rp " .number_format($tmoney_day); ?>" readonly>
		<label for=""> Monthly Incomes</label>
		<input type="text" value="<?php echo "Rp " .number_format($tmoney_month); ?>" readonly>
		</div>
		
		<div>
		<label for=""> Daily Expenses</label>
		<input type="text" value="<?php echo "Rp " .number_format($emoney_day); ?>" readonly>
		<label for=""> Monthly Expenses</label>
		<input type="text" value="<?php echo "Rp " .number_format($emoney_month); ?>" readonly>
		</div>
		
		<div>
		<label for=""> Daily Balance</label>
		<input type="text" value="<?php echo "Rp " .number_format($day_balance); ?>" readonly>
		<label for=""> Monthly Balance</label>
		<input type="text" value="<?php echo "Rp " .number_format($month_balance); ?>" readonly>
		</div>
		
		<br/>
		<br/>
		<div>
		Daily Log : <label style="color:blue;"><?php echo $smlog; ?> Minute / <?php echo "Rp " .number_format($emoney_day); ?></label><br/>
		Daily Time Log : <label style="color:blue;"><?php echo $tl; ?> / <?php echo "Rp " .number_format($emoney_day); ?></label><br/>
		</div>
		
		<br/>
		<br/>
		<div>
		All Log : <b style="color:blue;"><?php echo $smloga; ?> Minute / <?php echo "Rp " .number_format($tmoney_outall); ?></b><br/>
		All Time Log : <b style="color:blue;"><?php echo $tla; ?> / <?php echo "Rp " .number_format($tmoney_outall); ?></b><br/>
		</div>
		
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d16a.php';">Transaction</button>
		<button class="button loading-pulse lighten info" onclick="location='d16em.php';">Expenses By Month</button>
		<button class="button loading-pulse lighten success" onclick="location='d16i.php';">Incomes By Day</button>
		<button class="button loading-pulse lighten success" onclick="location='d16im.php';">Incomes By Month</button>
		<button class="button loading-pulse lighten warning" onclick="location='d16m.php';">Master Data</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th></th>
				<th>Date</th>
				<th>
				Noted / 
			    <small style="color:blue;">Minute</small>
				</th>
				<th>Money</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$tanggal = date("d/m/Y");
		echo $tanggal;
		$res = $link->query("SELECT * FROM cashflow WHERE username ='" .$_SESSION['log1']. "' AND trx ='out' AND dt ='".$tanggal."' ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		$nmoney = $rw['money'];
		?>

			<tr align="center">
				<td></td>
				<td><?php echo $rw['dt']; ?> </td>
				<td>
				<?php echo $rw['note']; ?> / 
				<small style="color:blue;"><?php echo $rw['menit']; ?> Minute</small>
				</td>
				<td><?php echo "Rp " .number_format($nmoney); ?></td>
				<td>
				<a href="d16e.php?u=<?php echo $rw['codx'] ?>">EDIT /</a>
				<a onclick="return confirm('Are you want deleting data')" href="d16d.php?u=<?php echo $rw['codx'] ?>">DEL</a>
				</td>
			</tr>
	
		<?php
		endwhile;
		?>				
					
		</tbody>       
		</table>
		
		
    </div>
		

<!-- Bootstrap Table Js -->
<script src="../mod/bootstrap_table/js/jquery.min.js"></script>
<script src="../mod/bootstrap_table/js/bootstrap.min.js"></script>
<script src="../mod/bootstrap_table/js/metisMenu.min.js"></script>
<script src="../mod/bootstrap_table/js/jquery.dataTables.min.js"></script>
<script src="../mod/bootstrap_table/js/dataTables.bootstrap.min.js"></script>		

         


</div>
<?php include ("../lib/lib2.php"); ?>
</div><!--end wrap-->

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
	
</body>
</html>
