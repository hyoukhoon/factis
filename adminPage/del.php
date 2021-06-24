<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/inc/dbcon.php";


$num=$_GET['num'];

	$result=$mysqli->query("select * from news where num='$num' $where") or die("3:".$mysqli->error);
	$rs = $result->fetch_object();
	$file=$rs->file_list;
    $att=$rs->fn1;
	if($file){
		$delFile=explode(",",$file);
		for($i=0;$i<sizeof($delFile);$i++){
			unlink($_SERVER['DOCUMENT_ROOT'].trim($delFile[$i]));
		}
	}

    if($att){
		$delFile=explode(",",$att);
		for($i=0;$i<sizeof($delFile);$i++){
			unlink($_SERVER['DOCUMENT_ROOT'].trim($delFile[$i]));
		}
	}
	
	$query="delete from news where num='$num' $where";
	$sql1=$mysqli->query($query) or die("3:".$mysqli->error);


	if($sql1){

		location_is('list.php','','삭제했습니다');
	}else{
		location_is('','','다시 시도해주십시오.');
	}

	
?>