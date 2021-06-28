<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/header.php";
$num=$_GET['num'];
$result = $mysqli->query("select * from news where num='$num'");
$rs = $result->fetch_object();
?>
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
                        <span class="username"><?echo stripslashes($rs->main_text);?></span>
                        <span class="description"><?php echo date("Y.m.d",strtotime($p->reg_date));?></span>
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
                            <?php
                                if($rs->fn1){
                            ?>
                            <br>
                            첨부파일 : 
                            <?php
                                $k=1;
                                $fn=explode(",",$rs->fn1);
                                foreach($fn as $f){
                                    
                            ?>
                            <a href="<?=$f?>" target="_blank">
                                    첨부파일<?php echo $k;?>
                        </a>
                            <?php
                                $k++;
                                }
                            }
                            ?>

                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">127 likes - 3 comments</span>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer card-comments">
                        <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                            Maria Gonzales
                            <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                        <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                            Luna Stark
                            <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                    </div>
                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <form action="#" method="post">
                        <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                        </div>
                        </form>
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