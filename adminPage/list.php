<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/header.php";


$multi=$_GET["multi"];
$place=$_GET["place"];
$cate=$_GET["cate"];
$ismain=$_GET["ismain"];

// if($multi){
//     $where = " and multi=".$multi;
// }

if($ismain){
    $where .= " and ismain='".$ismain."'";
}

if($place){
    $where .= " and place='".$place."'";
}

if($cate){
    $where .= " and cate='".$cate."'";
}

$que2="SELECT count(*) FROM news c where 1=1 $where";
// echo $que2."<br>";
// exit;
$result2 = $mysqli->query($que2) or die("22:".$mysqli->error);
$rs2 = $result2->fetch_array();
$total=$rs2[0];

$que="SELECT * FROM news c where 1=1 $where";
$LIMIT=$_GET['LIMIT']??30;
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
//$limit_query=" order by num desc ";
$last_query=$que.$limit_query;
$result = $mysqli->query($last_query) or die("45:".$mysqli->error);
while($rs = $result->fetch_object()){
    $rsc[]=$rs;
}

?>
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

            <!-- Main Content -->
            <div id="content">

                <?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/topbar.php";?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">뉴스 리스트</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <select class="custom-select rounded-0" id="ismain" name="ismain" style="width:auto;" onchange="placeis()">
                                <option value="" <?php if(!isset($ismain)){echo "selected";}?>>메인전체</option>
                                <option value="1" <?php if($ismain==1){echo "selected";}?>>Y</option>
                                <option value="0" <?php if(isset($ismain)==0){echo "selected";}?>>N</option>
                            </select>
                            <select class="custom-select rounded-0" id="place" name="place" style="width:auto;" onchange="placeis()">
                                <option value="" >위치전체</option>
                                <?php
                                    foreach($placeArray as $key => $pa){
                                ?>
                                    <option value="<?php echo $pa;?>" <?php if($place==$pa){echo "selected";}?>><?php echo $key;?></option>
                                <?php }?>
                            </select>
                            &nbsp;
                            <select class="custom-select rounded-0" style="width:auto;" id="cate" onchange="placeis()">
                            <option value="" >카테고리전체</option>
                            <?php
                                foreach($category as $ct){
                            ?>
                                <option value="<?php echo $ct;?>" <?php if($cate==$ct){echo "selected";}?>><?php echo $ct;?></option>
                            <?php }?>
                            </select>

                            <div style="float:right;">
                                <button type="button" class="btn btn-secondary" id="ismain" onclick="mainis()">메인변경</button>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th><input type="checkbox" class="chkAll" onclick="chkAll()" id="chkAll"></th>
                                            <th>메인</th>
                                            <th>썸네일</th>
                                            <th>제목</th>
                                            <th>날짜</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                        <th>선택</th>
                                            <th>썸네일</th>
                                            <th>제목</th>
                                            <th>날짜</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
<?php
    foreach($rsc as $p){
        $img="";
        $img=explode(",",$p->fn1);
        $gubun=0;
        //$gubun=$p->gubun??0;

        //엘라스틱 입력
        $data = '{
                "id" : '.$p->num.',
                "title" : "'.$p->subject.'",
                "main_text" : "'.$p->main_text.'",
                "cate" : "'.$p->cate.'",
                "place" : "'.$p->place.'",
                "youtube" : "'.$p->url.'",
                "thumb" : "'.$img[0].'",
                "cnt" : '.$p->cnt.',
                "site_num" : '.$p->num.',
                "like" : '.$p->good.',
                "ismain" : '.$p->ismain.',
                "reg_date" : "'.$p->reg_date.'",
                "gubun" : '.$gubun.'
            }';
            // echo "<pre>";
            // echo $data;
            
            $url="localhost:9200/news/post/".$p->num;
		    $rs=elaCurl($url,$data);
