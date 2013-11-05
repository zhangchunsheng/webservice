<?php
	$availableDate = "2013-12-31";
	$curDate = date("Y-m-d", time());
	$num = (strtotime($availableDate) - strtotime($curDate)) / 60 / 60 / 24;
	$obj -> curDate = $curDate;
	$obj -> availableDays = $num;
	if($num > 0) {
		$obj -> isAvailable = true;
	} else {
		$obj -> isAvailable = false;
	}
	echo json_encode($obj);
?>