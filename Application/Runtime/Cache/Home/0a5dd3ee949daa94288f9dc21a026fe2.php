<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/jquery-1.7.2.min.js" ></script>
<script type="text/javascript">
$(function(){
	/**软件功能切换js**/
	$(".soft_con_icon ul li a").mouseover(function(){
		var id = $(this).attr("id");
		var x=$(this).parent().index();
		$(this).children("p").css({"color":"#008dd9"}).parent().parent().siblings().children().children("p").css({"color":"#333333"});
		var src1=id+"_hover.gif"
		$(".soft_con_icon ul li a").each(function(index, element) {
         	var other_id = $(this).attr("id");
			if(id == other_id){
			   $(this).children("img").attr("src","/BOXUEYUANEND/Public/before/images/"+src1);
			}else{
			   var src2 = other_id+".gif";
			   $(this).children("img").attr("src","/BOXUEYUANEND/Public/before/images/"+src2);
			}
        });
		if(x==0){
		   $("#xzgl").css({"display":"block"}).siblings().css({"display":"none"});
		   $(".soft_con1").css({"background":" url(/BOXUEYUANEND/Public/before/images/line_select_001.gif)"});
		}else if(x==1){
		   $("#crm").css({"display":"block"}).siblings().css({"display":"none"});
		   $(".soft_con1").css({"background":"url(/BOXUEYUANEND/Public/before/images/line_select_002.gif)"});
		}else if(x==2){
		   $("#xmgl").css({"display":"block"}).siblings().css({"display":"none"});
		   $(".soft_con1").css({"background":"url(/BOXUEYUANEND/Public/before/images/line_select_003.gif)"});
		}else if(x==3){
		   $("#zsgl").css({"display":"block"}).siblings().css({"display":"none"});
		   $(".soft_con1").css({"background":"url(/BOXUEYUANEND/Public/before/images/line_select_004.gif)"});
		}else{
		   $("#ydbg").css({"display":"block"}).siblings().css({"display":"none"});
		   $(".soft_con1").css({"background":"url(/BOXUEYUANEND/Public/before/images/line_select_005.gif)"});
		}
	});
	
});
</script>

<!-- //for-mobile-apps -->
<link href="/BOXUEYUANEND/Public/before/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/BOXUEYUANEND/Public/before/css/swipebox.css">
<link href="/BOXUEYUANEND/Public/before/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="css/styleForNews.css" rel="stylesheet" type="text/css" media="all" />
 --><!-- js -->
<!--search-->
<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="/BOXUEYUANEND/Public/before/css/default.css" />
<link rel="stylesheet" type="text/css" href="/BOXUEYUANEND/Public/before/css/component.css" />



<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/jquery-2.1.4.min.js"></script>

<!-- //js -->
<!--animate-->
<link href="/BOXUEYUANEND/Public/before/css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="/BOXUEYUANEND/Public/before/css/footer.css" rel="stylesheet" type="text/css" y>
<script src="/BOXUEYUANEND/Public/before/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<!-- <script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/move-top.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/easing.js"></script> -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/numscroller-1.0.js"></script>
</head>
<body>
<!-- header -->
<div id="home" class="banner w3l">
	
		<nav class="navbar navbar-default  wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s" style="background-color:rgb(0,188,212);">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
								<a class="navbar-brand" href="#"><img src="/BOXUEYUANEND/Public/before/images/logo.png" alt="" width="70%" style="margin-top:-10%;"></a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">

										<li id="act-Home"><a class="scroll hvr-bounce-to-bottom active" href="">首页<p>Home</p></a></li>
										
										<li><a class="scroll hvr-bounce-to-bottom" href="#gallery ">课程天地<p style="text-align: center;"> Course</p></a></li>
										<li><a class="scroll hvr-bounce-to-bottom " href="#about">关于我们<p style="text-align: center;">About</p></a></li>
									    <li><a class="scroll hvr-bounce-to-bottom" href="#team">名师团队<p style="text-align: center;">Teacher</p></a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="#news">热点资讯 <p style="text-align: center;">News</p></a></li>

										<li><a class="hvr-bounce-to-bottom" href="/BOXUEYUANEND/index.php/Home/person/person">个人中心<p style="text-align: center;">Center</p></a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
		</nav>
		<div class="container">
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<script src="/BOXUEYUANEND/Public/before/js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>成就未来，BOXUEYUAN</h3>
							<p>用我的肩膀 助你成长</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>最新教材，最新资料</h3>
							<p>我们致力于推送第一手资料</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>最强名师，强强联手</h3>
							<p>我们为您提供最优秀的师资力量</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>最新资讯，最快了解</h3>
							<p>我们帮您最快了解高考。</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>用我的肩膀 助你成长</h3>
							<p>相信我们，打造未来</p>
						</div>
					</li>
				</ul>
			</div>	
				<div class="main clearfix" >
        <!-- Optional columns for small components -->

        <div class="column"  style="left: 70px;top:60px;">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="" type="text" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span>
                </form>
            </div>
        </div>
		
    </div>
		</div>
		<!-- <div class="more-button text-center">
			<a href="#ban-bot" class="scroll"><img src="images/icon.png" alt=" "/></a>
		</div> -->
	</div>
