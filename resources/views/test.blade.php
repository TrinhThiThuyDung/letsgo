<?php
$end_time =  new DateTime();
$start_time = new DateTime("2016-05-04 05:59:14");
$since_start = $start_time->diff($end_time);
if ($since_start->y != 0) {
	echo $since_start->y." năm";
}elseif ($since_start->m != 0) {
	echo $since_start->m." tháng";
}elseif ($since_start->d != 0) {
	echo $since_start->d." ngày";
}elseif ($since_start->h != 0) {
	echo $since_start->h." giờ";
}elseif ($since_start->i != 0) {
	echo $since_start->i." phút";
}else{
	echo $since_start->s." giây";
}

 ?>