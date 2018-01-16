<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
public function __construct(){
          parent::__construct();
          if(!isLogin()){
            $this->error("请先登录！",U("Login/login"));//使用U函数
          }
        }  

public function all(){
    if(I("get.search")==''){
        $adminModle = M("administrator");
        $count = $adminModle->count();
        $pagecount = 9;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
         $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $admin = $adminModle->order('gid asc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('administrator',$admin);
        $this->assign('page',$show);
        $this->display();
        }
      else{
         $Goods=M('administrator');  
         $keyword=$_GET['search'];
         $condition['username'] = array('like','%'.$keyword.'%');
         $condition['email'] = array('like','%'.$keyword.'%');
         $condition['phone'] = array('like','%'.$keyword.'%');
         $condition['registertime'] = array('like','%'.$keyword.'%');
         $condition['lasttime'] = array('like','%'.$keyword.'%');
         $condition['_logic'] = 'OR';
         $goods=$Goods->where($condition)->select();
         $this->assign('administrator',$goods);
         $this->display();
         }
        }
        public function add(){
                if(IS_POST){
        $adminaddModel=D('administrator');
        $nm=$adminaddModel->create();
        if(!$nm){
            $this->error($adminaddModel->getError());
        }
        else{
                $time=date('Y-m-d H:i:s',time());
        $data=array(
            'phone'=>I('post.phone'),
            'email'=>I('post.email'),
            'password'=>I('post.password'),
            'username'=>I('post.username'),
            'registertime'=>$time,
            'lasttime'=>$time
            );
        $adminaddModel->add($data);
        $condition=array(
                'title'=>I('post.title'),
                'name'=>I('post.name'),  
                'grade'=>I('post.grade')
            );
        $result=$adminaddModel->where($condition)->count();
        if($result>0){
            $this->success("管理员添加成功",U('admin/all'));
        }
        }
    
         }
       else{
        $this->display();
       } 
        }
        public function edit(){
            $id=$_GET['administratorId'];
        $condition=array('Gid'=>$id);
         $time1=date('Y-m-d H:i:s',time());
        if(IS_POST){
            $newsmodel=D('administrator');
            $nm=$newsmodel->create();
            if(!$nm){
               $this->error($newsmodel->getError());
             }
             else{
                $data=array(
            'phone'=>I('post.phone'),
            'email'=>I('post.email'),
            'password'=>I('post.password'),
            'username'=>I('post.username'),
            'lasttime'=>$time1
            );
            $newsmodel->where($condition)->save($data);
            $this->success("管理员信息修改成功",U('admin/all'));
             }  
        }
        else{
        $newsModel=M('administrator');
        $news=$newsModel->where($condition)->select();
        $this->assign('administrator',$news);
        $this->display();
        }
            
        }
        public function delete(){
              $id = $_GET['administratorId'];
        if(is_array($id)){
            foreach($id as $value){
                M("administrator")->delete($value);
            }
            $this->success("批量删除成功！",U("admin/all"));
        }else{
            if(M("administrator")->delete($id)){
                $this->success("删除成功！",U("admin/all"));
            }else{
                $this->error("删除失败！");
            }
        }
        }
        public function password(){
                if(IS_POST){
            $passModel=M('administrator');
            $nm=$passModel->create();
            if($_POST['password']!=$_POST['repassword']){
              $this->error("两次密码不同！");
             }else if($_POST['password']==''){
                    $this->error("您的密码仍为原密码！");
             }
             else{
                    $condition=array(
                'username'=>$_SESSION['username']
                );
            $data=array(
                'password'=>I('post.password')
                );
            $passModel->where($condition)->save($data);
            $this->success('密码修改成功',U('admin/all'));
             }
            
        }
        else{
        $username=$_SESSION['username'];
        $condition=array(
            'username'=>$_SESSION['username']
            );
        $passModel=M('administrator');
        $pass=$passModel->where($condition)->select();
        $this->assign('pass',$pass);
        $this->display();
        }
        }
    


    public function logout(){
        $this->success('注销成功',U('Admin/login/login'));
    }   



}