</div>
<!-- //header -->

<!-- bottom -->
<!--<div id="ban-bot12" class="banner-bot w3ls">
	<div class="col-md-3 bottom-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
		<img class="img-responsive" src="images/b2.jpg" alt=" " />
	</div>
	<div class="col-md-6 bottom-grid2 text-center wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
		<h3>WE WILL OPEN THE WORLD OF KNOWLEDGE FOR YOU</h3>
		<h4>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h4>
		<a class="hvr-bounce-to-bottom scroll" href="#about">SEE MORE ABOUT US</a>
	</div>
	<div class="col-md-3 bottom-grid3 wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
		<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider4").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
		</script>
		<div class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<h4>Exercitationem</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus
							qui blanditiis vero eos et accusamus et iusto dignissimos ducimus
							qui blanditiis.</p>
					</li>
					<li>
						<h4>Dignissimos</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus
							qui blanditiis vero eos et accusamus et iusto dignissimos ducimus
							qui blanditiis.</p>
					</li>
					<li>
						<h4>Exercitationem</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus
							qui blanditiis vero eos et accusamus et iusto dignissimos ducimus
							qui blanditiis.</p>
					</li>
					<li>
						<h4>Dignissimos</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus
							qui blanditiis vero eos et accusamus et iusto dignissimos ducimus
							qui blanditiis.</p>
					</li>
				</ul>
		</div>
	</div>
	<div class="clearfix"></div>
