<?php

$harga =array("Rp.50000" ,"Rp.30000" , "Rp.25000" , "Rp.12000" , "Rp.12000" , "Rp.25000", "Rp.10000" , "Rp.100000");

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>tugas1</title>
 </head>
 <body>
 	<h1>DAFTAR MENU</h1>
 	<ul>
 		<?php foreach ($daftarmenu as $m ) :?>
		<br>
		<li>NASI GORENG : <?= $m [0]; ?></li>
		<li>NASI TIMBEL : <?= $m [1]; ?></li>
		<li>NASI RAMEN : <?= $m [2]; ?></li>
		<li>TEMPE : <?= $m [3]; ?></li>
		<li>TAHU : <?= $m [4]; ?></li>
		<li>AIR MINERAL : <?= $m [5]; ?></li>
		<li>TEH MANIS : <?= $m [6]; ?></li>
		<li>ANEKA JUS : <?= $m [7]; ?></li>
<?php endforeach;  ?>
 	</ul>
 
 </body>
 </html>