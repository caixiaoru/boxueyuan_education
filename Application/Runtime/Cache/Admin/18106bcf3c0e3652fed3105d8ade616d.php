<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/css/admincss.css">  
   <link rel="stylesheet" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/css/news_all.css">
  <link rel="stylesheet" href="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/css/admin_style.css">

</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Index/index">首页</a>
                  </li>  
                                                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
               
                <li class="active">
               <a htef="#">当前用户：<?php echo session('username'); ?></a>
                </li>
                  <li>
                    <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Admin/all">管理员</a>
                  </li>
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/admin/password">修改密码</a>
                  </li>
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/admin/logout">退出</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="row clearfix">
               <div class="col-md-2 column" id="admin-list">
                <!--<img alt="140*140" src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/images/logo.png" width="70%" id="logopic"/>-->
              <div class="list-group">
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 用户管理</a>
                  <div class="list-group-item">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/User/user_all">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/User/user_add" >添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Teacher/teacher_all">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Teacher/teacher_add">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/video/video_all">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/video/video_add">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Test/test_all">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Test/test_add">添加资料</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 教材管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Data/book_all">所有教材</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Data/book_add">添加教材</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 笔记管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Note/all">所有笔记</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Note/add">添加笔记</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/News/all">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/News/add">添加新闻</a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-10 column">
                <ul class="breadcrumb">
                  <li><a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/Index/index">首页</a></li>
                  <li><a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/User/user_all">名师管理</a></li>
                  <li class="active">添加用户</li>
                </ul>
                
              
                   <div class="row" id="admin-admin"><h2>添加用户</h2></div>
                <div class="row">
                    <form method="post" action="/BOXUEYYUAN/a/a/BOXUEYUANEND/index.php/Admin/User/doAdd" role="form" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>用户名称:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="username" id="admin-username" ></td>
                            </tr>
                            <tr>
                                <td>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="password" name="password" id="admin-password"></td>
                            </tr>
                            <tr>
                                <td>确认密码:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="password" name="repassword" id="admin-repassword"></td>
                            </tr> 
                            <tr>
                                <td>手机号码:<span>&nbsp;</span></td>
                                <td>&nbsp;</td>
                                <td><input type="number" name="phone" id="admin-phone"></td>
                            </tr>
                            <tr>
                                <td>电子邮箱:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="email" name="email" id="admin-email"></td>
                            </tr>
                            
                            <tr>
                                <td>头&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;像:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="file" name="img" id="admin-img"></td>
                            </tr>

                            <tr>
                                <td><button type="submit" class="btn btn-info btn-default" id="save">保存</button></td>
                                <td>&nbsp;</td>
                                <td><button type="button" class="btn btn-info btn-default" onclick="history.back(-1)" id="cancle">取消</button></td>
                            </tr>
                        </table>
                  </form>
                </div> 

                
              </div>
            </div>
          </div>
	</div>
	
  <div class="row" id="admin-footer">
    <div class="col-md-12 column">
      <p style="text-align:center;padding-top:20px;">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p style="text-align:center;">冀ICP备XXXXXXXX号-X    站长统计</p>
    </div>
  </div>
</div>

</body>
<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/js/bootstrap.min.js"></script>
<!--<script src="/BOXUEYYUAN/a/a/BOXUEYUANEND/Public/after/js/null_user.js"></script>-->

</html>