</div>-->
<!-- //bottom -->
<!-- content -->
<div id="gallery" class="gallery all_pad wthree" style="margin-top:2%;">
	<div class="container">  <h3 class="title"><a href="/BOXUEYUANEND/index.php/Home/course/course">课程天地</a></h3> 
		
			<div class="col-md-4 gal-grid  wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="gal-img">
					<a href="/BOXUEYUANEND/Public/before/images/chinese.png" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">			
									<div class="line"></div>			
									<div class="headline">语文</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="/BOXUEYUANEND/Public/before/images/chinese.png" alt=" " /></div>
						</div>
					</a>
					<div class="view-pos" ><h4 style="border-radius: 8px;"><a href="/BOXUEYUANEND/index.php/Home/Chinese/chinese">点击进入</a></h4></div>
					<p>教材、资料、视频任你挑</p>
				</div>
			</div>
			<div class="col-md-4 gal-grid  wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="gal-img">
					<a href="/BOXUEYUANEND/Public/before/images/math.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">			
									<div class="line"></div>			
									<div class="headline">数学</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="/BOXUEYUANEND/Public/before/images/math.jpg" alt=" " /></div>
						</div>
					</a>
					<div class="view-pos"><h4 style="border-radius: 8px;"><a href="/BOXUEYUANEND/index.php/Home/Math/math">点击进入</a></h4></div>
					<p>教材、资料、视频任你挑</p>
				</div>
			</div>
			<div class="col-md-4 gal-grid wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="gal-img">
					<a href="/BOXUEYUANEND/Public/before/images/english.png" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">			
									<div class="line"></div>			
									<div class="headline">英语</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="/BOXUEYUANEND/Public/before/images/english.png" alt=" " /></div>
						</div>
					</a>
					<div class="view-pos"><h4 style="border-radius: 8px;"><a href="/BOXUEYUANEND/index.php/Home/English/english">点击进入</a></h4></div>
					<p>教材、资料、视频任你挑</p>
				</div>
			</div>
			<div class="col-md-4 gal-grid gal-top wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<div class="gal-img">
					<a href="/BOXUEYUANEND/Public/before/images/lizong.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">			
									<div class="line"></div>			
									<div class="headline">理科综合</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="/BOXUEYUANEND/Public/before/images/lizong.jpg" alt=" " /></div>
						</div>
					</a>
					<div class="view-pos"><h4 style="border-radius: 8px;"><a href="/BOXUEYUANEND/index.php/Home/Lizong/lizong">点击进入</a></h4></div>
					<p>教材、资料、视频任你挑</p>
				</div>
			</div>
			<div class="col-md-4 gal-grid gal-top wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<div class="gal-img">
					<a href="/BOXUEYUANEND/Public/before/images/wenzong.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">			
									<div class="line"></div>			
									<div class="headline">文科综合</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="/BOXUEYUANEND/Public/before/images/wenzong.jpg" alt=" " /></div>
						</div>
					</a>
					<div class="view-pos"><h4 style="border-radius: 8px;"><a href="/BOXUEYUANEND/index.php/Home/WenZong/wenzong">点击进入</a></h4></div>
					<p>教材、资料、视频任你挑</p>
				</div>
			</div>
			<div class="col-md-4 gal-grid gal-top wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<div class="gal-img">
					<a href="/BOXUEYUANEND/Public/before/images/gaokao.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="item item-type-double">
							<div class="item-hover">
								<div class="item-info">			
									<div class="line"></div>			
									<div class="headline">高考专题</div>
									<div class="line"></div>
								</div>
								<div class="mask"></div>
							</div>
							<div class="item-img"><img src="/BOXUEYUANEND/Public/before/images/gaokao.jpg" alt=" " /></div>
						</div>
					</a>
					<div class="view-pos"><h4 style="border-radius: 8px;"><a href="/BOXUEYUANEND/index.php/Home/GaoKao/gaokaozhuanti">点击进入</a></h4></div>
					<p>高考真题应有尽有</p>
				</div>
			</div>
			
			<!-- swipe box js -->
				<script src="/BOXUEYUANEND/Public/before/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
				</script>
			<!-- //swipe box js -->

			<div class="clearfix"> </div>
	</div>
</div>
<!-- //about -->
<!-- about-bottom -->
<!--<div class="abt-what agileits all_pad wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0s">
	<div class="container">
		<h3 class="title">WHAT WE ARE</h3>
		<div class="col-md-5 ab-left">
			<div class="port-7 effect-2">
                	<div class="image-box">
                    	<img src="images/a1.jpg" alt="Image-2">
                    </div>
                    <div class="text-desc">
                    	<h4>Pedagogy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
            </div>
		</div>
		<div class="col-md-7 ab-right">
			<h2>Voluptatem Accusantium </h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo ipsa quae ab illo.</p>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque. </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>-->
<!-- //about-bottom -->
<!-- num-scroller -->
<div id="about" class="about all_pad agile" style="margin-top:5%;">
	<div class="container">
		<h3 class="title1"><a href="/BOXUEYUANEND/index.php/Home/about/about">关于我们</a></h3>
		<p class="para">高分热线：010-110110110110</p>
		<p class="para">我们是一个年轻活跃的团队，我们将竭尽全力为您服务，我始终坚持为您推出第一手全新资料，最新教材最新教辅，除此之外我们的队伍更是令人满意。我们拥有来自西江大学的朴槿惠讲师，来自首尔大学的朴槿惠教授，以及来自济州岛大学的朴槿惠先生等等名师云集，高分就等你来</p>
		
	</div>
