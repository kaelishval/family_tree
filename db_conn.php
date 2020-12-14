<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "family";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

	$memberFName = $_GET['fname'];
	$memberMName = $_GET['mname'];
	$memberLName = $_GET['lname'];
	$memberGender = $_GET['gender'];
	$memberAge = $_GET['age'];
	$memberBirthday = $_GET['birthday'];
	$memberContact = $_GET['contact'];
	$memberRelation = $_GET['relation'];
	// $memberPic = $_POST['pic']
	// $memberRelation = $_POST['relation'];

 //    $sql = "INSERT INTO members ('memberName','memberGender','memberAge','memberPic','memberRelation') VALUES ($memberId,$memberName,$memberGender,$memberAge,$memberPic,$memberRelation";

	// echo $memberName;
	// echo $memberGender;
	// echo $memberAge;
	$sql = 'INSERT INTO members(memberFName,memberMName,memberLName,memberGender,memberAge,memberBirthday,memberContact,memberRelation) VALUES("'.$memberFName.'","'.$memberMName.'","'.$memberLName.'","'.$memberGender.'",'.$memberAge.',"'.$memberBirthday.'","'.$memberContact.'","'.$memberRelation.'")';

	if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

?>