<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

    <div class="col-12 col-md-12 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                            
                            <!-- Contact Form -->
                            <form action="#" method="post">
                            
                            <input type="hidden" name="imgUrl" id="imgUrl" value="">
                            <input type="hidden" name="attachFile" id="attachFile" value="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="제목">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="childName" placeholder="태그">
                                </div>
                                <div class="form-group">
                                <div id="summernote"></div>
                                </div>
                                <div class="form-group">
                                    <div id="attach_site">
                                        <div id="attachFiles">
                                        </div>
                                        <input type="file" multiple class="form-input" name="afile" id="afile" />
                                    </div>
                                </div>
                                <button type="button" class="btn btn-dark"  onclick="saveUp();">WRITE</button>
                            </form>
                        </div>
                    </div>
      
    </main>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  </body>
</html>

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
					$image.attr('src', data);
					$image.attr('class', 'childImg');
				});
				var imgUrl=$("#imgUrl").val();
				if(imgUrl){
					imgUrl=imgUrl+",";
				}
				$("#imgUrl").val(imgUrl+data);
			}
        }
    });

}



function saveUp(){

		var subject=$("#subject").val();
		var childName=$("#childName").val();
        var multi=$("#multi").val();
		var imgUrl=$("#imgUrl").val();
		var content=$('#summernote').summernote('code');

		if(!subject){
			alert("제목을 입력하세요");
			return;
		}

		if ($('#summernote').summernote('isEmpty')) {
		  alert('내용을 입력하세요.');
		  return;
		}



		var params = "subject="+subject+"&content="+content+"&childName="+childName+"&imgUrl="+imgUrl+"&multi="+multi;
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
					location.href='/write.php?multi=<?php echo $multi;?>'
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
                var img="<img src='"+data+"' width='50'><br>";
                $("#attachFiles").append(img);
				
                //$summernote.summernote('insertImage', data, function //($image) {
				//	$image.attr('src', data);
				//	$image.attr('class', 'childImg');
				//});

				var attachFie=$("#attachFie").val();
				if(attachFie){
					attachFie=attachFie+",";
				}
				$("#attachFie").val(attachFie+data);
			}
        }
    });

}

</script>