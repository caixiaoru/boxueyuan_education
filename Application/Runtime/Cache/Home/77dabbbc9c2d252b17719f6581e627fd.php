<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>用户个人中心</title>
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

/*banner*/
a{
	text-decoration: none;
}
li{
	list-style: none;
}

/*列表部分*/
#xiu{
    border-bottom: 2px solid #888888;
    width: 50%;
}
#xiu h3{
    color: #009FCC;
    padding-bottom: 2px;
}
.ttop{
	margin-top: 3%;
}
.ttop tr{
    height: 42px;
}
.nei{
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
                                        <li><a class="scroll hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/About/about">关于我们<p style="text-align: center;">About</p></a></li>
                                        <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Teacher/teacher">名师团队<p style="text-align: center;">Teacher</p></a></li>
                                        <li><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Hot/hot">热点资讯 <p style="text-align: center;">News</p></a></li>
                                        <li id="act-Home"><a class="scroll hvr-bounce-to-bottom" href="/BOXUEYUANEND--double/index.php/Home/Person/person">个人中心<p style="text-align: center;">Center</p></a></li><li><a class="hvr-bounce-to-bottom " href="/BOXUEYUANEND--double/index.php/Home/person/logout" >退出<p >Logout</p></a></li>
                                    </ul>
                                </nav>
                            </div><!-- /navbar-collapse -->
    </nav>
    
</div>
<!--面包屑-->
<div class="container" id="container">
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li>
                    <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Index/indexlogin">首页</a> <span class="divider"></span>
                </li>
                <li>
                    <a rel="nofollow" href="/BOXUEYUANEND--double/index.php/Home/Person/person">个人中心</a> <span class="divider"></span>
                </li>
                <li class="active">
                    修改信息
                </li>
            </ul>
        </div>
    </div>
</div>
<!--content-->
<div class="container">
	<div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div id="xiu"><h3>修改个人信息</h3></div>
	        <form method="post" action="" enctype="multipart/form-data">
                <table class="ttop">
                    <tr>
                        <td>用户名称:<span class="nei">*</span></td>
                        <td>&nbsp;</td>
                        <td><input type="text" name="username" id="admin-username" value="<?php echo ($user["username"]); ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>密&nbsp;&nbsp;码:<span class="nei">*</span></td>
                        <td>&nbsp;</td>
                        <td><input type="password" name="password" id="admin-password" value="<?php echo ($user["password"]); ?>"></td>
                    </tr>
                    <tr>
                        <td>确认密码:<span class="nei">*</span></td>
                        <td>&nbsp;</td>
                        <td><input type="password" name="repassword" id="admin-repassword" value="<?php echo ($user["password"]); ?>"></td>
                    </tr>
                    <tr>
                        <td>手机号码:<span>&nbsp;</span></td>
                        <td>&nbsp;</td>
                        <td><input type="number" name="phone" id="admin-phone" value="<?php echo ($user["phone"]); ?>"></td>
                    </tr>
                    <tr>
                        <td>电子邮箱:<span class="nei">*</span></td>
                        <td>&nbsp;</td>
                        <td><input type="email" name="email" id="admin-email" value="<?php echo ($user["email"]); ?>"></td>
                    </tr>

                    <tr>
                        <td>注册时间:<span>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="data" name="registertime" id="admin-time" value="<?php echo ($user["registertime"]); ?>" readonly></td>
                    </tr>

                    <tr>
                        <td>头&nbsp;&nbsp;像:<span class="nei">*</span></td>
                        <td>&nbsp;</td>
                        <td><img src="/BOXUEYUANEND--double/Public/<?php echo ($user["img"]); ?>"  width="80px" height="80px"/><input type="file" name="img" id="admin-img"></td>
                    </tr>

                    <tr style="height:100px">
                        <td><button type="submit" name="submit" class="btn btn-info btn-default" id="save">保存</button></td>
                        <td>&nbsp;</td>
                        <td><button type="button" class="btn btn-info btn-default" onclick="history.back(-1)" id="cancle">取消</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3"></div>
	</div>
</div>
<!--尾部-->
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
                    石家庄英语培训机构&nbsp;&nbsp;&nbsp;石家庄四十三中学</br>    石家庄英语培训机构&nbsp;&nbsp;&nbsp;石家庄四十三中学</br>         -->
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
                    石家庄英语培训机构||&nbsp;石家庄四十三中学</br>  石家庄英语培训机构||&nbsp;石家庄四十三中学</br>       -->
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

<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/BOXUEYUANEND--double/Public/before/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>