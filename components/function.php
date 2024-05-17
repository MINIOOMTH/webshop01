<?php 

function alert($txt,$type){
	switch($type){
		case "success":
		echo '<div class="alert alert-success"><i class="fa fa-check fa-lg"></i> '.$txt.'</div>';
		break;
		case "primary":
		echo '<div class="alert alert-primary">'.$txt.'</div>';
		break;
		case "info":
		echo '<div class="alert alert-info">'.$txt.'</div>';
		break;
		case "warning":
		echo '<div class="alert alert-warning"><i class="fa fa-exclamation fa-lg"></i> '.$txt.'</div>';
		break;
		case "danger":
		echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-lg"></i> '.$txt.'</div>';
		break;
		default:
		echo '<div class="alert alert-success">'.$txt.'</div>';
		break;
	}
}

 ?>