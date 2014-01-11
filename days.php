<?php
$years = $_POST['year'];
$months = $_POST['month'];
$days = 0;
$is_leap_year = (($years % 4) == 0) ? true : false;



if(in_array($months, array(1,3,5,7,8,10,12))) {
	$days = 31;
}else if (in_array($months, array(4,6,9,11))){
	$days = 30;	
}else if($months == 2){
	if($is_leap_year){
		$days = 29;
	}else{
		$days = 28;
	}
}else {
	$days = false;
}


if($days != false){
	echo json_encode(
			array(
				'result' => 'success',
				'days' => $days
				)
		);
}else {
	echo json_encode(
			array(
				'result' => 'failed',
				'days' => 'Unable to get days'
				)
		);
}
?>