<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/inc/dbcon.php";


    $fn=$_GET["fn"]??$_POST["fn"];
    $rs=unlink($_SERVER['DOCUMENT_ROOT'].trim($fn));

	if($rs){
		$data=array("result"=>1,"val"=>"성공"); 
	}else{
		$data=array("result"=>0,"val"=>"실패"); 
	}

	echo json_encode($data);

	
?>