</div>
<!-- num-scroller -->
<!-- team -->
<div id="team" class="team-content all_pad w3agile" style="margin-top:2%;">
	<div class="container">
		<h3 class="title"><a href="/BOXUEYUANEND/index.php/Home/teacher/teacher">名师团队</a></h3>
		<div class="t-content-gds">
		<?php if(is_array($tc)): $i = 0; $__LIST__ = $tc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tc): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/<?php echo ($tc["img"]); ?>" alt=" "/>
					<div class="team-text">
						<h4><a href="/BOXUEYUANEND/index.php/Home/Teacher/teacher_content/Tid/<?php echo ($tc["tid"]); ?>"><?php echo ($tc["username"]); ?></a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><?php echo (mb_substr($tc["summary"],0,40,'utf-8')); ?>...</p>
						
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			<!--<div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/before/images\teacher-3.jpg" alt=" "/>
					<div class="team-text">
						<h4><a href="teacher-content.html">张老师</a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><span style="color: #00bcd4">英国语言学学士</span>，美国亚利桑那大学毕业(PIAOJINHUI University)，原新东方特级讲师，培训师，著有《朴槿惠》</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/before/images/team3.jpg" alt=" "/>
					<div class="team-text">
						<h4><a href="teacher-content.html">张老师</a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><span style="color: #00bcd4">英国语言学学士</span>，美国亚利桑那大学毕业(PIAOJINHUI University)，原新东方特级讲师，培训师，著有《朴槿惠》</p>
						
					</div>
				</div>
			</div>

			<div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/before/images/team1.jpg" alt=" "/>
					<div class="team-text">
						<h4><a href="teacher-content.html">张老师</a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><span style="color: #00bcd4">英国语言学学士</span>，美国亚利桑那大学毕业(PIAOJINHUI University)，原新东方特级讲师，培训师，著有《朴槿惠》</p>
						
					</div>
				</div>
			</div>-->






			<div class="clearfix"></div>
		</div>
	</div>







<br/><br/>

	<div class="container">
		<!-- <h3 class="title">名师团队</h3> -->
		<div class="t-content-gds">
		<?php if(is_array($tcc)): $i = 0; $__LIST__ = $tcc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tcc): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/<?php echo ($tcc["img"]); ?>" alt=" "/>
					<div class="team-text">
						<h4><a href="/BOXUEYUANEND/index.php/Home/Teacher/teacher_content/Tid/<?php echo ($tcc["tid"]); ?>"><?php echo ($tcc["username"]); ?></a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><?php echo (mb_substr($tcc["summary"],0,40,'utf-8')); ?>...</p>
						
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
			
			<!--<div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/before/images\teacher-3.jpg" alt=" "/>
					<div class="team-text">
						<h4><a href="teacher-content.html">张老师</a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><span style="color: #00bcd4">英国语言学学士</span>，美国亚利桑那大学毕业(PIAOJINHUI University)，原新东方特级讲师，培训师，著有《朴槿惠》</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/before/images/team3.jpg" alt=" "/>
					<div class="team-text">
						<h4><a href="teacher-content.html">张老师</a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><span style="color: #00bcd4">英国语言学学士</span>，美国亚利桑那大学毕业(PIAOJINHUI University)，原新东方特级讲师，培训师，著有《朴槿惠》</p>
						
					</div>
				</div>
			</div>

			<div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="team-img">
					<img class="img-responsive" src="/BOXUEYUANEND/Public/before/images/team1.jpg" alt=" "/>
					<div class="team-text">
						<h4><a href="teacher-content.html">张老师</a><span>教授</span></h4>
					<p>欢迎指数:<img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"><img src='/BOXUEYUANEND/Public/before/images/2.png' style="vertical-align: 0%"></p>
						<p><span style="color: #00bcd4">英国语言学学士</span>，美国亚利桑那大学毕业(PIAOJINHUI University)，原新东方特级讲师，培训师，著有《朴槿惠》</p>
					</div>
				</div>
			</div>-->






			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--热点资讯-->

