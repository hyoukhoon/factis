<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";

$id=$_GET['id'];
$result = $mysqli->query("select * from news where num=".$id);
$rs = $result->fetch_object();

if(!$rs->num){
	location_is('','','해당뉴스가 존재 하지 않습니다.');
	exit;
}
	
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
					<p>Entilators will be taken from certain New York hospitals and redistributed to the worst-hit parts of the state under an order to be signed by Governor Andrew Cuomo.
						<br>
						<br>New York saw its highest single-day increase in deaths, up by 562 to 2,935 - nearly half of all virus-related US deaths recorded yesterday. The White House may advise those in virus hotspots to wear face coverings in public to help stem the spread.\
						<br>
						<br>The US now has 245,658 Covid-19 cases.
						<br>
						<br>A shortage of several hundred ventilators in New York City, the epicentre of the outbreak in the US, prompted Mr Cuomo to say that he will order the machines be taken from various parts of the state and give them to harder-hit areas.
						<br>
						<br>Amid a deepening crisis, top health official <span class="bold"> Dr Anthony Fauci</span> has said he believes all states should issue stay-at-home orders.
						<br>
						<br>“I don’t understand why that’s not happening,” Dr Fauci told CNN on Thursday. “If you look at what’s going on in this country, I just don’t understand why we’re not do ingthat.”
						<br>
						<br>“You’ve got to put your foot on the accelerator to bring that number down,” he added, referring to infection and death rates.</p>
					<div class="space-40"></div>
					<div class="points">
						<ul>
							<li>Should more of us wear face masks?</li>
							<li>Why some countries wear face masks and others don’t</li>
							<li>Coronavirus: Are homemade face masks safe?</li>
						</ul>
					</div>
					<div class="space-40"></div>
					<p>The comments from Dr Fauci, who heads the National Institute of Allergy and Infectious Diseases, appeared to contradict those of President Trump, who has consistently dismissed the notion of a nationwide lockdown.
						<br>
						<br>“It’s awfully tough to say, ‘close it down.’ We have to have a little bit of flexibility,” Mr Trump said on Wednesday.</p>
					<div class="space-40"></div>
					<h3>What’s the debate over masks?</h3>
					<div class="space-20"></div>
					<p>Both the US Centers for Disease Control (CDC) and the World Health Organization (WHO) are reassessing their guidance on face masks, as experts race to find ways to fight the highly contagious virus.
						<br>
						<br>Covid-19 is carried in airborne droplets from people coughing or sneezing, but there is some dispute over how far people should distance themselves from each other, and whether masks are useful when used by the public.</p>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-6">
							<img src="assets/img/blog/smail1.jpg" alt="">
						</div>
						<div class="col-md-6">
							<p>The WHO advises that ordinary face masks are only effective if combined with careful hand-washing and social-distancing, and so far it does not recommend them generally for healthy people.
								<br>
								<br>However, More and more health experts now say there are benefits. They argue that the public use of masks can primarily help by preventing asymptomatic patients - people who have been infected with Covid-19 but are not aware, and not displaying any symptoms - from unknowingly spreading the virus to others.</p>
						</div>
					</div>
					<div class="space-40"></div>
					<p>Masks may also help lower the risk of individuals catching the virus through the droplets from another person’s sneeze or a cough - and people can be taught how put masks on and take them off correctly, they argue.
						<br>
						<br>On Thursday New York mayor Bill de Blasio urged all New Yorkers to cover their faces when outside and near others, but not to use surgical masks, which are in short supply.
						<br>
						<br>“It could be a scarf. It could be something you create yourself at home. It could be a bandana,” he said. Governor Cuomo weighed in on Friday, saying “i think it’s fair to say that the masks couldn’t hurt unless they gave you a false sense of security.”
						<br>
						<br>Meanwhile, residents in Laredo, Texas will now face a $1,000 (£816) fine if they fail to cover their noses and mouths while outside, after city officials issued an emergency ordinance to its approximately 250,000 residents this week.</p>
					<div class="space-40"></div>
					<h3>Which states are not in lockdown?</h3>
					<div class="space-20"></div>
					<p>Both the US Centers for Disease Control (CDC) and the World Health Organization (WHO) are reassessing their guidance on face masks, as experts race to find ways to fight the highly contagious virus.
						<br>
						<br>Covid-19 is carried in airborne droplets from people coughing or sneezing, but there is some dispute over how far people should distance themselves from each other, and whether masks are useful when used by the public.</p>
					<div class="space-40"></div>
					<img src="assets/img/blog/big1.jpg" alt="">	<p class="img_desc"><span>I just had a baby - now I’m going to the frontline.</span></p>
					<div class="space-40"></div>
					<p>Masks may also help lower the risk of individuals catching the virus through the droplets from another person’s sneeze or a cough - and people can be taught how put masks on and take them off correctly, they argue.
						<br>
						<br>On Thursday New York mayor Bill de Blasio urged all New Yorkers to cover their faces when outside and near others, but not to use surgical masks, which are in short supply.
						<br>
						<br>Meanwhile, residents in Laredo, Texas will now face a $1,000 (£816) fine if they fail to cover their noses and mouths while outside, after city officials issued an emergency ordinance to its approximately 250,000 residents this week.</p>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-5">
							<img src="assets/img/blog/quote_1.jpg" alt="">
						</div>
						<div class="col-md-7">
							<div class="qhote">
								<img src="assets/img/icon/q.png" alt="">
								<p>I must explain to you how all this mistake idea denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. .</p>
								<div class="author">
									<div class="author_img">
										<div class="author_img_wrap">
											<img src="assets/img/author/author2.png" alt="">
										</div>
									</div>	<a href="#">Shuvas Chandra</a>
									<ul>
										<li>Founder at Seative Digital</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
					<p>The next day I came back to my team and said, This is what I just heard, we have to get ready, he said. We knew that it wasn’t going to be long before we were going to have to deal with it.
						<br>
						<br>Mr. Hogan has also leaned on his wife, Yumi Hogan, a Korean immigrant, who was also at the governor’s convention, which included a dinner at the Korean ambassador’s home. As the first Korean first lady in American history, Ms. Hogan has become something of an icon in South Korea. I just grabbed my wife and said, Look, you speak Korean. You know the president. You know the first lady. You know the ambassador. Let’s talk to them in Korean, and tell them we need their help. Companies in South Korea said would tests.</p>
					<div class="space-40"></div>
					<img src="assets/img/blog/big2.jpg" alt="">
					<div class="space-40"></div>
					<p>In global terms the US has the most Covid-19 cases - more than 245,000. And on Thursday the US authorities said more than 1,000 had died in the past 24 hours - the highest daily toll so far in the world.
						<br>
						<br>Hospitals and morgues in New York are struggling to cope with the pandemic, and New York Governor Andrew Cuomo has warned that New York risks running out of ventilators for patients in six days.</p>
					<div class="space-40"></div>
					<div class="tags">
						<ul class="inline">
							<li class="tag_list"><i class="fas fa-tag"></i> tags</li>
							<li><a href="#">Health</a>
							</li>
							<li><a href="#">World</a>
							</li>
							<li><a href="#">Corona</a>
							</li>
						</ul>
					</div>
					<div class="space-40"></div>
					<div class="border_black"></div>
					<div class="space-40"></div>
					<div class="next_prev">
						<div class="row">
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single border_left3">
									<p>PREVIOUS NEWS</p>
									<h3><a href="#">Kushner puts himself in middle of white house’s chaotic coronavirus response.</a></h3>
								</div>
							</div>
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single border_left3">
									<p>NEXT NEWS</p>
									<h3><a href="#">C.I.A. Hunts for authentic virus totals in china, dismissing government tallies</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="widget_tab md-mt-30">
						<ul class="nav nav-tabs">
							<li><a class="active" data-toggle="tab" href="#post1">RELATED</a>
							</li>
							<li><a data-toggle="tab" href="#post2" class="">RELATED</a>
							</li>
							<li><a data-toggle="tab" href="#post3" class="">POPULAR</a>
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