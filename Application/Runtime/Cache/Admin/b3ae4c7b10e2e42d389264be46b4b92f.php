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
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Index/index">首页</a>
                  </li>  
                                                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
               
                <li class="active">
               <a htef="#">当前用户：<?php echo session('username'); ?></a>
                </li>
                  <li>
                    <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Admin/all">管理员</a>
                  </li>
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/admin/password">修改密码</a>
                  </li>
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/admin/logout">退出</a>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/User/user_all">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/User/user_add" >添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Teacher/teacher_all">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Teacher/teacher_add">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/video/video_all">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/video/video_add">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Test/test_all">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Test/test_add">添加资料</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 教材管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Data/book_all">所有教材</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Data/book_add">添加教材</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 笔记管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Note/all">所有笔记</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Note/add">添加笔记</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/News/all">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/News/add">添加新闻</a>
                  </div>
                </div>
              </div>
              ﻿ 
              <div class="col-md-10 column">
                <ul class="breadcrumb">
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Index/index"><span class="glyphicon  glyphicon-home"></span> 首页</a>
                  </li>
                  <li>
                     <a href="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Data/book_all">教材管理</a>
                  </li>
                  <li class="active"> 
                    添加教材
                  </li>
                </ul>
                <form role="form" action="/BOXUEYYUAN/a/a/BOXUEYUANEND/admin.php/Data/doAdd" method="post" enctype="multipart/form-data">
               <table>
                            <tr>
                                <td>科目:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text"  id="kemuname" name="subject"></td>
                            </tr>
                            
                            <tr>
                                <td>类别:</td>
                                <td>&nbsp;</td>
                                <td>
                                  教材                                   
                                </td>
                            </tr>
                             <tr>
                                <td>年级:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text"  id="grade" name="grade"></td>
                            </tr>
                            <tr>
                                <td>书名:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" id="bookname" name="dataname"></td>
                            </tr>
                                                     
                            <tr>
                                <td>选择文件:</td>
                                <td>&nbsp;</td>
                                <td><input type="file" name="xuanze"></td>
                            </tr>
                            <tr>
                                <td>摘要:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><textarea rows="5" cols="30" name="zhaiyao"></textarea></td>
                            </tr>
                            <tr>
                                <td>教材内容:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><textarea rows="10" cols="30" name="content"></textarea></td>
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
            <div class="container" style="background:rgb(0,112,189);margin-top:10px;">
              
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