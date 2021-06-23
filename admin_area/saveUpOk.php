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
	$youtube=removeHackTag($_POST['youtube']);
	$imgUrl=$_POST['imgUrl'];
    $attachFile=$_POST['attachFile'];
	$content=$_POST['content'];
	$content=addslashes($content);

	$mysqli->autocommit(FALSE);

	$query="INSERT INTO `news`
        (`name`,
        `email`,
        `subject`,
        `url`,
        `file_list`,
        `fn1`,
        `content`,
        `multi`)
        VALUES
        ('$name',
        '$email',
        '$subject',
        '$youtube',
        '$imgUrl',
        '$attachFile',
        '$content',
        '$multi');";

        // echo $query;
        // exit;

	$sql1=$mysqli->query($query) or die("3:".$mysqli->error);


	if($sql1){

		$mysqli->commit();
		$data=array("result"=>1,"val"=>"성공"); 
	}else{
		$data=array("result"=>0,"val"=>"실패"); 
	}

	echo json_encode($data);
?>