<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYUANEND--double/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYUANEND--double/Public/after/css/admincss.css">  
   <link rel="stylesheet" href="/BOXUEYUANEND--double/Public/after/css/news_all.css">
  <link rel="stylesheet" href="/BOXUEYUANEND--double/Public/after/css/admin_style.css">

</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="/BOXUEYUANEND--double/index.php/Admin/Index/index">首页</a>
                  </li>  
                                                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
               
                <li class="active">
               <a htef="#">当前用户：<?php echo session('username'); ?></a>
                </li>
                  <li>
                    <a href="/BOXUEYUANEND--double/index.php/Admin/Admin/all">管理员</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUANEND--double/index.php/Admin/admin/password">修改密码</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUANEND--double/index.php/Admin/admin/logout">退出</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="row clearfix">
               <div class="col-md-2 column" id="admin-list">
                <!--<img alt="140*140" src="/BOXUEYUANEND--double/Public/after/images/logo.png" width="70%" id="logopic"/>-->
              <div class="list-group">
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 用户管理</a>
                  <div class="list-group-item">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/User/user_all">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/User/user_add" >添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Teacher/teacher_all">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Teacher/teacher_add">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/video/video_all">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/video/video_add">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Test/test_all">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Test/test_add">添加资料</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 教材管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Data/book_all">所有教材</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Data/book_add">添加教材</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 笔记管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Note/all">所有笔记</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/Note/add">添加笔记</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/BOXUEYUANEND--double/index.php/Admin/News/all">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUANEND--double/index.php/Admin/News/add">添加新闻</a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-10 column"> 
                <ul class="breadcrumb">
                  <li><a href="<?php echo U('index/index');?>">首页</a></li>
                  <li><a href="<?php echo U('admin/all');?>">管理员管理</a></li>
                  <li class="active">所有管理员</li> 
                </ul> 
                <form action="" method="get">
                   <div class="col-md-5 column" id="enenen"><input type="text" id="search" value="" name="search"><span><button>搜索</button></span>  
           </div>
                </form>
              <form  action="/BOXUEYUANEND--double/index.php/Admin/admin/delete" role="form" >
                <div class="row" id="add-del">
            
                	<div class="col-md-2 column">
                	 
                      <button><a href="<?php echo U('Admin/admin/add');?>">添加管理员</a></button>
		            </div>
		       
		        <div class="col-md-2 column">
			         <button type="submit">批量删除</a></button>
		        </div>
		        <div class="col-md-3 column">
		        </div>
		      
                </div>
                <div class="row" id="admin-table" style="margin-left: 3%">
                <table class="table" style="margin-left: 0%; border-spacing:0px;  " >
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="checkbox-all"></th>
                       <th>adminID</th>
                      <th>管理员姓名</th>
                      <th> 注册时间</th>
                      <th> 最近一次登录时间 </th>
                       <th>操作</th>
                    </tr>
                  </thead>
           
             <?php if(is_array($administrator)): $i = 0; $__LIST__ = $administrator;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
                <td><input type="checkbox" name="administratorId[]" id="checkbox" value="<?php echo ($u["gid"]); ?>">
                  <label for="checkbox"></label></td>
                <td><?php echo ($u["gid"]); ?></td>
                <td><?php echo ($u["username"]); ?></td>
                
                <td><?php echo ($u["registertime"]); ?> </td>
                <td><?php echo ($u["lasttime"]); ?> </td>
                <td><a href="/BOXUEYUANEND--double/index.php/Admin/admin/delete/administratorId/<?php echo ($u["gid"]); ?>">删除</a>/<a href="/BOXUEYUANEND--double/index.php/Admin/admin/edit/administratorId/<?php echo ($u["gid"]); ?>">编辑</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


<!-- </form> --> 





                </table>

                </div>
            </form>
               <!--  <ul class="pagination">
                  <li> <a href="#">Prev</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a> </li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">Next</a></li>
                </ul> -->
                <div style="float: right;">
                <?php echo ($page); ?>
                </div>


              </div>
            </div>
       <style>
          #enenen{
            float:right;
          }
       </style>
  <div class="row" id="admin-footer">
    <div class="col-md-12 column">
      <p style="text-align:center;padding-top:20px;">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p style="text-align:center;">冀ICP备XXXXXXXX号-X    站长统计</p>
    </div>
  </div>
</div>

</body>
<script src="/BOXUEYUANEND--double/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYUANEND--double/Public/after/js/bootstrap.min.js"></script>
<!--<script src="/BOXUEYUANEND--double/Public/after/js/null_user.js"></script>-->

</html>