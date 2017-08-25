<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> 
<script src="../public/js/jquery-1.8.3.min.js"></script>

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 7px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
body {
    background-image: url("<?php echo $rsx ['pic_bg']; ?>");
    background-repeat: repeat-xy;
}
</style>  
   
<title>Virtual Area</title>


<script>
function scrollWin() {
    window.scrollTo(<?php echo $rs['kiri'] ?>, <?php echo $rs['atas'] ?>);
}
</script>
	  
<script type="text/javascript">
         <!--
            var imgObj = null;
            
            function init(){
               imgObj = document.getElementById('myImage');
               imgObj.style.position= 'relative'; 
               imgObj.style.left = '<?php echo $rs['kiri'] ?>px'; 
			   imgObj.style.top = '<?php echo $rs['atas'] ?>px'; 
            }
            
            function moveRight(){
               imgObj.style.left = parseInt(imgObj.style.left) + 10 + 'px';
            }
			
			function moveLeft(){
               imgObj.style.left = parseInt(imgObj.style.left) - 10 + 'px';
            }
			
			function moveUp(){
               imgObj.style.top = parseInt(imgObj.style.top) - 10 + 'px';
            }
			
			function moveDown(){
               imgObj.style.top = parseInt(imgObj.style.top) + 10 + 'px';
            }
            
            window.onload =init;
         //-->
		 
		var currentValue = <?php echo $rs['kiri'] ?>;
        var currentVal = <?php echo $rs['atas'] ?>;
		
		var kiri = function(valueTokiri){
            currentValue += valueTokiri;
            document.getElementById('left').value = currentValue;
        };
		
		var atas = function(valueToatas){
            currentVal += valueToatas;
            document.getElementById('atas').value = currentVal;
        };
      </script>
	  
	  
<link rel="stylesheet" type="text/css" href="../public/css/component1.css" />
<script src="../public/js/modernizr-2.6.2.min.js"></script>
