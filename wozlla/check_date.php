<?php
	$availableDate = "2013-12-31";
	$curDate = date("Y-m-d", time());
	$num = (strtotime($availableDate) - strtotime($curDate)) / 60 / 60 / 24;
	//$obj -> curDate = $curDate;
	//$obj -> availableDays = $num;
	if($num > 0) {
		$obj -> isAvailable = md5("wsik557gj");
	} else {
		$obj -> isAvailable = md5("wsik557g1");
	}
	echo json_encode($obj);
?>