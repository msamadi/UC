<?php 
session_start();

if($_POST["titletxt"]!=""){
	if(isset($_SESSION['id'])){
		$_SESSION['id'] = $_SESSION['id'] +1;
	}else 
		$_SESSION['id'] = 1;
	echo "<script> set_session(".$_SESSION['id']."); </script>";
	$sub = 1;
	if($_POST["mytranc"]){
		$h4 = explode(',',$_POST["mytranc"]);
		$id = explode(',',$_POST["myid"]);
		$style = explode(',',$_POST["mystyle"]);  
		$class = explode(',',$_POST["myclass"]);
		foreach($id as $key => $idch ){
			echo '<div><input type="checkbox" checked="checked" class="'.$class[$key].'" onclick="aaa('.$idch .')" style="'.$style[$key].'" id="'.$idch .'" />';
			echo '&nbsp;&nbsp;<h3 style="display:inline" id="h'.$idch.'">'.$h4[$key].'</h3>&nbsp;&nbsp;<a href="#" onclick="$(this).parent().remove()">remove</a></div>';
			if(isset($_POST["selectpre"])){
				if($_POST["selectpre"]== 'h'.$idch){
					echo '<input type="checkbox" checked="checked" class="'.$idch .'" onclick="aaa('.$_SESSION["id"].')" style="float:left;margin-left:20px" id="'.$_SESSION["id"].'" />';
					echo '<h3 id="h'.$_SESSION["id"].'">'.$_POST["titletxt"].'</h3>';
					$sub = 0;
				}
				else{$sub = 0;}
			}
		}
	}
	if($sub){ 
		echo '<div><input type="checkbox" checked="checked" onclick="aaa('.$_SESSION["id"].')" style="float:left" id="'.$_SESSION["id"].'" />';
		echo '&nbsp;&nbsp;<h3 style="display:inline" id="h'.$_SESSION["id"].'">'.$_POST["titletxt"].'</h3>&nbsp;&nbsp;<a href="#" onclick="$(this).parent().remove()">remove</a></div>';
	}
}
?>