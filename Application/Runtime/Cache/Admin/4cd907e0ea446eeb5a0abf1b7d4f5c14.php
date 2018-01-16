<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYUANEND1/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYUANEND1/Public/after/css/admincss.css">  
   <link rel="stylesheet" href="/BOXUEYUANEND1/Public/after/css/news_all.css">
  <link rel="stylesheet" href="/BOXUEYUANEND1/Public/after/css/admin_style.css">

</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="/BOXUEYUANEND1/index.php/Admin/Index/index">首页</a>
                  </li>  
                                                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
               
                <li class="active">
               <a htef="#">当前用户：<?php echo session('username'); ?></a>
                </li>
                  <li>
                    <a href="/BOXUEYUANEND1/index.php/Admin/Admin/all">管理员</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUANEND1/index.php/Admin/admin/password">修改密码</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUANEND1/index.php/Admin/admin/logout">退出</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="row clearfix">
               <div class="col-md-2 column" id="admin-list">
                <!--<img alt="140*140" src="/BOXUEYUANEND1/Public/after/images/logo.png" width="70%" id="logopic"/>-->
              <div class="list-group">
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 用户管理</a>
                  <div class="list-group-item">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/User/user_all">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/User/user_add" >添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Teacher/teacher_all">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Teacher/teacher_add">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/video/video_all">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/video/video_add">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Test/test_all">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Test/test_add">添加资料</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 教材管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Data/book_all">所有教材</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Data/book_add">添加教材</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 笔记管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Note/all">所有笔记</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/Note/add">添加笔记</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/BOXUEYUANEND1/index.php/Admin/News/all">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND1/index.php/Admin/News/add">添加新闻</a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-10 column">
                <ul class="breadcrumb">
                  <li><a href="/BOXUEYUANEND1/index.php/Admin/Index/index">首页</a></li>
                  <li><a href="/BOXUEYUANEND1/index.php/Admin/Book/book_all">资料管理</a></li>
                  <li class="active">添加资料</li>
                </ul>
                
              
                   <div class="row" id="admin-admin"><h2>添加资料</h2></div>
                <div class="row">
                   <form role="form" action="/BOXUEYUANEND1/index.php/Admin/Test/doAdd" method="post" enctype="multipart/form-data">
                       <table>
                           <tr> 
                               <td>科&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目:<span>*</span></td>
                               <td>&nbsp;</td>
                               <td><input type="text" name="kemu" id="admin-username" ></td>
                           </tr>
                           <tr>
                               <td>年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;级:<span>*</span></td>
                               <td>&nbsp;</td>
                               <td><input type="text" name="grade" id="admin-password"></td>
                           </tr> 
                           <tr>
                               <td>资料名称:<span>*</span></td>
                               <td>&nbsp;</td>
                               <td><input type="text" name="zname" id="admin-repassword"></td>
                           </tr>
                            <tr>
                                <td>选择文件:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="file" name="thumb"></td>
                            </tr>                      
                            
                           <tr>
                               <td>摘要:<span>&nbsp;</span></td>
                               <td>&nbsp;</td>
                               <td><textarea rows="5" cols="30" name="zhaiyao"></textarea></td>
                           </tr>
                           <tr>
                               <td>资料内容:<span>&nbsp;</span></td>
                               <td>&nbsp;</td>
                               <td><textarea rows="10" cols="30" name="content"></textarea></td>
                           </tr>
                           <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit" class="btn btn-info btn-default" id="save">保存</button></td>
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
<script src="/BOXUEYUANEND1/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYUANEND1/Public/after/js/bootstrap.min.js"></script>
<!--<script src="/BOXUEYUANEND1/Public/after/js/null_user.js"></script>-->

</html>