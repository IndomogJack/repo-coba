<?php
include "config_shoping.php";
$posta=$_POST['data'];
var_dump($posta);
$hasil = mysql_query ("select * from tabel where product like '%$posta'");
while ($data=mysql_fetch_array($hasil))
{
	echo '<div class="shoping">
			<img src="images/shop.jpg">
			<h5><strong>'.$data['product'].'</strong></h5>
			<h5>Rp. 1.000.000</h5>
			<a href="#">BELI</a><br>
			<a href="#">BELI CEPAT</a>
		</div>';
}
?>