<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";
$result = $mysqli->query("select * from news order by num desc limit 3");
while($rs = $result->fetch_object()){
	$rsc[]=$rs;
}
?>
<!--::::: TRANDING CAROUSEL AREA START :::::::-->
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-8">
				<h2 class="widget-title">Trending News</h2>
				<div class="carousel_post2_type3 nav_style1 owl-carousel">
					<!--CAROUSEL START-->
				<?php
					foreach($rsc as $p){
				?>
					<div class="single_post post_type3">
						<div class="post_img">
							<div class="img_wrap">
								<?php echo $p->url;?>
							</div>	<span class="tranding">
								<i class="fas fa-bolt"></i>
							</span>
						</div>
						<div class="single_post_text">
							<div class="meta3">	<a href="#">TECHNOLOGY</a>
								<a href="#">March 26, 2020</a>
							</div>
							<h4><a href="post.php"><?php echo $p->subject;?></a></h4>
							<div class="space-10"></div>
							<p class="post-p"><?php echo $p->main_text;?></p>
						</div>
					</div>
				<?php
				}?>
					
					<div class="single_post post_type3">
						<div class="post_img">
							<div class="img_wrap">
								<img src="assets/img/trending/trendbig2.jpg" alt="">
							</div>
						</div>
						<div class="single_post_text">
							<div class="meta3">	<a href="#">TECHNOLOGY</a>
								<a href="#">March 26, 2020</a>
							</div>
							<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
							<div class="space-10"></div>
							<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
						</div>
					</div>
					
				</div>
				<div class="border_black"></div>
				<div class="space-30"></div>
				<div class="row">
					<div class="col-lg-6">
						<div class="single_post widgets_small">
							<div class="post_img">
								<div class="img_wrap">
									<img src="assets/img/trending/transm4.jpg" alt="">
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
									<img src="assets/img/trending/transm5.jpg" alt="">
								</div>	<span class="tranding">
									<i class="fas fa-bolt"></i>
								</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
									<img src="assets/img/trending/transm6.jpg" alt="">
								</div>	<span class="tranding">
									<i class="fas fa-bolt"></i>
								</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Venezuela elan govt and opposit the property collect</a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_post widgets_small">
							<div class="post_img">
								<div class="img_wrap">
									<img src="assets/img/trending/transm1.jpg" alt="">
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
									<img src="assets/img/trending/transm2.jpg" alt="">
								</div>	<span class="tranding">
									<i class="fas fa-bolt"></i>
								</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
									<img src="assets/img/trending/transm6.jpg" alt="">
								</div>	<span class="tranding">
									<i class="fas fa-bolt"></i>
								</span>
							</div>
							<div class="single_post_text">
								<div class="meta2">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Venezuela elan govt and opposit the property collect</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="follow_box widget mb30 mt-md-60">
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
				<!--:::::: POST TYPE 2 START :::::::-->
				<div class="widget tab_widgets mb30">
					<h2 class="widget-title">Most View</h2>
					<div class="post_type2_carousel owl-carousel nav_style1">
						<!--CAROUSEL START-->
						<div class="single_post2_carousel">
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm1.jpg" alt="">
									</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Nancy zhang a chinese busy woman and dhaka</a></h4>
								</div>
								<div class="type8_count">
									<h2>1</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm2.jpg" alt="">
									</div>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">The billionaire Philan thropist read to learn</a></h4>
								</div>
								<div class="type8_count">
									<h2>2</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm3.jpg" alt="">
									</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Cheap smartphone sensor could help you</a></h4>
								</div>
								<div class="type8_count">
									<h2>3</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm4.jpg" alt="">
									</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Class property employ ancho red multi</a></h4>
								</div>
								<div class="type8_count">
									<h2>4</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm5.jpg" alt="">
									</div>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Best garden wing supplies for the horticu</a></h4>
								</div>
								<div class="type8_count">
									<h2>5</h2>
								</div>
							</div>
							<div class="space-15 ldnane"></div>
							<div class="border_black ldnane"></div>
							<div class="space-15 ldnane"></div>
							<div class="single_post widgets_small type8 ldnane">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/blog/blog_small3.jpg" alt="">
									</div>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Ratiffe to be Director of nation talent Trump</a></h4>
								</div>
								<div class="type8_count">
									<h2>6</h2>
								</div>
							</div>
						</div>
						<div class="single_post2_carousel">
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm1.jpg" alt="">
									</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Nancy zhang a chinese busy woman and dhaka</a></h4>
								</div>
								<div class="type8_count">
									<h2>1</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm2.jpg" alt="">
									</div>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">The billionaire Philan thropist read to learn</a></h4>
								</div>
								<div class="type8_count">
									<h2>2</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm3.jpg" alt="">
									</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Cheap smartphone sensor could help you</a></h4>
								</div>
								<div class="type8_count">
									<h2>3</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm4.jpg" alt="">
									</div>	<span class="tranding">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Class property employ ancho red multi</a></h4>
								</div>
								<div class="type8_count">
									<h2>4</h2>
								</div>
							</div>
							<div class="space-15"></div>
							<div class="border_black"></div>
							<div class="space-15"></div>
							<div class="single_post widgets_small type8">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/most_view/mostsm5.jpg" alt="">
									</div>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Best garden wing supplies for the horticu</a></h4>
								</div>
								<div class="type8_count">
									<h2>5</h2>
								</div>
							</div>
							<div class="space-15 ldnane"></div>
							<div class="border_black ldnane"></div>
							<div class="space-15 ldnane"></div>
							<div class="single_post widgets_small type8 ldnane">
								<div class="post_img">
									<div class="img_wrap">
										<img src="assets/img/blog/blog_small3.jpg" alt="">
									</div>
								</div>
								<div class="single_post_text">
									<div class="meta2">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Ratiffe to be Director of nation talent Trump</a></h4>
								</div>
								<div class="type8_count">
									<h2>6</h2>
								</div>
							</div>
						</div>
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: TRANDING CAROUSEL AREA END :::::::-->

	

	<!--::::: FEATURE_POST AREA START :::::::-->
	<div class="feature_carousel_area mb40">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2 class="widget-title">Feature News</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="feature_carousel owl-carousel nav_style1">
						<!--CAROUSEL START-->
						<div class="single_post post_type6 post_type7">
							<div class="post_img gradient1">
								<a href="#">
									<img src="assets/img/feature/feature2.jpg" alt="">
								</a>
							</div>
							<div class="single_post_text">
								<div class="meta5">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4>
									<a href="post1.html">Best garden wing supplies for the horticu ltural</a>
								</h4>
							</div>
						</div>
						<div class="single_post post_type6 post_type7">
							<div class="post_img gradient1">
								<img src="assets/img/feature/feature3.jpg" alt="">
							</div>
							<div class="single_post_text">
								<div class="meta5">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
							</div>
						</div>
						<div class="single_post post_type6 post_type7">
							<div class="post_img gradient1">
								<img src="assets/img/feature/feature4.jpg" alt="">
							</div>
							<div class="single_post_text">
								<div class="meta5">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Best garden wing supplies for the horticu ltural</a></h4>
							</div>
						</div>
						<div class="single_post post_type6 post_type7">
							<div class="post_img gradient1">
								<img src="assets/img/feature/feature3.jpg" alt="">
							</div>
							<div class="single_post_text">
								<div class="meta5">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
							</div>
						</div>
						<div class="single_post post_type6 post_type7">
							<div class="post_img gradient1">
								<img src="assets/img/feature/feature2.jpg" alt="">
							</div>
							<div class="single_post_text">
								<div class="meta5">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Best garden wing supplies for the horticu ltural</a></h4>
							</div>
						</div>
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: FEATURE POST AREA END :::::::-->
	<!--::::: POST GALLARY AREA START :::::::-->
	<div class="post_gallary_area fifth_bg mb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-xl-8">
							<div class="slider_demo2">
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Japan’s virus success has puzzled the world. Is its luck running out?</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top2.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Copa America: Luis Suarez from devastated US America</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Copa America: Luis Suarez from devastated US America</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top2.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Japan’s virus success has puzzled the world. Is its luck running out?</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Copa America: Luis Suarez from devastated US America</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top2.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Japan’s virus success has puzzled the world. Is its luck running out?</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Copa America: Luis Suarez from devastated US America</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top2.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Japan’s virus success has puzzled the world. Is its luck running out?</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
								<div class="single_post post_type6 xs-mb30">
									<div class="post_img gradient1">
										<img src="assets/img/header/sider-top2.jpg" alt="">	<span class="tranding">
											<i class="fas fa-play"></i>
										</span>
									</div>
									<div class="single_post_text">
										<div class="meta meta_separator1">	<a href="#">TECHNOLOGY</a>
											<a href="#">March 26, 2020</a>
										</div>
										<h4><a class="play_btn" href="video_post1.html">Copa America: Luis Suarez from devastated US America</a></h4>
										<div class="space-10"></div>
										<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
									</div>
								</div>
							</div>
							<div class="slider_demo1">
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi1.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi2.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi3.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi4.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi5.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi6.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi7.jpg" alt="image">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi4.jpg" alt="">
								</div>
								<div class="single_gallary_item">
									<img src="assets/img/blog/post_gsi3.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="widget_tab md-mt-30">
								<ul class="nav nav-tabs">
									<li><a class="active" data-toggle="tab" href="#post1">RELATED</a>
									</li>
									<li><a data-toggle="tab" href="#post2">RELATED</a>
									</li>
									<li><a data-toggle="tab" href="#post3">POPULAR</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="post1" class="tab-pane fade show in active">
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
											<div class="space-15 ldnane"></div>
											<div class="border_black ldnane"></div>
											<div class="space-15 ldnane"></div>
											<div class="single_post widgets_small ldnane">
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
											<div class="space-15 ldnane"></div>
											<div class="border_black ldnane"></div>
											<div class="space-15 ldnane"></div>
											<div class="single_post widgets_small ldnane">
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
											<div class="space-15 ldnane"></div>
											<div class="border_black ldnane"></div>
											<div class="space-15 ldnane"></div>
											<div class="single_post widgets_small ldnane">
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
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--::::: POST GALLARY AREA END :::::::-->


	<!--::::: MIX CAROUSEL AREA START :::::::-->
	<div class="half_bg1 mix_area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="mix_carousel">
						<!--CAROUSEL START-->
						<div class="single_mix_carousel owl-carousel nav_style3">
							<div class="single_post post_type6 post_type9">
								<div class="post_img gradient1">
									<div class="img_wrap">
										<a class="play_btn" href="#">
											<img src="assets/img/bg/black_white1.jpg" alt="">
										</a>
									</div>	<span class="tranding">
										<i class="fas fa-play"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="video_post1.html">Success is not a good food failure makes you humble</a></h4>
								</div>
							</div>
							<div class="single_post post_type6 post_type9">
								<div class="post_img gradient1">
									<div class="img_wrap">
										<a href="#" class="play_btn">
											<img src="assets/img/bg/black_white2.jpg" alt="">
										</a>
									</div>	<span class="tranding left">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Success is not a good food failure makes you humble</a></h4>
								</div>
							</div>
							<div class="single_post post_type6 post_type9">
								<div class="post_img gradient1">
									<div class="img_wrap">
										<a href="#" class="play_btn">
											<img src="assets/img/bg/black_white2.jpg" alt="">
										</a>
									</div>	<span class="tranding left">
										<i class="fas fa-bolt"></i>
									</span>
								</div>
								<div class="single_post_text">
									<div class="meta">	<a href="#">TECHNOLOGY</a>
										<a href="#">March 26, 2020</a>
									</div>
									<h4><a href="post1.html">Success is not a good food failure makes you humble</a></h4>
								</div>
							</div>
						</div>
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
		<div class="space-60"></div>
	</div>
	<!--::::: MIX CAROUSEL AREA END :::::::-->

	<!--::::: VIDEO POST AREA START :::::::-->
	<div class="video_posts pt30 half_bg60">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading white">
						<h2 class="widget-title">Video News</h2>
					</div>
				</div>
			</div>
			<div class="space-50"></div>
			<div class="viceo_posts_wrap">
				<div class="row">
					<div class="col-lg-8">
						<div class="single_post post_type3 post_type11 margintop-60- xs-mb30">
							<div class="post_img">
								<div class="img_wrap">
									<a href="#" class="play_btn">
										<img src="assets/img/video/video1.jpg" alt="">
									</a>
								</div>	<a href="#" class="youtube_middle"><i class="fab fa-youtube"></i></a>
							</div>
							<div class="single_post_text padding30 fourth_bg">
								<div class="meta3">	<a href="#">TECHNOLOGY</a>
									<a href="#">March 26, 2020</a>
								</div>
								<h4><a href="post1.html">Riots Report Shows London Needs To Maintain Police Numbers, Says Mayor</a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="popular_carousel_area mb30 md-mt-30">
							<h2 class="widget-title">Popular Posts</h2>
							<div class="popular_carousel owl-carousel nav_style1">
								<!--CAROUSEL START-->
								<div class="popular_items">
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm1.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												1
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">The property complete with a 30 seat screen room.</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm2.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												2
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">Cheap smartphone sensor could help you old.</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm3.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												3
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">Harbour amid a Slowen the down in singer city</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm4.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												4
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">The secret to moving this from sphinx screening</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small ldnane">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm5.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												5</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">The secret to moving this from sphinx screening</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
								</div>
								<div class="popular_items">
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm1.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												1
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">The property complete with a 30 seat screen room.</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm2.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												2
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">Cheap smartphone sensor could help you old.</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm3.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												3
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">Harbour amid a Slowen the down in singer city</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small mb15">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm4.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												4
											</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">The secret to moving this from sphinx screening</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
									<div class="single_post type10 widgets_small ldnane">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/popular/popularsm5.jpg" alt="">
												</a>
											</div>	<span class="tranding tranding_border">
												5</span>
										</div>
										<div class="single_post_text">
											<h4><a href="post1.html">The secret to moving this from sphinx screening</a></h4>
											<div class="meta4">	<a href="#">TECHNOLOGY</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--CAROUSEL END-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: VIDEO POST AREA END :::::::-->
	<!--::::: ENTERTAINMENT AREA START :::::::-->
	<div class="entertrainments">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-12">
							<div class="heading">
								<h2 class="widget-title">Entertrainment News</h2>
							</div>
						</div>
					</div>
					<div class="entertrainment_carousel mb30">
						<!--CAROUSEL START-->
						<div class="entertrainment_item">
							<div class="row justify-content-center">
								<div class="col-md-6">
									<div class="single_post post_type3 mb30">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/entertrainment/enter1.jpg" alt="">
												</a>
											</div>
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
								<div class="col-md-6">
									<div class="single_post post_type3 mb30">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/entertrainment/enter2.jpg" alt="">
												</a>
											</div>
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
								<div class="col-md-6">
									<div class="single_post post_type3 mb30">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/entertrainment/enter3.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta3">	<a href="#">TECHNOLOGY</a>
												<a href="#">March 26, 2020</a>
											</div>
											<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
											<div class="space-10"></div>
											<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single_post post_type3 mb30">
										<div class="post_img">
											<div class="img_wrap">
												<a href="#">
													<img src="assets/img/entertrainment/enter4.jpg" alt="">
												</a>
											</div>
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
					<!--CAROUSEL END-->
					<div class="row">
						<div class="col-12">
							<div class="sports">
								<div class="row">
									<div class="col-12">
										<div class="heading">
											<h2 class="widget-title">Sports News</h2>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="single_post post_type3 mb30">
											<div class="post_img">
												<a href="#">
													<img src="assets/img/sports/sportsbig1.jpg" alt="">
												</a>	<span class="tranding">
													<i class="fas fa-bolt"></i>
												</span>
											</div>
											<div class="single_post_text">
												<div class="meta3">	<a href="#">TECHNOLOGY</a>
													<a href="#">March 26, 2020</a>
												</div>
												<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
												<div class="space-10"></div>
												<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
												<div class="space-20"></div>	<a href="#" class="readmore">Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="sports_carousel owl-carousel nav_style1">
											<!--CAROUSEL START-->
											<div class="sports_carousel_item">
												<div class="single_post widgets_small">
													<div class="post_img">
														<div class="img_wrap">
															<a href="#">
																<img src="assets/img/sports/sports2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
																<img src="assets/img/sports/sports3.jpg" alt="">
															</a>
														</div>	<span class="tranding">
															<i class="fas fa-bolt"></i>
														</span>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
															<a href="#">March 26, 2020</a>
														</div>
														<h4>
															
														<a href="post1.html">Copa America: Luis Suarez from devastated US</a>

														</h4>	
													</div>
												</div>
												<div class="space-15"></div>
												<div class="border_black"></div>
												<div class="space-15"></div>
												<div class="single_post widgets_small">
													<div class="post_img">
														<div class="img_wrap">
															<a href="#">
																<img src="assets/img/sports/sports4.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
																<img src="assets/img/sports/sports5.jpg" alt="">
															</a>
														</div>	<span class="tranding">
															<i class="fas fa-bolt"></i>
														</span>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
																<img src="assets/img/sports/sports6.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
															<a href="#">March 26, 2020</a>
														</div>
														<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
													</div>
												</div>
											</div>
											<div class="sports_carousel_item">
												<div class="single_post widgets_small">
													<div class="post_img">
														<div class="img_wrap">
															<a href="#">
																<img src="assets/img/blog/blog_small1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
																<img src="assets/img/blog/blog_small2.jpg" alt="">
															</a>
														</div>	<span class="tranding">
															<i class="fas fa-bolt"></i>
														</span>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
															<a href="#">March 26, 2020</a>
														</div>
														<h4>
															
														<a href="post1.html">Copa America: Luis Suarez from devastated US</a>

														</h4>	
													</div>
												</div>
												<div class="space-15"></div>
												<div class="border_black"></div>
												<div class="space-15"></div>
												<div class="single_post widgets_small">
													<div class="post_img">
														<div class="img_wrap">
															<a href="#">
																<img src="assets/img/blog/blog_small3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
															<a href="#"><img src="assets/img/blog/blog_small4.jpg" alt=""></a>
														</div>	
														<span class="tranding">
															<i class="fas fa-bolt"></i>
														</span>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
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
																<img src="assets/img/blog/blog_small5.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="single_post_text">
														<div class="meta2">	<a href="#">TECHNOLOGY</a>
															<a href="#">March 26, 2020</a>
														</div>
														<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
													</div>
												</div>
											</div>
										</div>
										<!--CAROUSEL END-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="banner_area mt50 mb60 xs-mt60">
						<a href="#">
							<img src="assets/img/bg/banner1.png" alt="">
						</a>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="businerss_news">
								<div class="row">
									<div class="col-6 align-self-center">
										<h2 class="widget-title">Business News</h2>
									</div>
									<div class="col-6 text-right align-self-center">	<a href="#" class="see_all mb20">See All</a>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="single_post post_type3 post_type12 mb30">
											<div class="post_img">
												<div class="img_wrap">
													<a href="#">
														<img src="assets/img/business/business1.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="single_post_text">
												<div class="meta3">	<a href="#">uiux.subash</a>
													<a href="#">March 26, 2020</a>
												</div>
												<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
												<div class="space-10"></div>
												<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with…</p>
												<div class="space-20"></div>	<a href="#" class="readmore">Read more</a>
											</div>
										</div>
										<div class="single_post post_type3 post_type12 mb30">
											<div class="post_img">
												<div class="img_wrap">
													<a href="#">
														<img src="assets/img/business/business2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="single_post_text">
												<div class="meta3">	<a href="#">uiux.subash</a>
													<a href="#">March 26, 2020</a>
												</div>
												<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
												<div class="space-10"></div>
												<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with…</p>
												<div class="space-20"></div>	<a href="#" class="readmore">Read more</a>
											</div>
										</div>
										<div class="single_post post_type3 post_type12 mb30">
											<div class="post_img">
												<div class="img_wrap">
													<a href="#">
														<img src="assets/img/business/business3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="single_post_text">
												<div class="meta3">	<a href="#">uiux.subash</a>
													<a href="#">March 26, 2020</a>
												</div>
												<h4><a href="post1.html">Copa America: Luis Suarez from devastated US</a></h4>
												<div class="space-10"></div>
												<p class="post-p">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with…</p>
												<div class="space-20"></div>	<a href="#" class="readmore">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-6 col-lg-12">
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
						</div>
						<div class="col-lg-6 col-lg-12">
							<!--:::::: POST TYPE 13 START:::::::-->
							<div class="widget upcomming_macth mb30">
								<div class="row">
									<div class="col-8 align-self-center">
										<h2 class="widget-title">Upcoming Matches</h2>
									</div>
									<div class="col-4 text-right align-self-center">	<a href="#" class="see_all mb20">See All</a>
									</div>
								</div>
								<div class="single_post post_type13 widgets_small">
									<div class="post_img">
										<a href="#">
											<img src="assets/img/flag/match1.png" alt="">
										</a>
									</div>
									<div class="single_post_text">
										<h4><a href="#" class="playing_teams">Germany <span>VS &nbsp;</span>France</a></h4>
										<p class="meta macth_meta">Tomorrow &nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
									</div>
									<div class="circle_match_time">
										<div class="first_circle circle"></div>
									</div>
								</div>
								<div class="space-10"></div>
								<div class="border_black"></div>
								<div class="space-10"></div>
								<div class="single_post post_type13 widgets_small">
									<div class="post_img">
										<a href="#">
											<img src="assets/img/flag/match2.png" alt="">
										</a>
									</div>
									<div class="single_post_text">
										<h4><a href="#" class="playing_teams">Spain <span>VS &nbsp;</span>Portugal</a></h4>
										<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
									</div>
									<div class="circle_match_time">
										<div class="second_circle circle"></div>
									</div>
								</div>
								<div class="space-10"></div>
								<div class="border_black"></div>
								<div class="space-10"></div>
								<div class="single_post post_type13 widgets_small">
									<div class="post_img">
										<a href="#">
											<img src="assets/img/flag/match3.png" alt="">
										</a>
									</div>
									<div class="single_post_text">
										<h4><a href="#" class="playing_teams">Russia <span>VS &nbsp;</span>Italy</a></h4>
										<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
									</div>
									<div class="circle_match_time">
										<div class="third_circle circle"></div>
									</div>
								</div>
								<div class="space-10"></div>
								<div class="border_black"></div>
								<div class="space-10"></div>
								<div class="single_post post_type13 widgets_small">
									<div class="post_img">
										<a href="#">
											<img src="assets/img/flag/match4.png" alt="">
										</a>
									</div>
									<div class="single_post_text">
										<h4><a href="#" class="playing_teams">Croatia <span>VS &nbsp;</span>England</a></h4>
										<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
									</div>
									<div class="circle_match_time">
										<div class="fourth_circle circle"></div>
									</div>
								</div>
								<div class="space-10"></div>
								<div class="border_black"></div>
								<div class="space-10"></div>
								<div class="single_post post_type13 widgets_small">
									<div class="post_img">
										<a href="#">
											<img src="assets/img/flag/match5.png" alt="">
										</a>
									</div>
									<div class="single_post_text">
										<h4><a href="#" class="playing_teams">Germany <span>VS &nbsp;</span>France</a></h4>
										<p class="meta macth_meta">Tomorrow&nbsp;|&nbsp;<span> M22:30 (CST) </span> &nbsp;</p>
									</div>
									<div class="circle_match_time">
										<div class="fifth_circle circle"></div>
									</div>
								</div>
							</div>
							<!--:::::: POST TYPE 13 END:::::::-->
						</div>
						<div class="col-lg-6 col-lg-12">
							<div class="box widget news_letter mb30">
								<h2 class="widget-title">News Letter</h2>
								<p>Your email address will not be this published. Required fields are News Today.</p>
								<div class="space-20"></div>
								<div class="signup_form">
									<form action="index.html">
										<input class="signup" type="email" placeholder="Your email">
										<input type="button" class="cbtn" value="sign up">
									</form>
									<div class="space-10"></div>
									<p>We hate spam as much as you do</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-lg-12">
							<div class="widget category mb30">
								<div class="row">
									<div class="col-6 align-self-center">
										<h2 class="widget-title">Categories</h2>
									</div>
									<div class="col-6 text-right align-self-center">	<a href="#" class="see_all mb20">See All</a>
									</div>
								</div>
								<ul>
									<li>
										<a href="#" style="background: url(assets/img/categories/category1.jpg);">	<span>Restaurant</span>
											<img src="assets/img/icon/union.png" alt="">
										</a>
									</li>
									<li>
										<a href="entertrainment.html" style="background: url(assets/img/categories/category2.jpg);">	<span>Entertainment</span>
											<img src="assets/img/icon/union.png" alt="">
										</a>
									</li>
									<li>
										<a href="feature.html" style="background: url(assets/img/categories/category3.jpg);">	<span>Feature</span>
											<img src="assets/img/icon/union.png" alt="">
										</a>
									</li>
									<li>
										<a href="business.html" style="background: url(assets/img/categories/category4.jpg);">	<span>Business</span>
											<img src="assets/img/icon/union.png" alt="">
										</a>
									</li>
									<li>
										<a href="trending.html" style="background: url(assets/img/categories/category5.jpg);">	<span>Trending</span>
											<img src="assets/img/icon/union.png" alt="">
										</a>
									</li>
									<li>
										<a href="sports.html" style="background: url(assets/img/categories/category6.jpg);">	<span>Sports</span>
											<img src="assets/img/icon/union.png" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-lg-12">
							<div class="banner2 mb30">
								<a href="#">
									<img src="assets/img/bg/sidebar-1.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: ENTERTAINMENT AREA END :::::::-->
	<div class="space-70"></div>
	
	<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>