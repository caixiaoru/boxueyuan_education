<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/> 
	<title>购买</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/css/footer2.css" rel="stylesheet" type="text/css"/>
    <link href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js/wow.min.js"></script>
	<script>
		 new WOW().init();  
	</script>
	  <script type="text/javascript" src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js/jquery-1.8.3.min.js"></script>
 
        <style type="text/css">
            .shang_box{width:540px;height:540px;padding:10px;background-color:#fff;border-radius:10px;position:fixed;z-index:1000;left:50%;top:50%;margin-left:-280px;margin-top:-280px;border:1px dotted #dedede;display:none;}
           .shang_payimg{width:140px;padding:10px;margin:0 auto;border-radius:3px;height:140px;}
            .shang_payimg img{display:block;text-align:center;width:140px;height:140px; }
            .pay_explain{text-align:center;margin:10px auto;font-size:12px;color:#545454;}
            .radiobox{width: 16px;height: 16px;background: url('/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/radio2.jpg');display: block;float: left;margin-top: 5px;margin-right: 14px;}
            .checked .radiobox{background:url('/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/radio1.jpg');}
            .shang_payselect{text-align:center;margin:0 auto;margin-top:40px;cursor:pointer;height:60px;width:280px;}
            .shang_payselect .pay_item{display:inline-block;margin-right:10px;float:left;}
            .shang_info p,.shang_info a{color:#C3C3C3;text-align:center;font-size:12px;text-decoration:none;line-height:2em;}
            .shang_tit{text-align:center;}
        </style>
</head>
<style type="text/css">


#container1{
	margin-top: -90px;
}
#modal-container-171610{
	width:500px;
	height: 300px;
	margin-top: 16px;
	margin-left: 400px;
	margin-right: 300px;

}
#myModalLabel{
	color:white;
}
.pcolor{
	color:white;
}
#con .active1{
	border-top:1px red solid;
	color:red;
}
#con .active1 a{
	
	color:red;
}
</style>
<body>
<!--导航栏-->
<!--导航-->
<div id="home" class="banner w3l" style="background-image: url(/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/bvv1.jpg); min-height:400px; ">
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
								<a class="navbar-brand" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Index/indexlogin"><img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/logo.png" alt="" width="70%" style="margin-top:-10%;"></a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">

									<li><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Index/indexlogin">首页<p>Home</p></a></li>
										
										<li id="act-Home"><a class="scroll hvr-bounce-to-bottom active" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Course/course">课程天地<p style="text-align: center;"> Course</p></a></li>
										
									    <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Teacher/teacher">名师团队<p style="text-align: center;">Teacher</p></a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Hot/hot">热点资讯 <p style="text-align: center;">News</p></a></li>
<li><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/About/about">关于我们<p style="text-align: center;">About</p></a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Person/person">个人中心<p style="text-align: center;">Center</p></a></li><li><a class="hvr-bounce-to-bottom " href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/person/logout" >退出<p >Logout</p></a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
	</nav>
	<div class="container">
		
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js//responsiveslides.min./BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js/"></script>
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
					<a rel="nofollow" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Index/indexlogin">首页</a> 
				</li>
				<li>
					<a rel="nofollow" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Lizong/lizong">理综</a>
				</li>
				<li class="active">
					教材
				</li>
			</ul>
		</div>
	</div>
</div>
<!--购买内容-->
<div class="container">
<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
					<h3>
						图书详细介绍
					</h3>
				</div>
				<div class="col-md-5 column">  <a href="tencent://message/?uin=2918535608" class="btn btn-primary btn-large" href="#">开始聊天</a>
			
				</div>
				
			
				
			</div>
			<br>
			
			<div class="row clearfix">
				<div class="col-md-2 column">
					<img alt="140x140" src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/<?php echo ($data["thumb"]); ?>" width="100%"/>
				</div>
				<div class="col-md-4 column">
					<dl>
						<dt style="margin-top:8%">
							<?php echo ($data["dataname"]); ?>
						</dt>
						<dd>
							 <?php echo ($data["subject"]); ?>
						</dd>
						<dd>
							 <?php echo ($data["zhaiyao"]); ?>
						</dd>
						
					</dl>
				</div>
				
				<div class="col-md-1 column">
					<p>
						
					</p>
				</div>
				
				<div class="col-md-1 column">
					<p>
						 单价
					</p>
					<br>
						 <p  ><span style="color:red;text-align:center;"> 88</span>元</p>
					
				</div>
				<div class="col-md-3 column">
				<p style="text-align:center;">
						数量
					</p>
					<br>
					<div class="col-md-10 column"><button type="button" class="btn btn-default" id="jian">-</button><input type="text" value="1" style="height:2.2em;width:4em;text-align:center;" id="cont"><button type="button" class="btn btn-default" id="jia">+</button>  件（库存503件）
            </div>
             
				</div>
				<div class="col-md-1 column">
				<p >
						 总价
					</p>
					<br>
					<p ><span id="yuan" style="color:red;">88</span> 元</p>
					 <script>
  $("#contant").click(function(){
    window.location.href="service.html";
  });
  