<!-- *************************************************************************************************************************** -->
<h1 style="text-align: center;padding: 30px;"><a href="/BOXUEYUANEND/index.php/Home/hot/hot" style="color:#000">热点资讯</a></h1>
<div class="soft_function" id="news">

	<div class="soft_con_icon">
		<ul>
			<li><a id="pic_fun_adm" href="/BOXUEYUANEND/index.php/Home/hot/hot"><img src="/BOXUEYUANEND/Public/before/images/pic_fun_adm_hover.gif" width="150" height="150"/><p style="color:#008dd9">考生的最新资讯</p></a></li>
			<li><a id="pic_fun_crm" href="/BOXUEYUANEND/index.php/Home/hot/hot"><img  src="/BOXUEYUANEND/Public/before/images/pic_fun_crm.gif" width="150" height="150"/><p>考纲的最新资讯</p></a></li>
			<li><a id="pic_fun_project" href="/BOXUEYUANEND/index.php/Home/hot/hot"><img  src="/BOXUEYUANEND/Public/before/images/pic_fun_project.gif" width="150" height="150"/><p>志愿填报新资讯</p></a></li>
			<li><a id="pic_fun_k" href="/BOXUEYUANEND/index.php/Home/hot/hot"><img  src="/BOXUEYUANEND/Public/before/images/pic_fun_k.gif" width="150" height="150"/><p>学科最新资讯</p></a></li>
			<li><a id="pic_fun_adm" href="/BOXUEYUANEND/index.php/Home/hot/hot"><img  src="/BOXUEYUANEND/Public/before/images/pic_fun_adm_hover.gif" width="150" height="150"/><p>教育部最新资讯</p></a></li>
		</ul>
	</div>  

	<div class="soft_con1" style="background:url(/BOXUEYUANEND/Public/before/images/line_select_001.gif);"></div>

	<div class="soft_con">

		<div id="xzgl" class="soft_con2">
		<?php if(is_array($kaosheng)): $i = 0; $__LIST__ = $kaosheng;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$kaosheng): $mod = ($i % 2 );++$i;?><div class="function1">
				<a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($kaosheng["id"]); ?>"><img src="/BOXUEYUANEND/Public/<?php echo ($kaosheng["thumb"]); ?>"/ width="150px;"></a>
				<p class="p1"><a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($kaosheng["id"]); ?>"><?php echo ($kaosheng["title"]); ?></a></p>
				<p class="p2"><?php echo (mb_substr($kaosheng["summary"],0,30,'utf-8')); ?>...</p>
				<p class="p2" style="float: right;"><?php echo (mb_substr($kaosheng["updatetime"],0,10,'utf-8')); ?></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
		</div>
	
		<div id="crm" class="soft_con2" style="display:none">
		<?php if(is_array($tigang)): $i = 0; $__LIST__ = $tigang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tigang): $mod = ($i % 2 );++$i;?><div class="function1">
					<a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($tigang["id"]); ?>"><img src="/BOXUEYUANEND/Public/<?php echo ($tigang["thumb"]); ?>"/ width="150px;"></a>
				<p class="p1"><a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($tigang["id"]); ?>"><?php echo ($tigang["title"]); ?></a></p>
				<p class="p2"><?php echo (mb_substr($tigang["summary"],0,30,'utf-8')); ?>...</p>
				<p class="p2" style="float: right;"><?php echo (mb_substr($tigang["updatetime"],0,10,'utf-8')); ?></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
			
		</div>
	
		<div id="xmgl" class="soft_con2" style="display:none">
		<?php if(is_array($zhiyuan)): $i = 0; $__LIST__ = $zhiyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zhiyuan): $mod = ($i % 2 );++$i;?><div class="function1">
					<a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($zhiyuan["id"]); ?>"><img src="/BOXUEYUANEND/Public/<?php echo ($zhiyuan["thumb"]); ?>"/ width="150px;"></a>
				<p class="p1"><a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($zhiyuan["id"]); ?>"><?php echo ($zhiyuan["title"]); ?></a></p>
				<p class="p2"><?php echo (mb_substr($zhiyuan["summary"],0,30,'utf-8')); ?>...</p>
				<p class="p2" style="float: right;"><?php echo (mb_substr($zhiyuan["updatetime"],0,10,'utf-8')); ?></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	
		<div id="zsgl" class="soft_con2" style="display:none">
		<?php if(is_array($xueke)): $i = 0; $__LIST__ = $xueke;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xueke): $mod = ($i % 2 );++$i;?><div class="function1">
					<a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($xueke["id"]); ?>"><img src="/BOXUEYUANEND/Public/<?php echo ($xueke["thumb"]); ?>"/ width="150px;"></a>
				<p class="p1"><a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($xueke["id"]); ?>"><?php echo ($xueke["title"]); ?></a></p>
				<p class="p2"><?php echo (mb_substr($xueke["summary"],0,30,'utf-8')); ?>...</p>
				<p class="p2" style="float: right;"><?php echo (mb_substr($xueke["updatetime"],0,10,'utf-8')); ?></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
		</div>
	
		<div id="ydbg" class="soft_con2" style="display:none">
		<?php if(is_array($jiaoyubu)): $i = 0; $__LIST__ = $jiaoyubu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jiaoyubu): $mod = ($i % 2 );++$i;?><div class="function1">
					 <a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($jiaoyubu["id"]); ?>"><img src="/BOXUEYUANEND/Public/<?php echo ($jiaoyubu["thumb"]); ?>"/ width="150px;"></a>
				<p class="p1"><a href="/BOXUEYUANEND/index.php/Home/Hot/hot_content/id/<?php echo ($jiaoyubu["id"]); ?>"><?php echo ($jiaoyubu["title"]); ?></a></p>
				<p class="p2"><?php echo (mb_substr($jiaoyubu["summary"],0,30,'utf-8')); ?>...</p>
				<p class="p2" style="float: right;"><?php echo (mb_substr($jiaoyubu["updatetime"],0,10,'utf-8')); ?></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</div>
	
	</div>
	
