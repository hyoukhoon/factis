<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/inc/dbcon.php";

// if(!$_SESSION['loginValue']['SEMAIL']){
//     $data=array("result"=>-1,"val"=>"로그인하십시오."); 
//     echo json_encode($data);
//     exit;
// }




$email=$_SESSION['loginValue']['SEMAIL'];
$name=$_SESSION['loginValue']['SUNAME'];
$multi=$_GET["multi"]??$_POST["multi"];

	$subject=removeHackTag($_POST['subject']);
	$youtube=$_POST['youtube'];
    $main_text=removeHackTag($_POST['main_text']);
	$imgUrl=$_POST['imgUrl'];
    $attachFile=$_POST['attachFile'];
	$content=$_POST['content'];
	$content=addslashes($content);

	$mysqli->autocommit(FALSE);

	$query="update news set
        subject='".$subject."',
        url='".$youtube."',
        file_list='".$imgUrl."',
        main_text='".$main_text."',
        fn1='".$attachFile."v',
        content'".$content."' 
        where num=".$num;

        echo $query;
        exit;

	$sql1=$mysqli->query($query) or die("3:".$mysqli->error);


	if($sql1){

		$mysqli->commit();
		$data=array("result"=>1,"val"=>"성공"); 
	}else{
		$data=array("result"=>0,"val"=>"실패"); 
	}

	echo json_encode($data);
?>