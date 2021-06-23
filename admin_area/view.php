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
                                        첨부파일 : 
                                        <?php
                                            $fn=explode(",",$rs->fn1);
                                            foreach($fn as $f){
                                        ?>
                                        <a href="<?=$f?>" target="_blank">
                                                <?php echo $f;?>
                                    </a>
                                        <?
                                            }
                                        }
                                        ?>
                                </td>
                                </tr>

                            </tbody>
                            </table>
                            <div style="float:right;">
    <a href="write.php">
        <a href="list.php">
            <button type="button" class="btn btn-secondary">목록</button>
        </a>
        <a href="edit.php?num=<?php echo $rs->num;?>">
            <button type="button" class="btn btn-secondary">수정</button>
        </a>
        <a href="del.php?num=<?php echo $rs->num;?>" onclick="return confirm('삭제하시겠습니까?');">
            <button type="button" class="btn btn-secondary">삭제</button>
        </a>
    </a>
</div>

                        </div>
                        
                        </div>
                    </div>
      
<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/footer.php";?>    
