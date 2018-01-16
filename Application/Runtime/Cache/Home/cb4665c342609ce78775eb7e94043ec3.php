<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>名师个人中心</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/BOXUEYUANEND--double/Public/before/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/BOXUEYUANEND--double/Public/before/css/animate.css" rel="stylesheet" type="text/css" media="all"> 
<link href="/BOXUEYUANEND--double/Public/before/css/footer.css"  rel="stylesheet" type="text/css"/>
<link href="/BOXUEYUANEND--double/Public/before/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<script src="/BOXUEYUANEND--double/Public/before/js/wow.min.js"></script> <!--实现页面元素的滚动，需要调用animate.css-->
	<script>
	    //实现页面元素滚动出现的效果
	 	 new WOW().init();
	</script> 
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/jquery-2.1.4.min.js"></script>
<style> 
* { margin: 0; padding: 0;}
a{
	text-decoration: none;
}
li{ 
	list-style: none;
}
/*头像*/
#picture{
	padding-left: 5%;
}
.tou{
	width: 150px;
    height: 150px;
    padding:2px;
    background: #ececec;
    border-radius:150px;
    box-shadow: 0px 0px 1px rgba(0,0,0,0.4);
    -moz-border-radius: 150px;
    -webkit-border-radius: 150px;
}
.turn{
	margin: 0 auto;
	width:150px;
    height:150px;
    line-height: 0;	/* remove line-height */ 
    display: inline-block;	 circle wraps image 
    border-radius: 50%;	/* relative value */
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    -webkit-transition: -webkit-transform 0.2s ease-out;
    -moz-transition: -moz-transform 0.2s ease-out;
    -o-transition: -o-transform 0.2s ease-out;
    -ms-transition: -ms-transform 0.2s ease-out;
}
.turn:hover{
	-webkit-transform: rotateZ(360deg);
    -moz-transform: rotateZ(360deg);
    -o-transform: rotateZ(360deg);
    -ms-transform: rotateZ(360deg);
    transform: rotateZ(360deg);
}
/*个人信息*/
#xinxi{
	margin-top: 5%;
}
#xinxi li{
	width: 90%;
	padding-top: 15px;
	border-bottom: 1px dashed #B0C4DE;
}
/*列表部分*/
.ttop{
	margin-top: 3%;
}
.nei{
    color: #333;
}
#twidth tr{
    height: 40px;
}
#twidth span{
    color: red;
}
</style>
</head>
<body>
<!--导航-->
<div id="home" class="banner w3l" style="background-image: url(/BOXUEYUANEND--double/Public/before/images/gerenzhongxin.jpg); min-height:400px; ">
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
                                <a class="navbar-brand" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin"><img src="/BOXUEYUANEND--double/Public/before/images/logo.png" alt="" width="70%" style="margin-top:-10%;"></a>
                                </h1>
                                
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                <nav class="cl-effect-1">
                                    <ul class="nav navbar-nav ">

                                       <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页<p>Home</p></a></li>
                                        
                                        <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Course/course">课程天地<p style="text-align: center;"> Course</p></a></li>
                                       
                                        <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Teacher/teacher">名师团队<p style="text-align: center;">Teacher</p></a></li>
                                        <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Hot/hot">热点资讯 <p style="text-align: center;">News</p></a></li>
                                        <li><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/About/about">关于我们<p style="text-align: center;">About</p></a></li>
                                        <li id="act-Home"><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Person/person">个人中心<p style="text-align: center;">Center</p></a></li><li><a class="hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/person/logout" >退出<p >Logout</p></a></li>
                                    </ul>
                                </nav>
                            </div><!-- /navbar-collapse -->
    </nav>
    </div>
</div>
<!--banner图-->

<!--面包屑-->
<div class="container" id="container">
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li>
                    <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页</a> <span class="divider"></span>
                </li>
                <li class="active">
                    个人中心
                </li>
            </ul>
        </div>
    </div>
