<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/header.php";

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

$limit_query=" order by num desc limit $start_page, $end_page";
$last_query=$que.$limit_query;
$result = $mysqli->query($last_query) or die("3:".$mysqli->error);
while($rs = $result->fetch_object()){
    $rsc[]=$rs;
}

?>  
<p>
<h3>뉴스리스트</h3>
</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
<?php
    foreach($rsc as $p){
        $img=explode(",",$p->file_list);
?>      
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<?php 
}?>    

  </tbody>
</table>

<!-- 페이징 -->
                <div>
                    <div class="pagination-area">
                        <nav aria-label="#">
                            <ul class="pagination">
                            <?php if($f_no!=1){?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$_SERVER['PHP_SELF']?>?mode=<?=$mode?>&page=<?=$p_f_no?>&f_no=<?=$p_f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Prev</a>
                                </li>
                            <?php }?>
                            <?php for($i=$f_no;$i<=$l_no;$i++){?>
                                <?php if($i==$page){?>
                                    <li class="page-item active">
                                        <a class="page-link" href="#"><?=$i?> <span class="sr-only">(current)</span></a>
                                    </li>
                                <?php } else {?>
                                    <li class="page-item"><a class="page-link" href="<?=$PHP_SELF?>?mode=<?=$mode?>&page=<?=$i?>&f_no=<?=$f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>"><?=$i?></a></li>
                                <?php }?>
                            <?php }?>
                            <?php if($l_no<$total_page){?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$_SERVER['PHP_SELF']?>?mode=<?=$mode?>&page=<?=$n_f_no?>&f_no=<?=$n_f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </li>
                            <?php }?>
                            </ul>
                        </nav>

                    </div>
                </div>

<div>
    <a href="write.php">
    <button type="button" class="btn btn-secondary">등록</button>
</a>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/footer.php";?>  