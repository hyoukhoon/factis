<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/header.php";


$multi=$_GET["multi"];

if($multi){
    $where = " and multi=".$multi;
}

$que2="SELECT count(*) FROM news c where 1=1 $where";
$result2 = $mysqli->query($que2) or die("3:".$mysqli->error);
$rs2 = $result2->fetch_array();
$total=$rs2[0];

$que="SELECT * FROM news c where 1=1 $where";
$LIMIT=$_GET['LIMIT']??12;
$page=$_GET['page']??1;
$start_page=($page-1)*$LIMIT;
$end_page=$LIMIT;
$ps=$LIMIT;//한페이지에 몇개를 표시할지
$sub_size=10;//아래에 나오는 페이징은 몇개를 할지
$total_page=ceil($total/$ps);//몇페이지
$f_no=$_GET['f_no']??1;//첫페이지
if($f_no<1)$f_no=1;
$l_no=$f_no+$sub_size-1;//마지막페이지
if($l_no>$total_page)$l_no=$total_page;
$n_f_no=$f_no+$sub_size;//다음첫페이지
$p_f_no=$f_no-$sub_size;//이전첫페이지
$no=$total-($page-1)*$ps;//번호매기기

//$limit_query=" order by num desc limit $start_page, $end_page";
$limit_query=" order by num desc ";
$last_query=$que.$limit_query;
$result = $mysqli->query($last_query) or die("3:".$mysqli->error);
while($rs = $result->fetch_object()){
    $rsc[]=$rs;
}


?>
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/topbar.php";?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- 시작 -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">뉴스 리스트</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>썸네일</th>
                            <th>제목</th>
                            <th>날짜</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
    foreach($rsc as $p){
        $img="";
        $img=explode(",",$p->file_list);
?>        
    <tr>
        <td><input type="checkbox" name="num[]" id="n_<?php echo $p->num;?>" value="<?php echo $p->num;?>"></td>
        <td>
            <?php 
            if(!empty($img)){
            ?>
                <a href="view.php?num=<?php echo $p->num;?>"><img src="<?php echo $img[0];?>" width="50"></a>
            <?php }?>
        </td>
        <td>
            <a href="view.php?num=<?php echo $p->num;?>"><?php echo $p->subject;?></a>
        </td>
        <td><?php echo date("Y.m.d",strtotime($p->reg_date));?></td>
    </tr>
<?php 
}?>
                            
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
        <?php if($f_no!=1){?>
            <li class="page-item">
            <a class="page-link" href="<?=$_SERVER['PHP_SELF']?>?mode=<?=$mode?>&page=<?=$p_f_no?>&f_no=<?=$p_f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>">&laquo;</a>
		</li>
        <?php }?>
        <?php for($i=$f_no;$i<=$l_no;$i++){?>
            <?php if($i==$page){?>
                <li class="page-item"><a href="#" class="page-link"><?php echo $i;?></a></li>
            <?php } else {?>
                <li class="page-item"><a class="page-link" href="<?=$PHP_SELF?>?mode=<?=$mode?>&page=<?=$i?>&f_no=<?=$f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>" class="page-link"><?=$i?></a></li>
            <?php }?>
        <?php }?>

        <?php if($l_no<$total_page){?>
            <li class="page-item">
                <a class="page-link" href="<?=$_SERVER['PHP_SELF']?>?mode=<?=$mode?>&page=<?=$n_f_no?>&f_no=<?=$n_f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>">&raquo;</a>
		    </li>
        <?php }?>

        </ul>
    </div>
                </div>
                <!-- /.card -->

                    
                <!-- 끝 -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/footer.php";            ?>            