<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="border-color:white;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color:#00BF9A;color:#FFFFFF;">
	   <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><img src="up/logo.png" width="50px" height="50px">&nbsp;Registration</h4>
       </div>
	    <form action="inc/d1a.php" method="post">
		<input type="hidden" name="tgl" value="<?php echo date ("d/m/Y"); ?>" >
		<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
        
		<div class="modal-header" >
		  
		  <div class="input-control password full-size">
          <label for="recipient-name" class="control-label" style='color:white'>NAME :</label>
          <input type="text" style="background-color:#00BF9A;color:white;border-color:white;" name="fullname" value="" required>
          </div><br/><br/>
		  
		  <div class="input-control password full-size">
          <label for="recipient-name" class="control-label" style='color:white'>ALAMAT LENGKAP :</label>
          <input type="text" style="background-color:#00BF9A;color:white;border-color:white;" name="des" value="" required>
          </div><br/><br/>
		  
		  <div class="input-control password full-size">
          <label for="recipient-name" class="control-label" style='color:white'>NO HP :</label>
          <input type="text" style="background-color:#00BF9A;color:white;border-color:white;" name="hp" value="" required>
          </div><br/><br/>
		  
		  <div class="input-control password full-size">
          <label for="recipient-name" class="control-label" style='color:white'>USERNAME :</label>
          <input type="text" style="background-color:#00BF9A;color:white;border-color:white;" name="username" value="" required>
          </div><br/><br/>
		  
		  <div class="input-control password full-size">
          <label for="recipient-name" class="control-label" style='color:white'>PASSWORD :</label>
          <input type="password" style="background-color:#00BF9A;color:white;border-color:white;" name="password" value="" required>
          </div><br/><br/>
        </div>
		
        <div class="modal-footer" style="background-color:#00BF9A;">
		  <button type="submit" style="background-color:#00BF9A;color:white;border-color:white;" class="button primary loading-cube light" >&nbsp;SIGN UP</button>
        </form>
		  
		  <button type="button" style="background-color:#00BF9A;color:white;border-color:white;" class="button primary loading-cube light">&nbsp;EXIT</button>
        </div>
      </div>
      
    </div>
  </div>