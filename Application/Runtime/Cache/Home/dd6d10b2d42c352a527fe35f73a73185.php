<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>试题内容</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="/BOXUEYUANEND--double/Public/before/css/footer.css" rel="stylesheet" type="text/css" y>
<link href="/BOXUEYUANEND--double/Public/before/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/BOXUEYUANEND--double/Public/before/css/animate.css" rel="stylesheet" type="text/css" media="all" />
<link href="/BOXUEYUANEND--double/Public/before/css/style1.css" rel="stylesheet" type="text/css" media="all" />
  
<link href="/BOXUEYUANEND--double/Public/before/css/swipebox.css" rel="stylesheet" type="text/css" media="all" /> 
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/easing.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/move-top.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/numscroller-1.0.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/wow.min.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/responsiveslides.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<style>
	.title-img{
	float:right;
}
.panel-footer{
	text-align:center;
}
.panel-footer p{
	color:red;
}
#btn a{
	text-decoration:none;
	color:white;
	text-align:center;
}
#btn a:hover{
	text-decoration:none;
	color:white;
}
.tiankong{
	border-bottom:1px #ccc solid;
	width:5%;
}
</style>
</head>
<body>
<!-- header -->
<div id="home" class="banner w3l" style="background-image: url(/BOXUEYUANEND--double/Public/before/images/高考3.jpg); min-height:400px; ">
	<nav class="navbar navbar-default  wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s"style="background:rgba(0,188,212,0.6);">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  style="background: rgb();" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
								<a class="navbar-brand" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin"><img src="/BOXUEYUANEND--double/Public/before/images/logo.png" alt="" width="70%" style="margin-top:-10%;"></a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
										<ul class="nav navbar-nav ">

									<li><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页<p>Home</p></a></li>
										
										<li id="act-Home"><a class="scroll hvr-bounce-to-bottom active" href="/BOXUEYUANEND--double/index.php/Home/Course/course">课程天地<p style="text-align: center;"> Course</p></a></li>
										
									    <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Teacher/teacher">名师团队<p style="text-align: center;">Teacher</p></a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Hot/hot">热点资讯 <p style="text-align: center;">News</p></a></li>
<li><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/About/about">关于我们<p style="text-align: center;">About</p></a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Person/person">个人中心<p style="text-align: center;">Center</p></a></li><li><a class="hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/person/logout" >退出<p >Logout</p></a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
	</nav>
	<div class="container">
		
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<script src="/BOXUEYUANEND--double/Public/before/js/responsiveslides.min.js"></script>
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
			<!-- <div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>成就未来，BOXUEYUAN</h3>
							<p>用我的肩膀 助你成长</p>
						</div>
					</li><li>
						<div class="banner-text">
							<h3>最新教材，最新资料</h3>
							<p>我们致力于推送第一手资料</p>
						</div>
					</li><li>
						<div class="banner-text">
							<h3>最强名师，强强联手</h3>
							<p>我们为您提供最优秀的师资力量</p>
						</div>
					</li><li>
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
		</div> -->
		<!-- <div class="more-button text-center">
			<a href="#ban-bot" class="scroll"><img src="/BOXUEYUANEND--double/Public/before/images/icon.png" alt=" "/></a>
		</div> -->
	    </div>
    </div>
</div>
<!-- 面包屑 -->
<div class="container" id="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
						        
			 <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Lizong/lizong">理综</a> 
						          </li>
				<li class="active">
					试题练习
				</li>
			</ul>
		</div>
	</div>
</div>
<!--内容-->
 <div class="container">
    
    <div class="row wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
      <div class="col-xs-1 col-sm-1 col-md-1">
       
      </div>
      <div class="col-xs-10 col-sm-10 col-md-10">
      <div class="row">
      	<div class="col-xs-2 col-sm-2 col-md-2"> <img src="/BOXUEYUANEND--double/Public/before/images/watch.jpg" width="70%" class="title-img"></div>
      	<div class="col-xs-10 col-sm-10 col-md-10"><h1><?php echo ($data["zname"]); ?></h1>
        <p>时间：<?php echo ($data["updatetime"]); ?>&nbsp;&nbsp;&nbsp;来源：博学苑梦之队&nbsp;&nbsp;&nbsp;作者：梦之队</p></div>
      </div>
     
        
        <hr/>
        <div class="row">
        	 <p>&nbsp;&nbsp;&nbsp;&nbsp;各位博学苑的学员，博学苑会根据2017年高考在第一时间更新各地题库，并对各套题进行深入的点评和解析，希望各大考生随时关注博学苑。</p>
        </div>
       
        <!--试卷部分-->
        <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <?php echo ($data["zname"]); ?>
          </h3>
        </div>
        <div class="panel-body">
          <h3 style="text-align:center"><?php echo ($data["zname"]); ?></h3>
          <?php echo (htmlspecialchars_decode($data["content"])); ?>
        </div>
        <div class="panel-footer">
          <h3 >阅读已结束，如想继续阅读请下载文本！</h3>
          <p>1334人已下载</p>
          <button type="submit" class="btn btn-primary" id="btn" value="<?php echo ($data["id"]); ?>"><a href="/BOXUEYUANEND--double/Public/before/shiti.docx" >下载文档</a></button>
        </div>
      </div>
        <!--试卷部分结束-->
      </div>
    </div>
    </div>

