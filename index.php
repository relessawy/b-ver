<?php	
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<H1>Version B</H1>
<img src="b-abtesting.png">
<div>
<?php 
 echo "My Pod IP is : ".$_SERVER['SERVER_ADDR'] ;
 ?>
</div>
