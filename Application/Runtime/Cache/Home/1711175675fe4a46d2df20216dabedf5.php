<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>视频内容页</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/BOXUEYUANEND--double/Public/before/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/BOXUEYUANEND--double/Public/before/css/footer2.css" rel="stylesheet" type="text/css"/>
    <link href="/BOXUEYUANEND--double/Public/before/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="/BOXUEYUANEND--double/Public/before/css/style1.css" rel="stylesheet" type="text/css" media="all" /> 
<script src="/BOXUEYUANEND--double/Public/before/js/wow.min.js"></script>
	<script>
		 new WOW().init();   
	</script> 
</head>
<style type="text/css">
	.bcolor{
		background-color:gray;
		color:white;
		height:566px;
		padding-top:3%;
	}
	.bcolor ul{
        padding-left:0px;
       
        font-size: 20px;
	}
	.bcolor ul li{
		list-style: none;
		line-height: 43px;
		
	}
	.bcolor h3{
		margin-top:5%;
	}
/*#container{
	margin-top: 120px;
}*/
#container1{
	margin-top: 20px;
}
.pinglun dl{
			margin-top:10px;
		}
		.bian{
			border-bottom:1px solid #ccc;

		}
		.bian img{
			padding-top:10px;
		}
		.bian1{
			border:1px solid #ccc;
		}
        .all{
        	border:1px solid #ccc;
        	margin-top:1%;
        }
        .ban2{
        	border:1px solid #ccc;
        	width:100%;
        	height:50px;
        	
        	padding-top:10px;
        }
        .right-dl{
        	margin-top:10%;
        }
        .zan img{
        	margin-top:-3%;
        }
        
</style>
<body class="menu">
<!--导航栏-->
<div id="home" class="banner w3l" style="background-image: url(/BOXUEYUANEND--double/Public/before/images/bvv1.jpg); min-height:400px; ">
	<nav class="navbar navbar-default  wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s"style="background: rgba(0,188,212,0.6);">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  style="background: rgb();" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
								<a class="navbar-brand" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin"><img src="/BOXUEYUANEND--double/Public/before/images/logo.png" alt="" width="70%" style="margin-top:-10%"></a>
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
			
	    </div>
    </div>
</div>

<!--面包屑-->
<div class="container" id="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li>
					<a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页</a> 
				</li>
				<li>
					<a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Chinese/chinese">语文</a> 
				</li>
				<li class="active">
					主题
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" >
		<div class="col-xs-9 col-md-9 bcolor">
			<h2>视频：北大附中名师高考真题解析</h2>
            <video src="/BOXUEYUANEND--double/Public/<?php echo ($data["address"]); ?>" controls="controls" loop="true" id="video" style="width:100%;height:500px;"></video>
		</div>
		<div class="col-xs-3 col-md-3 bcolor">
			<h3><img src='/BOXUEYUANEND--double/Public/before/images/2.png'>推荐课程</h3>
			<ul>
			    <?php if(is_array($tuijian)): $i = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tuijian): $mod = ($i % 2 );++$i;?><li>
					<a href="/BOXUEYUANEND--double/index.php/Home/Chinese/newvideo/id/<?php echo ($tuijian["vid"]); ?>" style="color:white"><?php echo ($tuijian["videoname"]); ?></a>

				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
<br>
<br>
<!--留言部分-->
<div class="container" id="container1">

