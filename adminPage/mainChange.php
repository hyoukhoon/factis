<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/inc/dbcon.php";

// if(!$_SESSION['loginValue']['SEMAIL']){
//     $data=array("result"=>-1,"val"=>"로그인하십시오."); 
//     echo json_encode($data);
//     exit;
// }


    $uid=$_POST['uid']??$_GET['uid'];

    $uid=rtrim($uid,",");
	$query="update news set ismain = case when ismain=1 then 0 else 1 end where num in (".$uid.")";
    echo $query;
    exit;

	$sql1=$mysqli->query($query) or die("3:".$mysqli->error);


	if($sql1){
		$data=array("result"=>1,"val"=>"성공"); 
	}else{
		$data=array("result"=>0,"val"=>"실패"); 
	}

	echo json_encode($data);
?>