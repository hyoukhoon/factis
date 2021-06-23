<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/header.php";

$num=$_GET['num'];
$result = $mysqli->query("select * from news where num='$num'");
$rs = $result->fetch_object();
;?>
<p>
<h3>뉴스 등록및수정</h3>
</p>
    <div class="col-12 col-md-12 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">

                            <div class="list_table_list01">
                            <table width="100%" border="0" >
                            <colgroup>
                            <col width=100/>
                            <col width="*"/>
                            </colgroup>
                            
                            <tbody>

                                <tr>
                                <th class="color_ch" scope="row">제목</th>
                                <td ><?echo stripslashes($rs->subject);?></td>
                                </tr>
                                <tr>
                                <th class="color_ch" scope="row">태그</th>
                                <td ></td>
                                </tr>
                                <tr>
                                <th class="color_ch" scope="row">내용</th>
                                <td id="pprice">
                                        <?echo content_is2($rs->content);?>
                                        <?php
                                            if($rs->fn1){
                                        ?>
                                        <br>
                                        첨부파일 : <a href="/news/upImages/<?=$rs->fn1?>" target="_blank"><?php echo $rs->fn_name1;?></a>
                                        <?
                                        }
                                        ?>
                                </td>
                                </tr>

                            </tbody>
                            </table>
                        </div>
                            
                        </div>
                    </div>
      
<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/footer.php";?>    
