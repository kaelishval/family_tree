<?php 
	include_once('db_conn.php');

	$memberName = $_GET['name'];
	$memberGender = $_GET['gender'];
	$memberAge = $_GET['age'];
	// $memberPic = $_POST['pic']
	// $memberRelation = $_POST['relation'];

 //    $sql = "INSERT INTO members ('memberName','memberGender','memberAge','memberPic','memberRelation') VALUES ($memberId,$memberName,$memberGender,$memberAge,$memberPic,$memberRelation";

	// echo $memberName;
	// echo $memberGender;
	// echo $memberAge;
	$sql = 'INSERT INTO members(memberName,memberGender,memberAge) VALUES("'.$memberName.'","'.$memberGender.'",'.$memberAge.')';

?>