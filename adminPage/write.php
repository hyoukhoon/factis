<?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/header.php";

$num=$_GET['num'];
if($num){
  $result = $mysqli->query("select * from news where num='$num'");
  $rs = $result->fetch_object();
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include $_SERVER["DOCUMENT_ROOT"]."/adminPage/topbar.php";?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- 시작 -->

                <p>
<h3>뉴스 등록및수정</h3>
</p>
    <div class="col-12 col-md-12 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                            
                            <!-- Contact Form -->
                            <form action="#" method="post">
                            
                            <input type="hidden" name="imgUrl" id="imgUrl" value="">
                            <input type="hidden" name="attachFile" id="attachFile" value="">
                                <div class="form-group">
                                    제목 : <input type="text" class="form-control" id="subject" placeholder="제목" value="<?echo stripslashes($rs->subject);?>">
                                </div>
                                <div class="form-group">
                                    유튜브링크 : <textarea class="form-control" id="youtube" rows="3"><?echo stripslashes($rs->url);?></textarea>
                                </div>
                                <div class="form-group">
                                    간략글 : <textarea class="form-control" id="main_text" rows="3"><?echo stripslashes($rs->main_text);?></textarea>
                                </div>
                                <div class="form-group">
                                <div id="summernote"><?echo content_is2($rs->content);?></div>
                                </div>
                                <div class="form-group">
                                    <div id="attach_site">
                                      썸네일 : 
                                        <div id="attachFiles">
                                        </div>
                                        <input type="file" multiple class="form-input" name="afile" id="afile" />
                                    </div>
                                </div>
                                <?php if($num){?>
                                  <button type="button" class="btn btn-dark"  onclick="editUp();">수정하기</button>
                                <?php }else{?>
                                  <button type="button" class="btn btn-dark"  onclick="saveUp();">등록하기</button>
                                <?php }?>
                            </form>
                        </div>
                    </div>                

                    
                <!-- 끝 -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php //include $_SERVER["DOCUMENT_ROOT"]."/adminPage/footer.php";            ?>            

<script>
    $(document).ready(function () {
    var $summernote = $('#summernote').summernote({
		codeviewFilter: false,
		codeviewIframeFilter: true,
        lang: 'ko-KR',
        height: 800,
        callbacks: {
        onImageUpload: function (files) {
				for(var i=0; i < files.length; i++) {
					if(i>20){
						alert('20개까지만 등록할 수 있습니다.');
						return;
					}
                }
                for(var i=0; i < files.length; i++) {
					if(i>20){
						alert('20개까지만 등록할 수 있습니다.');
						return;
					}
				sendFile($summernote, files[i]);
			  } 
                
            }
        }
    });
});

function sendFile($summernote, file) {
    var formData = new FormData();
    formData.append("file", file);
    $.ajax({
        url: 'saveImage.php',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function (data) {
			if(data==-1){
				alert('용량이 너무크거나 이미지 파일이 아닙니다.');
				return;
			}else{
				$summernote.summernote('insertImage', data, function ($image) {
					$image.attr('src', $.trim(data));
					$image.attr('class', 'childImg');
				});
				var imgUrl=$("#imgUrl").val();
				if(imgUrl){
					imgUrl=imgUrl+",";
				}
				$("#imgUrl").val(imgUrl+$.trim(data));
			}
        }
    });

}



function saveUp(){

		var subject=$("#subject").val();
		var youtube=$("#youtube").val();
    var main_text=$("#main_text").val();
    
    var multi=$("#multi").val();
		var imgUrl=$("#imgUrl").val();
    var attachFile=$("#attachFile").val();
		var content=$('#summernote').summernote('code');

		if(!subject){
			alert("제목을 입력하세요");
			return;
		}

		if ($('#summernote').summernote('isEmpty')) {
		  alert('내용을 입력하세요.');
		  return;
		}



		var params = "subject="+subject+"&content="+content+"&youtube="+youtube+"&main_text="+main_text+"&imgUrl="+imgUrl+"&multi="+multi+"&attachFile="+attachFile;
		//console.log(params);

		$.ajax({
			  type: 'post'
			, url: 'saveUpOk.php'
			,data : params
			, dataType : 'json'
			, success: function(data) {
				//console.log(data.result);

				if(data.result==1){
					alert('등록됐습니다.');
					location.href='/adminPage/list.php?multi=<?php echo $multi;?>'
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

function editUp(){

var subject=$("#subject").val();
var youtube=$("#youtube").val();
var main_text=$("#main_text").val();

var multi=$("#multi").val();
var imgUrl=$("#imgUrl").val();
var attachFile=$("#attachFile").val();
var content=$('#summernote').summernote('code');

if(!subject){
  alert("제목을 입력하세요");
  return;
}

if ($('#summernote').summernote('isEmpty')) {
  alert('내용을 입력하세요.');
  return;
}



var params = "subject="+subject+"&content="+content+"&youtube="+youtube+"&main_text="+main_text+"&imgUrl="+imgUrl+"&multi="+multi+"&attachFile="+attachFile;
//console.log(params);

$.ajax({
    type: 'post'
  , url: 'editUpOk.php'
  ,data : params
  , dataType : 'json'
  , success: function(data) {
    //console.log(data.result);

    if(data.result==1){
      alert('수정했습니다.');
      location.href='/adminPage/view.php?num=<?php echo $num;?>'
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


$("#afile").change(function(){

var formData = new FormData();
var files = $('#afile').prop('files');
for(var i=0; i < files.length; i++) {
    attachFile(files[i]);
}


});   

function attachFile(file) {
    var formData = new FormData();
    formData.append("file", file);
    $.ajax({
        url: 'saveImage.php',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function (data) {
          if(data==-1){
            alert('용량이 너무크거나 이미지 파일이 아닙니다.');
            return;
          }else{
            var img="<img src='"+$.trim(data)+"' width='50'><br>";
            $("#attachFiles").append(img);
            var attachFile=$("#attachFile").val();
            if(attachFile){
              attachFile=attachFile+",";
            }
            $("#attachFile").val(attachFile+$.trim(data));

          }
        }
    });

}

</script>