<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>高考专题</title>

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
<style>
    .a-header {

	margin-bottom: 70px;
	overflow: hidden;
}
.b-header {
    
	
	overflow: hidden;
}
.c-header {
    
	margin-bottom: 70px;
	overflow: hidden;
}


.a-title {
	text-align: center;
	text-transform: uppercase;
	font-size: 36px;
	font-weight: 300;

}

#data{
	
	text-align: center;
	vertical-align: middle;

}
#data ul{
	margin-top: 30px;
}
#data ul li{
	list-style: none;
	line-height: 30px;
}
#data ul li a{
	text-decoration: none;
	color: gray;
}

h2{
	text-align: center;
}
hr { border-top: 1px solid #111010; }
.gal-img p{
	margin: 0px;
}
.note h4 a{
	font-weight: bold;
}
.note h4 p{
	font-size: 14px;
	line-height: 20px
}
.table td a{
	color:gray;
}
.nav-tabs > li > a{
	color:rgb(0,188,212);
	background-color: white;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
	background-color: rgb(0,188,212);
	color:white;
}
</style>
<script>
		 new WOW().init();
	</script>

</head>
<body>








<!-- 顶部 -->
<div id="home" class="banner w3l" style="background-image: url(/BOXUEYUANEND--double/Public/before/images/高考3.jpg); min-height:400px; ">
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
								<a class="navbar-brand" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin"><img src="/BOXUEYUANEND--double/Public/before/images/logo.png" alt="" width="70%"style="margin-top:-10%;"></a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">

										<li ><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页<p>Home</p></a></li>
										
										<li id="act-Home"><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Course/course ">课程天地<p style="text-align: center;"> Course</p></a></li>
										
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
			<script src="js/responsiveslides.min.js"></script>
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
			<a href="#ban-bot" class="scroll"><img src="images/icon.png" alt=" "/></a>
		</div> -->
	    </div>
    </div>
</div>


<!-- 内容 -->
 <div class="container" style="margin-top:-3.7%">
	
		<div class="col-md-12 column" >
			<div class="tabbable" id="tabs-190747">
				<ul class="nav nav-tabs">
					<li class="active">
						 <a href="#panel-1" data-toggle="tab">语文</a>
					</li>
					<li>
						 <a href="#panel-2" data-toggle="tab">数学</a>
					</li>
					<li>
						 <a href="#panel-3" data-toggle="tab">英语</a>
					</li>
					<li>
						 <a href="#panel-4" data-toggle="tab">理综</a>
					</li>
					<li>
						 <a href="#panel-5" data-toggle="tab">文综</a>
					</li>
					<li>
						 <a href="#panel-6" data-toggle="tab">备考策略</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
			    <div class="tab-pane active" id="panel-1">
						<!--面包屑-->
						    <div class="row">
						      <div class="col-xs-12 col-sm-12 col-md-12 column">
						        <ul class="breadcrumb">
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="#">高考专题</a> 
						          </li>
						          <li class="active">
						            语文
						          </li>
						        </ul>
						      </div>
						    </div>
						 <!--面包屑结束-->

						<div id="gallery" class="gallery all_pad wthree" style="padding-bottom:30px; ">
						
							<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">状元笔记</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>
	<!--状元笔记-->
                            <div class="t-content-gds">
                           <?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note["wid"]); ?>"><img class="img-responsive" src="/BOXUEYUANEND--double/Public/<?php echo ($note["img"]); ?>" alt=" "style="width:253px;height:165px;"/></a>
										<div class="team-text" style="text-align: center;">
											<h5><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note["wid"]); ?>"><?php echo ($note["name"]); ?></a></h5>
										    <p><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note["wid"]); ?>"><?php echo ($note["title"]); ?></a></p>
											<p><?php echo ($note["summary"]); ?> </p>
											
										</div>
									</div>
			                     </div><?php endforeach; endif; else: echo "" ;endif; ?>		
