<?php 
include ("../sec/1.php"); 
include("d1s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 82.75rem;
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
        <form action="../inc/d1e.php" method="post">

			<div align="center">
            <h1 class="text-light"><small><h3>EDIT POST</h3></small></h1>
			<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
			<input type="text" name="tgl" placeholder="tanggal ..." value="<?php echo $rsa ['tgl']?>" >
			<input type="hidden" name="username" value="<?php echo $_SESSION[log1]; ?>" >
			</div>
            <hr class="thin"/>
            <br />
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="name">Name :</label>
                <input type="text" placeholder="isi name page.." name="name" value="<?php echo $rsa['name']; ?>" size="25" >
            </div>
            <br />
            <br />
			<div class="input-control text full-size" data-role="input">
                <label for="namecolor">Name Color:</label>
                <input type="text" placeholder="isi name color.." name="name_col" value="<?php echo $rsa['name_col']; ?>" size="25" >
            </div>
            <br />
            <br />
            <div class="input-control full-size" data-role="input">
                <label for="title">Title :</label>
                <input type="text" placeholder="isi title page.." name="judul" value="<?php echo $rsa['judul']; ?>" size="25" >
            </div>
            <br />
            <br />
			<div class="input-control full-size" data-role="input">
                <label for="sdes">Sort Description :</label>
                <textarea name="sdes" rows="5" cols="26"><?php echo $rsa['sdes']; ?></textarea> 
            </div> 
            <br />
            <br />
			<br />
            <br />
			<br />
			<br />
			<div class="input-control full-size" data-role="input">
                <label for="des">Description :</label>
				<a onclick="location='http://bestonlinehtmleditor.com/';" href="http://bestonlinehtmleditor.com/"> HTML EDITOR </a>
                <textarea name="des" rows="5" cols="26"><?php echo $rsa['des']; ?></textarea> 
            </div> 
            <br />
            <br />
			<br />
            <br />
			<br />
			<br />
			<div class="input-control full-size" data-role="input">
                <input type="text" placeholder="description color.." value="HINT : Isi dari Description ini sangat menentukan kesesuaian ukuran gambar, jika gambar besar maka di haruskan isi dari description ini harus banyak agar tampilan halaman depan bisa di sesuaikan" size="25" readonly>
            </div>
			<br />
			<br />
			<br />
            <div class="input-control full-size" data-role="input">
                <label for="desc">Description Color :</label>
                <input type="text" placeholder="description color.." name="des_color" value="<?php echo $rsa['des_color']; ?>" size="25" >
            </div>
			<br />
            <br />
			<div class="input-control full-size" data-role="input">
                <label for="picture">Pictures :</label>
                <input type="text" placeholder="isi picture link.." name="pic" value="<?php echo $rsa['pic']; ?>" size="25" >
            </div>
			<br />
            <br />
			<div class="input-control full-size" data-role="input">
			WT : <input type="text" name="width" value="<?php echo $rsa['width']; ?>" size="25" >
			<br />
			HT : <input type="text" name="height" value="<?php echo $rsa['height']; ?>" size="25" >
			</div>
			<br />
            <br />
			<br />
            <br />
			<br />
			<div class="input-control full-size" data-role="input">
                <input type="text" placeholder="description color.." value="HINT : Gambar ini bisa untuk tampilan depan,ukurannya bisa di sesuaikan dengan isi text dari description untuk tampilan halaman utama" size="25" readonly>
            </div>
            <br />
			<br />
            <br />
            <div class="input-control full-size" data-role="input">
                <label for="menu">Info Menu :</label>
                <select >
					<option value="off">---</option>
					<option value="home">home - Berada di Page Content</option>
					<option value="post">post - Berada di Page Menu Ketika Klik Bentuk Postingan List</option>
					<option value="images">images - Berada di Content Bentuk Image</option>
					<option value="image">image - Berada di Sub Menu jika di isi sort nya</option>
				</select>
            </div>
			<div class="input-control full-size" data-role="input">
                <input type="text" placeholder="menu.." name="stat" value="<?php echo $rsa['stat']; ?>" size="25" >
            </div>
			<br />
            <br />
			<div class="input-control full-size" data-role="input">
                <label for="menu">Info Sort :</label>
                <select >
					<option value="off">---</option>
					<option value="on">image + sort - maka akan muncul tampilan gambar di sub page</option>
					<option value="off">post + sort - maka akan muncul tampilan posting di sub page</option>
					<option value="off">images + sort - maka bisa arahkan dari home page ke sub page</option>
				</select>
            </div>
			<br />
            <br />
			<div class="input-control full-size" data-role="input">
			Kategori : <input type="text" id="myText" name="kat" value="<?php echo $rsa['kat']; ?>" size="25" readonly>
			</div>
			<br />
            <br />
            <br />
			<div class="input-control password full-size" data-role="input">
                <label for="picture">Change Kategori :</label>
                <select id="mySelect" onchange="myFunction()" name="">
					<option value="off">---</option>
					
					<?php
					$res = $link->query("SELECT * FROM post_kat ORDER BY id DESC");
					while ($rw = $res->fetch_assoc()):
					?>
					<option value="<?php echo $rw ['name']; ?>"><?php echo $rw ['name']; ?></option>
					<?php
					endwhile;
					?>
					
				</select>
            </div>
			
<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("myText").value = x;
}
</script>
			
			<br />
            <br />
            <div class="input-control full-size" data-role="input">
				<label for="menu">Sort :</label>
                <input type="text" placeholder="isi sort page.." name="sort" value="<?php echo $rsa['sort']; ?>" size="25" >
            </div>
            <br />
            <br />
            <div >
                <button type="submit" class="button primary loading-cube light">Enter</button>
               </form>
            </div>
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
