<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/header.php";
$num=$_GET['num'];
$result = $mysqli->query("select * from news where num='$num'");
$rs = $result->fetch_object();
?>
<style>
    .childImg{
        max-width:90%;
    }
</style>
<link href="/adminPage/css/adminlte.css" rel="stylesheet">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/topbar.php";?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- 시작 -->

                <div class="col-md-12">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                        
                        <h3 class="widget-user-username"><?echo stripslashes($rs->subject);?></h3>
                        <p class="username"><?echo stripslashes($rs->main_text);?></p>
                        <span class="description"><?php echo date("Y.m.d H:i:s",strtotime($rs->reg_date));?></span>
                        </div>
                        <!-- /.user-block -->
                        <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" title="Mark as read">
                            <i class="far fa-circle"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                        </div> -->
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        
                            <?echo content_is2($rs->content);?>
                            <div class="card-footer bg-white">
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix" id="thumbnails">

                                <?php
                                if($rs->fn1){
                                $fn=explode(",",$rs->fn1);
                                $fn2=explode(",",$rs->fn2);
                                $k=0;
                                foreach($fn as $f){
                                    if($f){
                                    $fid=explode(".",$f);
                                    $fid=str_replace("/news/upImages/","",$fid[0]);
                                ?>

                                <li id="<?php echo $fid;?>">
                                    <span class="mailbox-attachment-icon has-img"><img src="<?php echo $f;?>" style="height:132px;padding:10px; width:198px;" alt="Attachment"></span>
                                    <div class="mailbox-attachment-info">
                                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i><?php echo $fn2[$k];?></a>
                                    </div>
                                </li>
                                    
                                <?php 
                                    $k++;
                                    }
                                }
                                }
                                ?>

                                
                            </ul>
                            </div>


                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">127 likes - 3 comments</span>
                    </div>
                    <!-- /.card-body -->
                    
                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <div style="float:right;">
                            <a href="write.php">
                                <a href="list.php">
                                    <button type="button" class="btn btn-secondary">목록</button>
                                </a>
                                <a href="write.php?num=<?php echo $rs->num;?>">
                                    <button type="button" class="btn btn-secondary">수정</button>
                                </a>
                                <a href="del.php?num=<?php echo $rs->num;?>" onclick="return confirm('삭제하시겠습니까?');">
                                    <button type="button" class="btn btn-secondary">삭제</button>
                                </a>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>

                    
                <!-- 끝 -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/footer.php";            ?>            