<div class="row">

	<div class="col-md-9">
	<div class="row">
	<form action="/BOXUEYUANEND--double/index.php/Home/Chinese/addliuyan" method="post">
		<div class="col-md-10"><input type="text" placeholder="qq欢迎光临，您可以写下您的留言qqq" class="ban2" name="liuyan"></div>	
		<input type="hidden" value="<?php echo ($data["vid"]); ?>" name="id" />
	    <div class="col-md-2" ><button class="btn btn-primary btn-lg" type="submit" name="submit">发表</button></div>
	   
	</form>
	<!-- <div  id="new-video"><button type="submit" class="btn btn-primary" id="btn" value="<?php echo ($data["vid"]); ?>"><a href="/BOXUEYUANEND--double/Public/before/shipin.docx" >下载文档</a></button></div> -->
	</div>
	
		
		<div class="row">
			
		<div class="col-md-12 all">
            <h3>评论：</h3>
            <?php if(is_array($liuyan)): $i = 0; $__LIST__ = $liuyan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$liuyan): $mod = ($i % 2 );++$i;?><div class="row bian">

				<div class="col-md-2 "><img src="/BOXUEYUANEND--double/Public/<?php echo ($liuyan["img"]); ?>" alt="" width="100%"></div>
				<div class="col-md-10 pinglun">
					<dl>
						<dt><?php echo ($liuyan["username"]); ?></dt>
						<br/>
						<dd><?php echo ($liuyan["liuyan"]); ?></dd>
					</dl>
				</div>
				<div class="row col-md-12 zan">
					<div class="col-md-2"></div><div class="col-md-9">赞&nbsp;&nbsp;<img src="/BOXUEYUANEND--double/Public/before/images/thumbs-up.png" alt="" width="2.5%" class="we">&nbsp;&nbsp;<span>10</span></div>

				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
			
		</div>
		</div>
	</div>
	<!-- <div class="col-md-1"></div> -->
	<div class="col-md-3">
	    <div class="col-md-12 bian1" style="text-align:center">
			<img src="/BOXUEYUANEND--double/Public/<?php echo ($teacher["img"]); ?>" alt="" style="width:100px;height:40x;padding-top:10px;">
			<dl class="right-dl">
				<dt>教师姓名：</dt>
				<dd><?php echo ($teacher["username"]); ?></dd>
				
				<dt>其他课程：</dt>
				<?php if(is_array($teachersubject)): $i = 0; $__LIST__ = $teachersubject;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$teachersubject): $mod = ($i % 2 );++$i;?><dd><?php echo ($teachersubject["videoname"]); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>
				<dt>资历：</dt>
				<dd><?php echo ($teacher["description"]); ?></dd>
				
			</dl>
		</div>
	</div>
</div>

	
</div>
<!--底部-->
<div class="copy-right" style="background-color: rgb(50,56,60);margin-top:10px;">
	<div class="container">
		<div class="row clearfix">
		<div class="col-sm-3 column" style="padding-right: 10px;">
			<dl style="float:left; padding-right: 0px;">
				<dt class="footdt">
					<h3 style="text-align: center;">友情链接</h3>
				</dt>
				<dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
				
					<p>石家庄培训机构||石家庄三中</p>
					<p>石家庄培训机构||石家庄三中</p>
					<p>石家庄培训机构||石家庄三中</p>
					<p>石家庄培训机构||石家庄三中</p>					<!-- 石家庄英语培训机构&nbsp;&nbsp;&nbsp;石家庄四十三中学</br>
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
					<p>最强名师伴你高考冲刺押题</p><p>最新资料助你圆名校梦全面</p><p>最新资讯把握高考动态掌控</p><p>最强指导博学苑圆你大学梦</p>
					
				</dd>				
			</dl>
			</br>
		
		</div>
		
		<div class="col-sm-3 column"> <!-- <p style="color:white;margin-top:22px; font-size: 17px; ">博学苑微信</p> -->
		   <img src="/BOXUEYUANEND--double/Public/before/images/erweima.png" class="imga" style="width:145px; margin-top:0%  ;margin-left: 15px;"></br></br>
		  
		</div>
		<!-- <div class="col-md-2 column">
		   <img src="/BOXUEYUANEND--double/Public/before/images/qr_2.png" class="imga"xiia></br></br>
		   <p>博学苑qq</p>
		</div> -->
	</div>
		<div class="col-md-12 column">
			<div class="address" >
			 <p class="footp"style="color: rgb(134,137,139);">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p class="footp" style="color: rgb(134,137,139);">冀ICP备XXXXXXXX号-X    站长统计</p></div></div>
	</div>

</div>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/jquery-2.1.4.min.js"></script>
<script src="/BOXUEYUANEND--double/Public/before/js/jquery-1.7.2.min.js"></script>
<script src="/BOXUEYUANEND--double/Public/before/js/bootstrap-3.1.1.min.js"></script>
<script>
$(function(){
	$(window).on('scroll', function(){
		if($(window).scrollTop() > 50){
			$('.header').removeClass('large').addClass('small');
		} else {
			$('.header').removeClass('small').addClass('large');
		}
	});
});
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
	//alert(id);
	xhr.open('get', '/BOXUEYUANEND--double/index.php/Home/Chinese/downjiaocai?downid='+id, true);
	xhr.send();
}

</script>
<script type="text/javascript">                                                                                                             
$(function(){
	$('.we').on('click',function(){
           $(this).next().html(parseInt($(this).next().text())+1);
	});
});
</script> 

</body>
</html>