<?php  
include ("config.php");
$result = $link->query("SELECT * FROM pengguna");
$jsArray = "var prdName = new Array();\n";  
			
while ($rows = mysqli_fetch_array($result)) 
{  

$jsArray .= "prdName['" . $rows['username'] . "'] = 
{	
xnp:'" . addslashes($rows['username']) . "',
st:'".addslashes($rows['stores'])."',
m1p:'".addslashes($rows['a'])."',
m2p:'".addslashes($rows['b'])."',
m3p:'".addslashes($rows['c'])."',
m4p:'".addslashes($rows['d'])."',
m5p:'".addslashes($rows['e'])."',
m6p:'".addslashes($rows['f'])."',
m7p:'".addslashes($rows['g'])."',
m8p:'".addslashes($rows['h'])."',
m9p:'".addslashes($rows['i'])."',
m10p:'".addslashes($rows['j'])."',
m11p:'".addslashes($rows['k'])."',
m12p:'".addslashes($rows['l'])."',
m13p:'".addslashes($rows['m'])."',
m14p:'".addslashes($rows['n'])."',
m15p:'".addslashes($rows['o'])."',
m16p:'".addslashes($rows['p'])."',
m17p:'".addslashes($rows['q'])."',
m18p:'".addslashes($rows['r'])."',
m19p:'".addslashes($rows['s'])."',
m20p:'".addslashes($rows['t'])."',
m21p:'".addslashes($rows['u'])."',
m22p:'".addslashes($rows['v'])."',
m23p:'".addslashes($rows['w'])."',
m24p:'".addslashes($rows['x'])."',
m25p:'".addslashes($rows['y'])."',
m26p:'".addslashes($rows['z'])."',
m27p:'".addslashes($rows['za'])."',
m28p:'".addslashes($rows['zb'])."',
m29p:'".addslashes($rows['zc'])."',
xp:'".addslashes($rows['codx'])."'};\n"; 
}  
	
	
?>