<?php 
$con = new mysqli("localhost","root","","sayda");

if ($con) {
	echo "bien conectado";
}else{
	echo "mal conectado";
}	
 ?>

