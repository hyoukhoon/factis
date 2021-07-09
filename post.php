<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";

$id=$_GET['id'];
$result = $mysqli->query("select * from news where num=".$id);
$rs = $result->fetch_object();

if(!$rs->num){
	location_is('','','해당뉴스가 존재 하지 않습니다.');
	exit;
}


$result0 = $mysqli->query("select num,subject from news where num  = (select max(num) as id from news where cate='".$rs->cate."' and num<".$id.")");
$rs0 = $result0->fetch_object();

$result2 = $mysqli->query("select num,subject from news where num  = (select min(num) as id from news where cate='".$rs->cate."' and num>".$id.")");
$rs2 = $result2->fetch_object();


	$LIMIT=5;
	$ord='{"id":"desc"}';
	//$ord='{"cnt":"desc"}';
	$from=0;
	$json='
	{
		"query": { 
			"bool": { 
				"filter": [ 
					{ 
						"term":  { 
								"place": "'.$rs->place.'" 
								}
					},
					{ 
						"range": { 
							"cnt": { "gt": "0" }
							}
					} 
				]
			}
		},
		"size": '.$LIMIT.',
		"from": '.$from.',
		"sort": '.$ord.'
	}
	';
	$pr=newsList($json);

	$LIMIT=5;
	$ord='{"id":"desc"}';
	//$ord='{"cnt":"desc"}';
	$from=0;
	$json='
	{
		"query": { 
			"bool": { 
				"filter": [ 
					{ 
						"term":  { 
								"cate": "'.$rs->cate.'" 
								}
					},
					{ 
						"range": { 
							"cnt": { "gt": "0" }
							}
					} 
				]
			}
		},
		"size": '.$LIMIT.',
		"from": '.$from.',
		"sort": '.$ord.'
	}
	';
	$cr=newsList($json);

	$LIMIT=5;
	$ord='{"cnt":"desc"}';
	$from=0;
	$json='
	{
		"query": { 
			"bool": { 
				"filter": [ 
					{ 
						"range": { 
							"cnt": { "gt": "0" }
							}
					} 
				]
			}
		},
		"size": '.$LIMIT.',
		"from": '.$from.',
		"sort": '.$ord.'
	}
	';
	$top5=newsList($json,"all");

	echo "<pre>";
	print_r($top5);
	
	
