<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "family";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

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

	if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

?>