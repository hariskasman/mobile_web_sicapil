<div class="container">
        <div class="no-overflow" style="padding-top: 40px">
		
		<?php
		$res = $link->query("SELECT * FROM menu WHERE username='" .$_SESSION['log1']. "'");
		while ($row = $res->fetch_assoc()):
		?>
		
			<button onclick="location='<?php echo $row ['url']; ?>';" class="shortcut-button bg-cyan bg-active-darkBlue fg-white">
				<span ><img src="<?php echo $row ['pic']; ?>" class="icon"></span>
				<span class="title"><?php echo $row ['name']; ?></span>
				<span class="badge"><?php echo $row ['nom']; ?></span>
			</button>
		
		<?php 
		endwhile;
		?>
		
			
			<br/>
			<br/>
			<br/>			
		</div>
</div>