</div>
<!-- *********************************************************************************************************************** -->

<!-- <div class="abt-what agileits all_pad wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0s" id="ban-bot">
	<div class="container">
		<h3 class="title">热点资讯</h3>
		<div class="col-md-2 ab-left">
		</div>
		<div class="col-md-8 ab-right">	
			<ul id="news" >
				    	<li ><a href="">2016年本科提前批C段录取分数线<span>2016-11-14</span></a></li>
				    	<li ><a href="">山东省2017年普通高等学校招生报名工作通知<span>2016-11-14</span></a></li>
				        <li ><a href="">北京市三所市属高校携手成立“南京大学”<span>2016-11-14</span></a></li>
				        <li ><a href="">教育部：2017年考试大纲新内容难度属中低难度<span>2016-11-14</span></a></li>
				    	<li ><a href="">2017年北京高考启动综合改革<span>2016-11-14</span></a></li>
				    	<li ><a href="">山东省2017年普通高等学校招生报名工作通知<span>2016-11-14</span></a></li>
				    	
				    </ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div> -->
<!--热点资讯结束-->
<!-- team -->
<!-- twitter-content -->
<!-- <div class="twi-content agileinfo all_pad text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" id="ban-bot">
	<div class="container">
		
		<div class="callbacks_container">
			
		</div>
	</div>
</div> -->
<!-- //twitter-content -->
<!-- <div class="newsletter all_pad wow fadeInUp animated" data-wow-delay=".5s">
	<div class="container">
		<h3 class="title">NEWSLETTER</h3>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
			<div class="sub">
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="SUBSCRIBE NOW" >
				</form>
			</div>
	</div>
</div> -->
<!-- map -->
<div class="twi-content agileinfo all_pad text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" id="ban-bot">
	<div class="container">
		<h3 class="title" style="color:black">反馈我们</h3>
		<p class="para" style="color:black">我们是一个积极改进错误的团体，我们希望您能给我提出最宝贵的意见和最真挚的想法。</p>
		
	</div>