</div>
<!--content-->
<div class="container">
	<div class="row">
	    <!--个人信息-->
		<div class="col-xs-3 col-sm-3 col-md-3">
            <div id="picture">
                <div class="tou">
                    <img src="/BOXUEYUANEND--double/Public/<?php echo ($teacher["img"]); ?>" class="turn" />
                </div>
            </div>
            <ul id="xinxi">
                <li><img src="/BOXUEYUANEND--double/Public/before/images/user.png" /> 用户名：<p>&nbsp;&nbsp;&nbsp;<?php echo ($teacher["username"]); ?></p></li>
                <li><img src="/BOXUEYUANEND--double/Public/before/images/phone.png" /> 联系方式：<p>&nbsp;&nbsp;&nbsp;<?php echo ($teacher["phone"]); ?></p></li>
                <li><img src="/BOXUEYUANEND--double/Public/before/images/mailbox.png" /> 邮箱：<p>&nbsp;&nbsp;&nbsp;<?php echo ($teacher["email"]); ?></p></li>
                <li><img src="/BOXUEYUANEND--double/Public/before/images/time.png" /> 登录时间：<p>&nbsp;&nbsp;&nbsp;<?php echo (date("y-m-d",strtotime($teacher["registertime"]))); ?></p></li>
            </ul>
            <div style="margin-top:5%">
                <img src="/BOXUEYUANEND--double/Public/before/images/editp.png" /><a href="/BOXUEYUANEND--double/index.php/Home/person/edit_teacher/id/<?php echo ($teacher["tid"]); ?>" class="btn" />修改个人信息</a>
            </div>
        </div>
		<div class="col-xs-9 col-sm-9 col-md-9">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
                        <a rel="nofollow" href="#panel-1" data-toggle="tab">上传历史</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#panel-2" data-toggle="tab">上传视频</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#panel-3" data-toggle="tab">试题下载记录</a>
                    </li>
                   <!-- <li>
                        <a rel="nofollow" href="#panel-4" data-toggle="tab">教材下载记录</a>
                    </li>-->
                    <!--<li>
                        <a rel="nofollow" href="#panel-5" data-toggle="tab">视频下载记录</a>
                    </li>-->
				</ul>
				<div class="tab-content">
					<div class="tab-pane active wow bounceInUp" id="panel-1"  data-wow-duration="1.5s" data-wow-delay="0s">
						<table class="table ttop">
                            <tr>
                                <td>课本/资料/视频名称</td>
                                <td>年级</td>
                                <td>科目</td>
                                <td>日期</td>
                            </tr>
                            <?php if(is_array($tup)): $i = 0; $__LIST__ = $tup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="read.html" class="nei"><?php echo ($u["videoname"]); ?></a></td>
                                <td ><?php echo ($u["grade"]); ?></td>
                                <td><?php echo ($u["subject"]); ?></td>
                                <td><?php echo ($u["addtime"]); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                        <div style="float:right"><?php echo ($page); ?></div>
					</div>
					<div class="tab-pane wow zoomIn" id="panel-2" data-wow-duration="1.5s" data-wow-delay="0s">
						<form role="form" action="/BOXUEYUANEND--double/index.php/Home/person/doAdd" method="post" enctype="multipart/form-data" class="ttop">
                           <table id="twidth">
                            <tr>
                                <td>科&nbsp;&nbsp;目:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="subject" id="kemuname"></td>
                            </tr>             
                            <tr>
                                <td>年&nbsp;&nbsp;级:</td>
                                <td>&nbsp;</td>
                                <td><select name="grade">
                                      <option value ="高一">高一</option>
                                      <option value ="高二">高二</option>
                                      <option value="高三">高三</option>
                                    </select>
                                </td>
                            </tr>                                                        
                            <tr>
                                <td>视频名称:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="videoname" id="name"></td>
                            </tr>
                            <tr> 
                                <td>上传&nbsp;者:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="Tid"></td>
                            </tr>
                            <tr>
                                <td>选择文件:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="file" name="address"></td>
                            </tr>                                                                          
                            <tr>
                                <td>视频简介:</td>
                                <td>&nbsp;</td>
                                <td><textarea rows="10" cols="30" name="content"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="提交" id="save" name="submit"/></td>
                                <td>&nbsp;</td>
                                <td><button type="button"id="cancle" onclick="history.back(-1)">返回</button></td>
                            </tr>
                            </table>
                        </form>
					</div>
                    <div class="tab-pane wow bounceInUp" id="panel-3"  data-wow-duration="1.5s" data-wow-delay="0s">
                        <table class="table ttop">
                            <tr>
                                <td>试题名称</td>
                                <td>年级</td>
                                <td>科目</td>
                                <td>日期</td>
                            </tr>
                            <?php if(is_array($dtest)): $i = 0; $__LIST__ = $dtest;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dt): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="read.html" class="nei"><?php echo ($dt["zname"]); ?></a></td>
                                <td ><?php echo ($dt["grade"]); ?></td>
                                <td><?php echo ($dt["kemu"]); ?></td>
                                <td><?php echo ($dt["time"]); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>                          
                        </table>
                         <div style="float:right"><?php echo ($pagetest); ?></div>
                    </div>
                    <!--<div class="tab-pane wow bounceInUp" id="panel-4"  data-wow-duration="1.5s" data-wow-delay="0s">
                        <table class="table ttop">
                            <tr>
                                <td>教材名称</td>
                                <td>年级</td>
                                <td>科目</td>
                                <td>日期</td>
                            </tr>
                            <?php if(is_array($ddata)): $i = 0; $__LIST__ = $ddata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dd): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="read.html" class="nei"><?php echo ($dd["dataname"]); ?></a></td>
                                <td ><?php echo ($dd["grade"]); ?></td>
                                <td><?php echo ($dd["subject"]); ?></td>
                                <td><?php echo ($dd["time"]); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>                           
                        </table>
                        <div style="float:right"><?php echo ($pagedata); ?></div> 
                    </div>-->
                    <!--<div class="tab-pane wow bounceInUp" id="panel-5"  data-wow-duration="1.5s" data-wow-delay="0s">
                        <table class="table ttop">
                            <tr>
                                <td>视频名称</td>
                                <td>年级</td>
                                <td>科目</td>
                                <td>日期</td>
                            </tr>
                            <?php if(is_array($dvideo)): $i = 0; $__LIST__ = $dvideo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dv): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="read.html" class="nei"><?php echo ($dv["videoname"]); ?></a></td>
                                <td ><?php echo ($dv["grade"]); ?></td>
                                <td><?php echo ($dv["subject"]); ?></td>
                                <td><?php echo ($dv["time"]); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>                           
                        </table>
                        <div style="float:right"><?php echo ($pagevideo); ?></div> 
                    </div>-->
				</div>
			</div>
		</div>
	</div>
</div>
<!--尾部-->
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
                    <p>石家庄培训机构||石家庄三中</p>
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
                </dd>               
            </dl>
        </div>
        <div class="col-sm-3 column" style="padding-right: 10px;">
            <dl style="float:left; padding-right: 0px;">
                <dt class="footdt">
                    <h3 style="text-align: center;">产品案例</h3>
                </dt>
                <dd class="footdd" style="font-family: '微软雅黑';font-size:14px" >
                    <p>最强名师伴你高考冲刺押题</p>
                    <p>最新资料助你圆名校梦全面</p>
                    <p>最新资讯把握高考动态掌控</p>
                    <p>最强指导博学苑圆你大学梦</p>
                    
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

<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/bootstrap-3.1.1.min.js"></script>

</body>
</html>