<div class="row">
     	<div class="col-md-2"></div>
     	<div class="col-md-10">
     		<div class="col-md-6">上一篇：<a href="/BOXUEYUANEND--double/index.php/Home/Lizong/shiti/id/<?php echo ($front["id"]); ?>"><?php echo ($front["zname"]); ?></a></div>
     		<div class="col-md-6">下一篇：<a href="/BOXUEYUANEND--double/index.php/Home/Lizong/shiti/id/<?php echo ($after["id"]); ?>"><?php echo ($after["zname"]); ?></a></div>
     	</div>
     	<div class="col-md-2"></div>
     </div>

<!--内容结束-->
<!--底部-->
<div class="copy-right" style="background-color: rgb(50,56,60);margin-top:20px;">
	<div class="container">
		<div class="row clearfix">
		<div class="col-sm-3 column" style="padding-right: 10px;">
			<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">友情链接</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<a href="">石家庄培训机构||石家庄三中</a></br>
					<!-- 石家庄英语培训机构&nbsp;&nbsp;&nbsp;石家庄四十三中学</br>
					石家庄英语培训机构&nbsp;&nbsp;&nbsp;石家庄四十三中学</br>	石家庄英语培训机构&nbsp;&nbsp;&nbsp;石家庄四十三中学</br>		 -->
				</dd>				
			</dl>


</div>





<div class="col-sm-3 column" style="padding-right: 10px;">

				<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">了解更多</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
					<p>给予我们更多的支持与关心</p>
					<p>关注我们的发展与我们未来</p>
					<p>我的成功案例与高考的模范</p>
					<p>我们的相关工作部署与试试</p>
					
					<!-- 石家庄英语培训机构||&nbsp;石家庄四十三中学</br>
					石家庄英语培训机构||&nbsp;石家庄四十三中学</br>	石家庄英语培训机构||&nbsp;石家庄四十三中学</br>		 -->
				</dd>				
			</dl>

</div>


<div class="col-sm-3 column" style="padding-right: 10px;">




				<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">产品案例</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
					<p>最强名师伴你高考冲刺</p><p>最新资料助你圆名校梦</p><p>最新资讯把握高考动态</p><p>最强博学苑圆你大学梦</p>
					
				</dd>				
			</dl>
			</br>
		
		</div>
		
		<div class="col-sm-3 column"> <!-- <p style="color:white;margin-top:22px; font-size: 17px; ">博学苑微信</p> -->
		   <img src="/BOXUEYUANEND--double/Public/before/images/erweima.png" class="imga" style="width:145px; margin-top:0%  ;margin-left: 15px;"></br></br>
		  
		</div>
		<!-- <div class="col-md-2 column">
		   <img src="images/qr_2.png" class="imga"xiia></br></br>
		   <p>博学苑qq</p>
		</div> -->
	</div>
		<div class="col-md-12 column">
			<div class="address" >
			 <p class="footp"style="color: rgb(134,137,139);">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p class="footp" style="color: rgb(134,137,139);">冀ICP备XXXXXXXX号-X    站长统计</p></div></div>
	</div>

</div>

<!--底部结束-->


<!-- //smooth scrolling -->
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/bootstrap-3.1.1.min.js"></script>

</body>
<script type="text/javascript">
function getXhr() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
	}
	else {
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}
document.getElementById("btn").onclick = function() {
	var xhr = getXhr();
	var id = document.getElementById("btn").value;
	// alert(id);
	xhr.open('get', '/BOXUEYUANEND--double/index.php/Home/Lizong/downtest?downid='+id, true);
	xhr.send();
}
</script>
</html>