?>

	<!--::::: ARCHIVE AREA START :::::::-->
	<div class="archives post post1 padding-top-30">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bridcrumb">	<a href="#">Home</a> / <?php echo $rs->cate;?></div>
				</div>
			</div>
			<div class="space-30"></div>
			<div class="row">
				<div class="col-md-6 col-lg-8">
					<div class="row">
						<div class="col-4 align-self-center">
							<div class="page_category">
								<h4><?php echo $rs->cate;?></h4>
							</div>
						</div>
						<div class="col-8 text-right">
							<div class="page_comments">
								<ul class="inline">
									<li><i class="fas fa-comment"></i>563</li>
									<li><i class="fas fa-fire"></i>536</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="space-30"></div>
					<div class="single_post_heading">
						<h1><?php echo stripslashes($rs->subject);?></h1>
						<div class="space-10"></div>
					</div>
					<div class="space-40"></div>
					<?php
						if($rs->url){
					?>
							<iframe width="100%" src="<?php echo $rs->url;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?php
						}else{
						$thumb=explode(",",$rs->fn1);
					?>
						<img src="<?php echo $thumb[0];?>" style="max-width:100%;">
					<?php }?>
					<div class="space-20"></div>
					<div class="row">
						<div class="col-lg-6 align-self-center">
							<div class="author">
								<div class="author_img">
									<div class="author_img_wrap">
										<img src="assets/img/author/author2.png" alt="">
									</div>
								</div>	<a href="#">Shuvas Chandra</a>
								<ul>
									<li><a href="#">March 26, 2020</a>
									</li>
									<li>Updated 1:58 p.m. ET</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 align-self-center">
							<div class="author_social inline text-right">
								<ul>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-youtube"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="space-20"></div>

					<p>
							<?php echo stripslashes($rs->content);?>
					</p>
					
					<div class="space-40"></div>
					<!-- <div class="tags">
						<ul class="inline">
							<li class="tag_list"><i class="fas fa-tag"></i> tags</li>
							<li><a href="#">Health</a>
							</li>
							<li><a href="#">World</a>
							</li>
							<li><a href="#">Corona</a>
							</li>
						</ul>
					</div> -->
					<div class="space-40"></div>
					<div class="border_black"></div>
					<div class="space-40"></div>
					<div class="next_prev">
						<div class="row">
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single border_left3">
									<p>PREVIOUS NEWS</p>
									<h3><a href="post.php?id=<?php echo $rs0->num?>"><?php echo stripslashes($rs0->subject??"이전 뉴스가 없습니다.");?></a></h3>
								</div>
							</div>
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single border_left3">
									<p>NEXT NEWS</p>
									<h3><a href="post.php?id=<?php echo $rs2->num?>"><?php echo stripslashes($rs2->subject??"다음 뉴스가 없습니다.");?></a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="widget_tab md-mt-30">
						<ul class="nav nav-tabs">
							<li><a class="active" data-toggle="tab" href="#post1">RELATED1</a>
							</li>
							<li><a data-toggle="tab" href="#post2" class="">RELATED2</a>
							</li>
							<li><a data-toggle="tab" href="#post3" class="">POPULAR3</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="post1" class="tab-pane fade in active show">
								<div class="widget tab_widgets mb30">
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab1.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab2.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab3.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">U.S. Response subash says he will label regions by risk of…</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab4.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Venezuela elan govt and opposit the property collect</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab5.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Cheap smartphone sensor could help you old food safe</a></h4>
										</div>
									</div>
								</div>
							</div>
							<div id="post2" class="tab-pane fade">
								<div class="widget tab_widgets mb30">
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab1.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab2.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab3.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">U.S. Response subash says he will label regions by risk of…</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab4.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Venezuela elan govt and opposit the property collect</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab5.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Cheap smartphone sensor could help you old food safe</a></h4>
										</div>
									</div>
								</div>
							</div>
							<div id="post3" class="tab-pane fade">
								<div class="widget tab_widgets mb30">
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab1.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab2.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab3.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">U.S. Response subash says he will label regions by risk of…</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab4.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Venezuela elan govt and opposit the property collect</a></h4>
										</div>
									</div>
									<div class="space-15"></div>
									<div class="border_black"></div>
									<div class="space-15"></div>
									<div class="single_post widgets_small">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/header/widget/tab5.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta2 meta_separator1">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Cheap smartphone sensor could help you old food safe</a></h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="follow_box widget mb30">
						<h2 class="widget-title">Follow Us</h2>
						<div class="social_shares">
							<a class="single_social social_facebook" href="#">	<span class="follow_icon"><i class="fab fa-facebook-f"></i></span>
								34,456 <span class="icon_text">Fans</span>
							</a>
							<a class="single_social social_twitter" href="#">	<span class="follow_icon"><i class="fab fa-twitter"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
							<a class="single_social social_youtube" href="#">	<span class="follow_icon"><i class="fab fa-youtube"></i></span>
								34,456 <span class="icon_text">Subscribers</span>
							</a>
							<a class="single_social social_instagram" href="#">	<span class="follow_icon"><i class="fab fa-instagram"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
							<a class="single_social social_vimeo" href="#">	<span class="follow_icon"><i class="fab fa-vimeo-v"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
							<a class="single_social social_medium" href="#">	<span class="follow_icon"><i class="fab fa-medium-m"></i></span>
								34,456 <span class="icon_text">Followers</span>
							</a>
						</div>
					</div>
					<!--:::::: POST TYPE 3 START :::::::-->
					<div class="carousel_post_type3_wrap mb30">
						<h2 class="widget-title">Trending News</h2>
						<div class="carousel_post_type3 nav_style1 owl-carousel">
							<div class="single_post post_type3">
								<div class="post_img">
									<img src="assets/img/bg/video4.jpg" alt="">	<span class="tranding">
												<i class="fas fa-bolt"></i>
											</span>
								</div>
								<div class="single_post_text">
									<div class="meta3">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">There may be no consoles in the future ea exec says</a></h4>
									<div class="space-10"></div>
									<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
								</div>
							</div>
							<div class="single_post post_type3">
								<div class="post_img">
									<img src="assets/img/bg/video4.jpg" alt="">	<span class="tranding">
												<i class="fas fa-bolt"></i>
											</span>
								</div>
								<div class="single_post_text">
									<div class="meta3">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">There may be no consoles in the future ea exec says</a></h4>
									<div class="space-10"></div>
									<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
								</div>
							</div>
						</div>
					</div>
					<!--:::::: POST TYPE 3 END :::::::-->
					<!--:::::: POST TYPE 2 START :::::::-->
					<div class="widget tab_widgets mb30">
						<div class="single_post widgets_small">
							<div class="post_img">
								<div class="img_wrap">
									<img src="assets/img/blog/blog_small4.jpg" alt="">
								</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
							</div>
						</div>
						<div class="space-15"></div>
						<div class="border_black"></div>
						<div class="space-15"></div>
						<div class="single_post widgets_small">
							<div class="post_img">
								<div class="img_wrap">
									<img src="assets/img/blog/blog_small4.jpg" alt="">
								</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
							</div>
						</div>
						<div class="space-15"></div>
						<div class="border_black"></div>
						<div class="space-15"></div>
						<div class="single_post widgets_small">
							<div class="post_img">
								<div class="img_wrap">
									<img src="assets/img/blog/blog_small4.jpg" alt="">
								</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
							</div>
						</div>
					</div>
					<!--:::::: POST TYPE 2 END:::::::-->
					<div class="banner2 mb30">
						<a href="#">
							<img src="assets/img/bg/sidebar-1.png" alt="">
						</a>
					</div>
					<!--:::::: POST TYPE 4 START :::::::-->
					<div class="widget mb30">
						<h2 class="widget-title">Most share</h2>
						<div class="widget4_carousel owl-carousel nav_style1">
							<!--CAROUSEL START-->
							<div class="carousel_items">
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>1</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Nancy zhang a chinese busy woman and dhaka</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>2</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Harbour amid a Slowen down in singer city</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>3</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Cheap smartphone sensor could help you old food safe</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>4</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Nancy zhang a chinese busy woman and dhaka</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>5</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">The secret to moving this ancient sphinx screening</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
							</div>
							<div class="carousel_items">
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>1</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Nancy zhang a chinese busy woman and dhaka</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>2</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Harbour amid a Slowen down in singer city</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>3</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Cheap smartphone sensor could help you old food safe</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>4</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">Nancy zhang a chinese busy woman and dhaka</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
								<div class="single_post widgets_small widgets_type4">
									<div class="post_img number">
										<h2>5</h2>
									</div>
									<div class="single_post_text">
										<div class="meta2">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a href="post1.html">The secret to moving this ancient sphinx screening</a></h4>
										<ul class="inline socail_share">
											<li>	<a href="#"><i class="fab fa-twitter"></i>2.2K</a>
											</li>
											<li>	<a href="#"><i class="fab fa-facebook-f"></i>2.2K</a>
											</li>
										</ul>
										<div class="space-15"></div>
										<div class="border_black"></div>
									</div>
								</div>
								<div class="space-15"></div>
							</div>
						</div>
						<!--CAROUSEL END-->
					</div>
					<!--:::::: POST TYPE 4 END :::::::-->
					<div class="box widget news_letter mb30">
						<h2 class="widget-title">News Letter</h2>
						<p>Your email address will not be this published. Required fields are News Today.</p>
						<div class="space-20"></div>
						<div class="signup_form">
							<form action="index.html">
								<input class="signup" type="email" placeholder="Your email address">
								<input type="button" class="cbtn" value="sign up">
							</form>
							<div class="space-10"></div>
							<p>We hate spam as much as you do</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: ARCHIVE AREA END :::::::-->
	<div class="space-60"></div>
	<!--::::: LATEST BLOG AREA START :::::::-->
	<div class="fourth_bg padding6030">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2 class="widget-title">Our Latest Blog</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="single_post post_type3 mb30">
						<div class="post_img">
							<a href="#">
								<img src="assets/img/bg/video4.jpg" alt="">
							</a>
						</div>
						<div class="single_post_text">
							<div class="meta3">	<a href="#">TECHNOLOGY</a>
								<a href="#">March 26, 2020</a>
							</div>
							<h4><a href="post1.html">There may be no consoles in the future ea exec says</a></h4>
							<div class="space-10"></div>
							<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="single_post post_type3 mb30">
						<div class="post_img">
							<a href="#">
								<img src="assets/img/bg/video4.jpg" alt="">
							</a>
						</div>
						<div class="single_post_text">
							<div class="meta3">	<a href="#">TECHNOLOGY</a>
								<a href="#">March 26, 2020</a>
							</div>
							<h4><a href="post1.html">There may be no consoles in the future ea exec says</a></h4>
							<div class="space-10"></div>
							<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="single_post post_type3 mb30">
						<div class="post_img">
							<a href="#">
								<img src="assets/img/bg/video4.jpg" alt="">
							</a>
						</div>
						<div class="single_post_text">
							<div class="meta3">	<a href="#">TECHNOLOGY</a>
								<a href="#">March 26, 2020</a>
							</div>
							<h4><a href="post1.html">There may be no consoles in the future ea exec says</a></h4>
							<div class="space-10"></div>
							<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: LATEST BLOG AREA END :::::::-->
	<div class="space-60"></div>
	<!--:::::  COMMENT FORM AREA START :::::::-->
	<div class="comment_form">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-10 m-auto">
					<form action="#">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Full name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Email address">
							</div>
							<div class="col-12">
								<textarea name="messege" id="messege" cols="30" rows="5" placeholder="Tell us about your opinion…"></textarea>
							</div>
							<div class="col-12">
								<input type="button" value="POST OPINION" class="cbtn2">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="space-60"></div>
			<div class="comment_list">
				<div class="row">
					<div class="col-12 col-lg-10 m-auto">
						<h3>Our latest news</h3>
						<div class="single_comment">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="space-15"></div>
						<div class="border_black"></div>
						<div class="space-15"></div>
						<div class="single_comment">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="space-15"></div>
						<div class="border_black"></div>
						<div class="space-15"></div>
						<div class="single_comment">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="space-15"></div>
						<div class="border_black"></div>
						<div class="space-15"></div>
						<div class="single_comment inner_cm">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="space-40"></div>	<a href="#" class="cbtn2">Load More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space-100"></div>
	<!--:::::  COMMENT FORM AREA END :::::::-->
	<!--::::: BANNER AREA START :::::::-->
	<div class="padding5050 fourth_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 m-auto">
					<div class="banner1">
						<a href="#">
							<img src="assets/img/bg/banner1.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: BANNER AREA END :::::::-->
	
<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>