<!-- 			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images\video2.jpg" alt=" "/style="width:253px;height:165px;">
										<div class="team-text" style="text-align: center;">
											<h5><a href="notes.html">王二锤</a></h5>
											<p><a href="notes.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video3.jpg" alt=" "style="width:253px;height:165px;"/>
										<div class="team-text" style="text-align: center;">
											<h5><a href="notes.html">王三锤</a></h5>
											<p><a href="notes.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				                   <div class="team-img">
									<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video1.jpg" alt=" "style="width:253px;height:165px;"/>
									<div class="team-text" style="text-align: center;">
										<h5><a href="notes.html">王小锤</a></h5>
									    <p><a href="notes.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
										
									</div>
								    </div>
			                     </div> -->
			                     <div class="clearfix"></div>
		                    </div>
							
							<div class="clearfix"> </div>						
					    </div>

                       <!--高考真题-->
					    <div id="data">
					    	<div class="b-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">高考真题</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>

							<div class="abt-what agileits all_pad wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0s">

					           						
						            <div class="col-md-12 ab-left" style="font-size:16px; " >
						         		
                                         <div class="" style="border:1px  gray;">
                                           <table class="table">
								               <thead>
								                  <tr>
								                    <th>
								                  
								                       2016年全国各地高考语文试题分类汇编
								                    </th>
								                  </tr>
								                 </thead>
								                 
								                 <tbody>
								           <?php if(is_array($test)): $i = 0; $__LIST__ = $test;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$test): $mod = ($i % 2 );++$i;?><tr>
								                <td>
								                  <a href="/BOXUEYUANEND--double/index.php/Home/GaoKao/zhenti/id/<?php echo ($test["id"]); ?>"><p > <?php echo ($test["zname"]); ?></p></a>                      
								                </td>
								                <td><p ><?php echo ($test["addtime"]); ?></p></td>
								              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
								              <!-- <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【02】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【03】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【04】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【05】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【06】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【07】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【08】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【09】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【10】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>               -->
								                 </tbody>
								                 
                                           </table>      
                                         </div>	
										 <!-- <div class="view-pos" style="bottom:0%; "><h4><a href="">点击进入测试</a></h4></div>									  -->
						         	</div>
						           
						        
						         	
										
						        
						         <div class="clearfix"> </div>
	                          
                            </div>
							
					    </div>                        
                </div>
			    <div class="tab-pane" id="panel-2">
						<!--面包屑-->
						    <div class="row">
						      <div class="col-xs-12 col-sm-12 col-md-12 column">
						        <ul class="breadcrumb">
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="#">高考专题</a> 
						          </li>
						          <li class="active">
						            数学
						          </li>
						        </ul>
						      </div>
						    </div>
						 <!--面包屑结束-->

						<div id="gallery" class="gallery all_pad wthree" style="padding-bottom:30px; ">
						
							<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">状元笔记</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>
                            <div class="t-content-gds">

			                     <?php if(is_array($note1)): $i = 0; $__LIST__ = $note1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note1): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									     <div class="team-img">
										   <a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note["wid"]); ?>"><img class="img-responsive" src="/BOXUEYUANEND--double/Public/<?php echo ($note1["img"]); ?>" alt=" "style="width:253px;height:165px;"/></a>
										    <div class="team-text" style="text-align: center;">
											   <h5><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note1["wid"]); ?>"><?php echo ($note1["name"]); ?></a></h5>
										       <p><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note1["wid"]); ?>"><?php echo ($note1["title"]); ?></a></p>
											   <p><?php echo ($note1["summary"]); ?> </p>
											
										    </div>
									     </div>
			                           </div><?php endforeach; endif; else: echo "" ;endif; ?>	
			                     <div class="clearfix"></div>
		                    </div>
							
							<div class="clearfix"> </div>						
					    </div>

                       <!--高考真题-->
					   <div id="data">
					    	<div class="b-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">高考真题</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>

							<div class="abt-what agileits all_pad wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0s">

					           						
						            <div class="col-md-12 ab-left" style="font-size:16px; " >
						         		
                                         <div class="" style="border:1px  gray;">
                                           <table class="table">
								               <thead>
								                  <tr>
								                    <th>
								                  
								                       2016年全国各地高考数学试题分类汇编
								                    </th>
								                  </tr>
								                 </thead>
								                 <tbody>
								           <?php if(is_array($test1)): $i = 0; $__LIST__ = $test1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$test1): $mod = ($i % 2 );++$i;?><tr>
								                  <td>
								                    <a href="/BOXUEYUANEND--double/index.php/Home/GaoKao/zhenti/id/<?php echo ($test["id"]); ?>"><p ><?php echo ($test1["zname"]); ?></p></a>                      
								                  </td>
								                  <td><p ><?php echo ($test1["addtime"]); ?></p></td>
								                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
								               
								                 </tbody>
                                           </table>      
                                         </div>	
										 <!-- <div class="view-pos" style="bottom:0%; "><h4><a href="">点击进入测试</a></h4></div>									  -->
						         	</div>
						         
						        
						         	
										
						        
						         <div class="clearfix"> </div>
	                          
                            </div>
							
					    </div>                        
                </div>
		        <div class="tab-pane" id="panel-3">
						<!--面包屑-->
						    <div class="row">
						      <div class="col-xs-12 col-sm-12 col-md-12 column">
						        <ul class="breadcrumb">
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="#">高考专题</a> 
						          </li>
						          <li class="active">
						            英语
						          </li>
						        </ul>
						      </div>
						    </div>
						 <!--面包屑结束-->

						<div id="gallery" class="gallery all_pad wthree" style="padding-bottom:30px; ">
						
							<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">状元笔记</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>
                            <div class="t-content-gds">
                              <?php if(is_array($note2)): $i = 0; $__LIST__ = $note2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note2): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note2["wid"]); ?>"><img class="img-responsive" src="/BOXUEYUANEND--double/Public/<?php echo ($note2["img"]); ?>" alt=" "style="width:253px;height:165px;"/></a>
										<div class="team-text" style="text-align: center;">
											<h5><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note2["wid"]); ?>"><?php echo ($note2["name"]); ?></a></h5>
										    <p><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note2["wid"]); ?>"><?php echo ($note2["title"]); ?></a></p>
											<p><?php echo ($note2["summary"]); ?> </p>
											
										</div>
									</div>
			                     </div><?php endforeach; endif; else: echo "" ;endif; ?>			
			                     <!-- <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video2.jpg" alt=" "/style="width:253px;height:165px;">
										<div class="team-text" style="text-align: center;">
											<h5><a href="notes.html">王二锤</a></h5>
											<p><a href="notes.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video3.jpg" alt=" "style="width:253px;height:165px;"/>
										<div class="team-text" style="text-align: center;">
											<h5><a href="notes.html">王三锤</a></h5>
											<p><a href="notes.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				                   <div class="team-img">
									<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video1.jpg" alt=" "style="width:253px;height:165px;"/>
									<div class="team-text" style="text-align: center;">
										<h5><a href="notes.html">王小锤</a></h5>
									    <p><a href="notes.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
										
									</div>
								    </div>
			                     </div> -->
			                     <div class="clearfix"></div>
		                    </div>
							
							<div class="clearfix"> </div>						
					    </div>

                       <!--高考真题-->
					    <div id="data">
					    	<div class="b-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">高考真题</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>

							<div class="abt-what agileits all_pad wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0s">

					           						
						            <div class="col-md-12 ab-left" style="font-size:16px; " >
						         		
                                         <div class="" style="border:1px  gray;">
                                           <table class="table">
								               <thead>
								                  <tr>
								                    <th>
								                  
								                       2016年全国各地高考英语试题分类汇编
								                    </th>
								                  </tr>
								                 </thead>
								                 <tbody>
								          <?php if(is_array($test2)): $i = 0; $__LIST__ = $test2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$test2): $mod = ($i % 2 );++$i;?><tr>
								                  <td>
								                    <a href="/BOXUEYUANEND--double/index.php/Home/GaoKao/zhenti/id/<?php echo ($test["id"]); ?>"><p > <?php echo ($test2["zname"]); ?></p></a>                      
								                  </td>
								                  <td><p ><?php echo ($test2["addtime"]); ?></p></td>
								                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
								              <!-- <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【02】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【03】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【04】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【05】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【06】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【07】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【08】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【09】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【10】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>       -->        
								                 </tbody>
                                           </table>      
                                         </div>	
										 <!-- <div class="view-pos" style="bottom:0%; "><h4><a href="">点击进入测试</a></h4></div>									  -->
						         	</div>
						         
						        
						         	
										
						        
						         <div class="clearfix"> </div>
	                          
                            </div>
							
					    </div>                       
                </div>
                <div class="tab-pane" id="panel-4">
						<!--面包屑-->
						    <div class="row">
						      <div class="col-xs-12 col-sm-12 col-md-12 column">
						        <ul class="breadcrumb">
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="#">高考专题</a> 
						          </li>
						          <li class="active">
						            理综
						          </li>
						        </ul>
						      </div>
						    </div>
						 <!--面包屑结束-->

						<div id="gallery" class="gallery all_pad wthree" style="padding-bottom:30px; ">
						
							<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">状元笔记</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>
                            <div class="t-content-gds">
			                   <?php if(is_array($note3)): $i = 0; $__LIST__ = $note3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note3): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note3["wid"]); ?>"><img class="img-responsive" src="/BOXUEYUANEND--double/Public/<?php echo ($note3["img"]); ?>" alt=" "style="width:253px;height:165px;"/></a>
										<div class="team-text" style="text-align: center;">
											<h5><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note3["wid"]); ?>"><?php echo ($note3["name"]); ?></a></h5>
										    <p><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note3["wid"]); ?>"><?php echo ($note3["title"]); ?></a></p>
											<p><?php echo ($note3["summary"]); ?> </p>
											
										</div>
									</div>
			                     </div><?php endforeach; endif; else: echo "" ;endif; ?>			
			                    <!--  <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video2.jpg" alt=" "/style="width:253px;height:165px;">
										<div class="team-text" style="text-align: center;">
											<h5><a href="teacher-content.html">王二锤</a></h5>
											<p><a href="teacher-content.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video3.jpg" alt=" "style="width:253px;height:165px;"/>
										<div class="team-text" style="text-align: center;">
											<h5><a href="teacher-content.html">王三锤</a></h5>
											<p><a href="teacher-content.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				                   <div class="team-img">
									<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video1.jpg" alt=" "style="width:253px;height:165px;"/>
									<div class="team-text" style="text-align: center;">
										<h5><a href="teacher-content.html">王小锤</a></h5>
									    <p><a href="teacher-content.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
										
									</div>
								    </div>
			                     </div> -->
			                     <div class="clearfix"></div>
		                    </div>
							
							<div class="clearfix"> </div>						
					    </div>

                       <!--高考真题-->
					    <div id="data">
					    	<div class="b-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">高考真题</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>

							<div class="abt-what agileits all_pad wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0s">

					           <div id="">						
						            <div class="col-md-12 ab-left" style="font-size:16px; " >
						         		
                                         <div class="" style="border:1px  gray;">
                                           <table class="table">
								               <thead>
								                  <tr>
								                    <th>
								                  
								                       2016年全国各地高考理综试题分类汇编
								                    </th>
								                  </tr>
								                 </thead>
								                 <tbody>
								              <?php if(is_array($test3)): $i = 0; $__LIST__ = $test3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$test3): $mod = ($i % 2 );++$i;?><tr>
								                  <td>
								                    <a href="/BOXUEYUANEND--double/index.php/Home/GaoKao/zhenti/id/<?php echo ($test["id"]); ?>"><p > <?php echo ($test3["zname"]); ?></p></a>                      
								                  </td>
								                  <td><p ><?php echo ($test3["addtime"]); ?></p></td>
								                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
								              <!-- <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【02】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【03】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【04】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【05】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【06】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【07】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【08】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【09】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【10】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>               -->
								                 </tbody>
                                           </table>      
                                         </div>	
										 <!-- <div class="view-pos" style="bottom:0%; "><h4><a href="">点击进入测试</a></h4></div>									  -->
						         	</div>
						         
						        
						         	
										
						        
						         <div class="clearfix"> </div>
	                          </div>
                            </div>
							
					    </div>                        
                </div>
                <div class="tab-pane" id="panel-5">
						<!--面包屑-->
						    <div class="row">
						      <div class="col-xs-12 col-sm-12 col-md-12 column">
						        <ul class="breadcrumb">
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="#">高考专题</a> 
						          </li>
						          <li class="active">
						            文综
						          </li>
						        </ul>
						      </div>
						    </div>
						 <!--面包屑结束-->

						<div id="gallery" class="gallery all_pad wthree" style="padding-bottom:30px; ">
						
							<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">状元笔记</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>
                            <div class="t-content-gds">
			                    <?php if(is_array($note4)): $i = 0; $__LIST__ = $note4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note4): $mod = ($i % 2 );++$i;?><div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note4["wid"]); ?>"><img class="img-responsive" src="/BOXUEYUANEND--double/Public/<?php echo ($note4["img"]); ?>" alt=" "style="width:253px;height:165px;"/></a>
										<div class="team-text" style="text-align: center;">
											<h5><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note4["wid"]); ?>"><?php echo ($note4["name"]); ?></a></h5>
										    <p><a href="/BOXUEYUANEND--double/index.php/Home/Note/note/Wid/<?php echo ($note4["wid"]); ?>"><?php echo ($note4["title"]); ?></a></p>
											<p><?php echo ($note4["summary"]); ?> </p>
											
										</div>
									</div>
			                     </div><?php endforeach; endif; else: echo "" ;endif; ?>			
			                     <!-- <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video2.jpg" alt=" "/style="width:253px;height:165px;">
										<div class="team-text" style="text-align: center;">
											<h5><a href="teacher-content.html">王二锤</a></h5>
											<p><a href="teacher-content.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
									<div class="team-img">
										<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video3.jpg" alt=" "style="width:253px;height:165px;"/>
										<div class="team-text" style="text-align: center;">
											<h5><a href="teacher-content.html">王三锤</a></h5>
											<p><a href="teacher-content.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
											
										</div>
									</div>
			                     </div>
			                     <div class="col-md-3 t-cont-gds wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				                   <div class="team-img">
									<img class="img-responsive" src="/BOXUEYUANEND--double/Public/before/images/video1.jpg" alt=" "style="width:253px;height:165px;"/>
									<div class="team-text" style="text-align: center;">
										<h5><a href="teacher-content.html">王小锤</a></h5>
									    <p><a href="teacher-content.html">2016年北京市高考状元</a></p>
											<p>答题技巧：“基础题，全做对；一般题，一分不浪费；尽力冲击较难题，即使做错不后悔”。“容易题 不丢分，难题不得零分。“该得的分一分不丢，难得的分每分必争”，“会做做对不扣分” </p>
										
									</div>
								    </div>
			                     </div> -->
			                     <div class="clearfix"></div>
		                    </div>
							
							<div class="clearfix"> </div>						
					    </div>

                       <!--高考真题-->
					    <div id="data">
					    	<div class="b-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">高考真题</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							</div>

							<div class="abt-what agileits all_pad wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0s">

					           <div id="">						
						            <div class="col-md-12 ab-left" style="font-size:16px; " >
						         		
                                         <div class="" style="border:1px  gray;">
                                           <table class="table">
								               <thead>
								                  <tr>
								                    <th>
								                  
								                       2016年全国各地高考文综试题分类汇编
								                    </th>
								                  </tr>
								                 </thead>
								                 <tbody>
								              <?php if(is_array($test4)): $i = 0; $__LIST__ = $test4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$test4): $mod = ($i % 2 );++$i;?><tr>
								                  <td>
								                    <a href="/BOXUEYUANEND--double/index.php/Home/GaoKao/zhenti/id/<?php echo ($test["id"]); ?>"><p > <?php echo ($test4["zname"]); ?></p></a>                      
								                  </td>
								                  <td><p ><?php echo ($test4["addtime"]); ?></p></td>
								                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
								              <!-- <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【02】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【03】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【04】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【05】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【06】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								               <td>
								                  <a href="shiti.html"><p ><span>【07】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【08】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【09】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>
								              <tr>
								                <td>
								                  <a href="shiti.html"><p ><span>【10】</span> 2016年高考物理真题分类汇编选修3-5原子物理专题Word版含答案</p></a>                      
								                </td>
								                <td><p >2016-06-28</p></td>
								              </tr>          -->     
								                 </tbody>
                                           </table>      
                                         </div>	
										 <!-- <div class="view-pos" style="bottom:0%; "><h4><a href="">点击进入测试</a></h4></div>									  -->
						         	</div>
						         
						        
						         	
										
						        
						         <div class="clearfix"> </div>
	                          </div>
                            </div>
							
					    </div>                        
                </div>
                <div class="tab-pane" id="panel-6">
                    	<!--面包屑-->
						    <div class="row">
						      <div class="col-xs-12 col-sm-12 col-md-12 column">
						        <ul class="breadcrumb">
						          <li>
						            <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/index/indexlogin">首页</a>
						          </li>
						          <li>
						            <a rel="nofollow" href="#">高考专题</a> 
						          </li>
						          <li class="active">
						            备考策略
						          </li>
						        </ul>
						      </div>
						    </div>
						 <!--面包屑结束-->
                        <div class="abt-what agileits all_pad wow fadeIn animated animated" data-wow-duration="0.5s">
							<div class="container">
								<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="a-title">备考策略</h2></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							    </div>
								<div class="col-md-5 ab-left">
									<div class="port-7 effect-2">
						                	<div class="image-box">
						                    	<img src="/BOXUEYUANEND--double/Public/before/images/a1.jpg" alt="Image-2">
						                    </div>
						                    <div class="text-desc">
						                    	<h4>博学苑</h4>
						                        <p>了解常识,轻松备考</p>
						                    </div>
						            </div>
								</div>
								<div class="col-md-7 ab-right">
									<h2>家长篇 To parents</h2>
									<p>怎么做一名合格的家长？</p>
									<p>随着高考的临近，很多嘴上劝慰孩子不要紧张，要 沉着应对考试的家长其实自己心里已经混乱无章，不知该如何是好。龙文的高考老师告诉广大的家长，在这万分重要的十几天， 家长要以平常的心态，谨慎的关注，和考生并肩作战。在这时候，比起遮遮掩掩的担心，家长不如坦白告诉孩子自己的焦虑， 和孩子共同找出缓解焦虑和压力的方法，和孩子坦诚相待，共同面对随着考试的临近出现的一系列问题。 </p>								
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="container">
								<div class="a-header">
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
										<div class="col-lg-6 col-md-6 col-sm-6"><hr></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
							    </div>
								
								<div class="col-md-7 ab-right">
									<h2>饮食篇 For students
									 </h2>
									<p> 高考不仅是一场考试，更有可能是一场决定命运的挑战。怎样给要参加高考的孩子合理安排饮食，是家长们最关心的问 题。营养师推荐食谱：</p>
									<p><a href="">早餐</a>
								      早餐应含有鸡蛋、脱脂牛奶、酸奶或乳酪和粮食制品，比如：粥、燕麦片、全麦面包、果汁、几片面包夹一个煎鸡蛋，配一点西红柿、黄瓜或其他水果等，每周不定期地增加一些诸如核桃粉、黑芝麻糊等，不仅可以调剂口味，还可以缓解高度紧张的学习造成的脑疲劳。

									   <a href="">午餐</a>
								       午餐要清淡点，但应摄入充足的热量和各种营养素。可吃些肉类、鸡蛋等含热量较高的食品，每周至少两次新鲜的海产品以补充增强抵抗力的脂肪酸。蔬菜应注意颜色搭配并变换花样，保证孩子摄取各种维生素、叶酸和植物纤维等。
								       <a href="">晚餐</a>
                                       晚餐要清淡点，但应摄入充足的热量和各种营养素。可吃些肉类、鸡蛋等含热量较高的食品，每周至少两次新鲜的海产品以补充增强抵抗力的脂肪酸。蔬菜应注意颜色搭配并变换花样，保证孩子摄取各种维生素、叶酸和植物纤维等。

								 </p>								
								</div>
								<div class="col-md-5 ab-left">
									<div class="port-7 effect-2">
						                	<div class="image-box">
						                    	<img src="/BOXUEYUANEND--double/Public/before/images/food1.jpg" alt="Image-2">
						                    </div>
						                    <div class="text-desc">
						                    	<h4>博学苑</h4>
						                        <p>了解常识,轻松备考</p>
						                    </div>
						            </div>
								</div>
								<div class="clearfix"> </div>
							</div>
                        </div> 
                </div>
			</div>
						
	    </div>
 </div>

    
<!-- 底部 -->
<div class="copy-right" style="background-color: rgb(50,56,60);margin-top:10px;">
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






















</body>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/bootstrap-3.1.1.min.js"></script>
</html>