window.dan=$("#yuan").html();
  
  $("#jia").click(function(){
  	 $("#jian").attr("disabled", false); 
    window.count=parseInt($("#cont").val());
    window.count=window.count+1;
    window.zong= window.dan*window.count;
    $("#cont").val(window.count);
    $("#yuan").html(window.zong); 
   
    
  });
  $("#jian").click(function(){
     window.count=window.count-1;
     window.zong= window.dan*window.count; 
     $("#yuan").html(window.zong); 
     $("#cont").val(window.count);
      if(window.count<=1){
        $("#jian").attr("disabled", true); 
     }
  });
  
</script>   
				</div>
			</div>
			<br>
			<div class="row clearfix" >
		<div class="col-md-6 column">
		</div>
		<div class="col-md-2 column">
		
			
		</div>
		<div class="col-md-4 column">
			 <a href="javascript:void(0)" onclick="dashangToggle()" class="dashang col-md-3 btn btn-default btn-danger" title="立即支付">立即支付</a> <span class="col-md-2 ">&nbsp;</span>  <div class="hide_box"></div>
            <div class="shang_box">
                <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭"><img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/close.jpg" alt="取消" /></a>
                <div class="shang_tit">
                    <p>感谢您的支持，我会继续努力的!</p>
                </div>
                <div class="shang_payimg">
                    <img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/alipayimg.jpg" alt="扫码支持" title="扫一扫" />
                </div>
                <!-- <div class="pay_explain">扫码支付，您需要支付<span style="color:red;font-size:2em;"><script>document.write(String(window.zong))</script></span>元</div> -->
                <div class="shang_payselect">
                    <div class="pay_item checked" data-id="alipay">
                        <span class="radiobox"></span>
                        <span class="pay_logo"><img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/alipay.jpg" alt="支付宝" /></span>
                    </div>
                    <div class="pay_item" data-id="weipay">
                        <span class="radiobox"></span>
                        <span class="pay_logo"><img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/wechat.jpg" alt="微信" /></span>
                    </div>
                </div>
                <div class="shang_info">
                    <p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行支付哦</p>
                </div>
            </div>
		</div>
	</div>
		</div>
	</div>
	
</div>
<br>
<br>
<br>
<div class="container" id="con">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="tabbable" id="tabs-103258">
				<ul class="nav nav-tabs">
					<li class="active active1">
						 <a href="#panel-293321" data-toggle="tab">猜你喜欢</a>
					</li>
					
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-293321">
					<br>
					<br>
					<br>
						<div class="row clearfix" style="text-align:center;">
	 <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i;?><div class="col-md-3 column">
			<img alt="140x140" src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/<?php echo ($datas["thumb"]); ?>" /> 
			<br>
			<br>
			<p style="text-align:center;"><button type="button" class="btn btn-default btn-danger"><a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Home/Lizong/newbuy/id/<?php echo ($datas["zid"]); ?>">购买</a></button></p>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br>
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
					<p>最强名师伴你高考冲刺</p><p>最新资料助你圆名校梦</p><p>最新资讯把握高考动态</p><p>最强博学苑圆你大学梦</p>
					
				</dd>				
			</dl>
			</br>
		
		</div>
		
		<div class="col-sm-3 column"> <!-- <p style="color:white;margin-top:22px; font-size: 17px; ">博学苑微信</p> -->
		   <img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/erweima.png" class="imga" style="width:145px; margin-top:0%  ;margin-left: 15px;"></br></br>
		  
		</div>
		<!-- <div class="col-md-2 column">
		   <img src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/qr_2.png" class="imga"xiia></br></br>
		   <p>博学苑qq</p>
		</div> -->
	</div>
		<div class="col-md-12 column">
			<div class="address" >
			 <p class="footp"style="color: rgb(134,137,139);">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p class="footp" style="color: rgb(134,137,139);">冀ICP备XXXXXXXX号-X    站长统计</p></div></div>
	</div>

</div>





















<!--底部-->

<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js/jquery-1.7.2.min.js"></script>
<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
            $(function() {
                $(".pay_item").click(function() {
                    $(this).addClass('checked').siblings('.pay_item').removeClass('checked');
                    var dataid = $(this).attr('data-id');
                    $(".shang_payimg img").attr("src", "/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/before/images/" + dataid + "img.jpg");
                    $("#shang_pay_txt").text(dataid == "alipay" ? "支付宝" : "微信");
                });
            });
            function dashangToggle() {
                $(".hide_box").fadeToggle();
                $(".shang_box").fadeToggle();
            }
        </script>
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
    // $(document).ready(function(){
    //     $('#modal-container-171610').modal('show');
    // });
</script>

</body>
</html>