</div>
<!-- 
<div id="contact" class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0 float:left;" ></iframe>
	<div class="map-pos wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" >
		<h3>用户头像</h3>
		
		<img src="images/14.png" alt="">
	</div>
</div> -->
<div class="contact-form">
	<div class="container">
		<form action="#" method="post">
			<div class="col-md-6 contact-left">
				<input type="text" value="姓名" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email address" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="text" value="手机号码" name="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
			</div>
			<div class="col-md-6 contact-right">
				<textarea name="Content" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">请在此处留下宝贵意见。</textarea>
			<p style="float:left;margin-top: 25px;">感谢您对我们的支持与鼓励.</p>
				<input type="submit" value="提交" style="float: right; border-radius: 5px" >
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
<!-- <div class="footer text-center">
	<div class="container">
		<ul class="foo-nav">
			<li><a class="scroll" href="#home">HOME</a></li>
			<li><a class="scroll" href="#about">ABOUT</a></li>
			<li><a class="scroll" href="#ban-bot">SERVICES</a></li>
			<li><a class="scroll" href="#gallery">GALLERY</a></li>
			<li><a class="scroll" href="#team">TEAM</a></li>
			<li><a class="scroll" href="#contact">CONTACT</a></li>
		</ul>
		<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</p>
		<ul class="social-one">
			<li><a class="fb1" href="#"></a></li>
			<li><a class="fb2" href="#"></a></li>
			<li><a class="fb3" href="#"></a></li>
			<li><a class="fb4" href="#"></a></li>
		</ul>
	</div>
</div>
 -->
<div class="copy-right" style="background-color: rgb(50,56,60);margin-top:10px;">
	<div class="container">
		<div class="row clearfix">
		<div class="col-sm-3 " style="padding-right: 10px;">
			<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">友情链接</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<a href="">石家庄培训机构||石家庄三中</a></br>
					
				</dd>				
			</dl>


          </div>





<div class="col-sm-3 " style="padding-right: 10px;">
				<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">了解更多</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
					<p>给予我们更多的支持与关心</p>
					<p>关注我们的发展与我们未来</p>
					<p>我的成功案例与高考的模范</p>
					<p>我们的相关工作部署与试试</p>
				</dd>				
			</dl>
</div>
<div class="col-sm-3" style="padding-right: 10px;">
				<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">产品案例</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
					<p>最强名师伴你高考冲刺</p>
					<p>最新资料助你圆名校梦</p>
					<p>最新资讯把握高考动态</p>
					<p>最强博学苑圆你大学梦</p>	
				</dd>				
			</dl>
			</br>
		</div>
		<div class="col-sm-3 "> <!-- <p style="color:white;margin-top:22px; font-size: 17px; ">博学苑微信</p> -->
		 <img src="/BOXUEYUANEND/Public/before/images/erweima.png" class="imga" style="width:145px; margin-top:0%  ;margin-left: 15px;"></br></br> 
		</div>
	</div>
		<div class="col-md-12 ">
			<div class="address" >
			 <p class="footp"style="color: rgb(134,137,139);">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p class="footp" style="color: rgb(134,137,139);">冀ICP备XXXXXXXX号-X    站长统计</p></div></div>
	</div>

</div>



<!-- //map -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		// $(document).ready(function() {
		
		// 	var defaults = {
		// 	containerID: 'toTop', // fading element id
		// 	containerHoverID: 'toTopHover', // fading element hover id
		// 	scrollSpeed: 1200,
		// 	easingType: 'linear' 
		// 	};
										
		// $().UItoTop({ easingType: 'easeOutQuart' });
		// });
	</script>

<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/classie.js"></script>
    <script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/uisearch.js"></script>
    <script type="text/javascript">
         new UISearch( document.getElementById( 'sb-search' ) );
    </script>



	<!-- <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> -->
<!-- //smooth scrolling -->
<script type="text/javascript" src="/BOXUEYUANEND/Public/before/js/bootstrap-3.1.1.min.js"></script>

</body>
</html>