<?php 
//$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//$segments = explode('/', $url);
session_start();
//At last 49 steps 
for($i = 1; $i < 50; $i++){
	if($_POST["ins".$i]!="")
		echo "<li class=".$_SESSION['id']."><div>".$_POST["ins".$i]."</div></li>";	
}
?>