?>                                                 
        <tr align="center">
            <td><input type="checkbox" class="chkbx" name="num[]" id="chkid" value="<?php echo $p->num;?>"></td>
            <td>
                <?php
                    if($p->ismain){ echo "Y";}else{echo "N";}
                ?>
            </td>
            <td>
            <?php 
                    if(!empty($img)){
                    ?>
                        <a href="view.php?num=<?php echo $p->num;?>"><img src="<?php echo $img[0];?>" width="100"></a>
                    <?php }?>
            </td>
            <td align="left"><a href="view.php?num=<?php echo $p->num;?>"><?php echo $p->subject;?></a></td>
            <td><?php echo date("Y.m.d",strtotime($p->reg_date));?></td>
        </tr>
<?php 
}?>                                           
                                        
                                    </tbody>
                                </table>

<!-- 페이징 -->
<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
	<ul class="pagination">
    <?php if($f_no!=1){?>
		<li class="paginate_button page-item previous disabled" id="dataTable_previous">
            <a class="page-link" href="<?=$_SERVER['PHP_SELF']?>?mode=<?=$mode?>&page=<?=$p_f_no?>&f_no=<?=$p_f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>" class="page-link">Previous</a>
		</li>
    <?php }?>
    <?php for($i=$f_no;$i<=$l_no;$i++){?>
        <?php if($i==$page){?>
		    <li class="paginate_button page-item active"><a href="#" class="page-link"><?php echo $i;?></a></li>
        <?php } else {?>
		    <li class="paginate_button page-item "><a class="page-link" href="<?=$PHP_SELF?>?mode=<?=$mode?>&page=<?=$i?>&f_no=<?=$f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>" class="page-link"><?=$i?></a></li>
        <?php }?>
    <?php }?>
	<?php if($l_no<$total_page){?>
		<li class="paginate_button page-item next" id="dataTable_next">
        <a class="page-link" href="<?=$_SERVER['PHP_SELF']?>?mode=<?=$mode?>&page=<?=$n_f_no?>&f_no=<?=$n_f_no?>&gubun=<?=$gubun?>&ord=<?=$ord?>&s_key=<?=$s_key?>&sword=<?=$sword?>&site_json=<?=$site_json?>&m2=<?=$m2?>&orderby=<?=$orderby?>" class="page-link">Next</a>
		</li>
    <?php }?>
	</ul>
</div>
    <div style="float:right;">
        <a href="write.php">
            <button type="button" class="btn btn-secondary">등록</button>
        </a>
    </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<script>
    function placeis(){
        var place=$("#place option:selected").val();
        var cate=$("#cate option:selected").val();
        var ismain=$("#ismain option:selected").val();

        location.href='list.php?cate='+cate+'&place='+place+'&ismain='+ismain;
        
    }

    // $(".chkAll").click( function() {
    //     $('.chkbx').prop( 'checked', this.checked );
    //     alert('haha');
    // });

    function chkAll(){

        var cnt=$("input[id='chkAll']:checked").length;
        if(cnt==1){
            $("input[id='chkid']:checkbox").prop("checked", "checked");
        }else{
            $("input[id='chkid']:checkbox").prop("checked", false);
        }
        //alert(JSON.stringify(checkArray));
    }

    function mainis(){

        var checkArray=new Array();
        var cnt=0;
        var uid="";
        $('input:checkbox[id="chkid"]:checked').each(function() {
			//checkArray[cnt]=this.value;//배열로 저장
            uid+=this.value+",";
			cnt++;
	    });

        //alert(uid);

        var params = "uid="+uid;
		// console.log(params);
        // return;
		$.ajax({
			  type: 'post'
			, url: 'mainChange.php'
			, data : params
			, dataType : 'json'
			, success: function(data) {
				//console.log(data.result);

				if(data.result==1){
					alert('수정했습니다.');
					location.reload();
				}else if(data.result==-1){
					alert(data.val);
					return;
				}else{
					alert('다시 시도해 주십시오.');
					return;
				}
			  }
		});	

    }


    
</script>


<?php 



include $_SERVER["DOCUMENT_ROOT"]."/adminPage/footer.php";            ?>



    <!-- Page level plugins -->
    <!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="js/demo/datatables-demo.js"></script> -->

