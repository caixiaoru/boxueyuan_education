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
                  <li><a href="/BOXUEYUANEND1/index.php/Admin/Note/all">笔记管理</a></li>
                  <li class="active">所有笔记</li>
                </ul>
                <form action="" method="get">
                   <div class="col-md-5 column" id="enenen"><input type="text" id="search" value="" name="search"><span><button type="submit">搜索</button></span> </div>
                </form>
                
                <form action="/BOXUEYUANEND1/index.php/Admin/Note/del">
                <div class="row" id="add-del">
                
                  <div class="col-md-2 column">
                    
                    <button type="button"><span class="glyphicon  glyphicon-user"></span> <a href="/BOXUEYUANEND1/index.php/Admin/Note/add"  >添加笔记</a></button>
                </div>
            
            <div class="col-md-2 column">
                 <button type="submit"><span class="glyphicon  glyphicon-user"></span> 批量删除</button>
            </div>
            <div class="col-md-3 column">
            </div>
          
                </div>
                <div class="row" id="admin-table">
                <table class="table" style="margin-left:5px;border-spacing: 0px;">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="checkbox-all"></th>
                       <th>ID</th>
                      <th>科目</th>
                      <th>状元姓名</th>
                      <th> 笔记名称 </th>
                      <th>摘要</th>
                     
                        <th>上传者</th>
                      <th>上传时间</th>
                       <th>操作</th>
                    </tr>
                  </thead>
                  <tbody> 
                 <?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$notes): $mod = ($i % 2 );++$i;?><tr>
                    <td> <input name="id[]" type="checkbox" id="checkbox" value="<?php echo ($notes["wid"]); ?>" /></td>
                    <td> <?php echo ($notes["wid"]); ?></td>
                    <td> <?php echo ($notes["subject"]); ?></td>
                    <td> <?php echo ($notes["name"]); ?></td>
                    <td> <?php echo ($notes["title"]); ?></td>
                    <td> <?php echo ($notes["summary"]); ?></td>
                     <td> <?php echo ($notes["addtime"]); ?></td>
                    <td> <?php echo ($notes["updatetime"]); ?></td>
                    <td> <a  href="/BOXUEYUANEND1/index.php/Admin/Note/del/id/<?php echo ($notes["wid"]); ?>">删除</a>/<a href="/BOXUEYUANEND1/index.php/Admin/Note/edit/id/<?php echo ($notes["wid"]); ?>">编辑</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    
                  </tbody>
                </table>
                 
                </div>
                </form>
              <div style="float:right">
               <?php echo ($page); ?>
               </div>
              </div>
            </div>
          </div>
  </div>
  <style>
  #enenen{
    float:right;
  }
  table{
    margin-top:20px;
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
<script src="/BOXUEYUANEND1/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYUANEND1/Public/after/js/bootstrap.min.js"></script>
<!--<script src="/BOXUEYUANEND1/Public/after/js/null_user.js"></script>-->

</html>