<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title><?php echo C('ADMINTITLE');?></title>
  <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/common.css" /> 
 </head>
 <body>
	<?php if($_SESSION['role']!= '老师'): echo redirect(U('Index/index'));?>
	<?php else: ?>
		<div class="wrap">
		    <div class="top">
	<div class="top-con">
		<font style="display:block;position:absolute;right:200px;bottom:35px">欢迎<font color="#f00" style="font-weight:bold;font-size:20px">&nbsp<?php echo (session('name')); ?></font>
		<?php if($_SESSION['role']== '老师'): ?>老师<?php else: ?>同学<?php endif; ?></font>
		<?php if($_SESSION['role']== '老师'): ?><a href="<?php echo U('Admin/Student/index');?>"><img width="40px" height="50px" src="/Public/Admin/Image/tubiao1.jpg" style="position:absolute;right:115px;top:6px"></a><?php endif; ?>
		<a href="<?php echo U('Student/edit_password');?>">修改密码</a>
		<a href="<?php echo U('Index/loginout');?>"><img width="40px" height="50px" src="/Public/Admin/Image/tubiao2.jpg" style="position:absolute;right:45px;top:6px"></a>
	</div>
</div>
			<div class="con">
				<div class="left shadow1" >
	<div class="left-con center" style="color:#c00c0b">
		<img src="/Public/Home/Image/jishao.jpg" style="display:block">
		<ul>
			<li >1.请点击“获取项目”按钮（U型吸铁石）获取当前可以打分的项目；</li>
			<li>2.在方框内输入你所打分数，然后点打分按钮；</li>
			<li>3.如果你打分超过95分或低于70分，请写打分理由.</li>
		</ul>
	</div>
</div> 
				<div class="main">
					<div class="shadow1 center main1">
						修改学生信息
					</div>
					<?php if(empty($userData)): else: ?> 
					<div  class="shadow1 center main2">
						<form action="<?php echo U('edit_student');?>" method="post">
						  <table width="70%"  border=1 cellspacing=0 bordercolor="#ccc" class="table_tr20">
								<tr   heigth="30px" align="middle"><td>学号:</td><td><input name="user_id" style="margin-left:10px;outline:none;text-align:center" value="<?php echo ($userData['user_id']); ?>" readOnly="true" class="radius8 border1"></td></tr>
								<tr   align="middle"><td>年级:</td><td><input name="grade" style="margin-left:10px;outline:none;text-align:center" value="<?php echo ($userData['grade']); ?>" class="radius8 border1"></td></tr>
								<tr   align="middle"><td>组号:</td><td><input name="group" style="margin-left:10px;outline:none;text-align:center" value="<?php echo ($userData['group']); ?>" class="radius8 border1"></td></tr>
								<tr   align="middle"><td>角色:</td><td><input name="role" style="margin-left:10px;outline:none;text-align:center" value="<?php echo ($userData['role']); ?>" class="radius8 border1"></td></tr>
								<tr   align="middle"><td>姓名:</td><td><input name="name" style="margin-left:10px;outline:none;text-align:center" value="<?php echo ($userData['name']); ?>" class="radius8 border1"></td></tr>
								<tr   align="middle"><td>密码:</td><td><input name="password" style="margin-left:10px;outline:none;text-align:center" class="radius8 border1"></td></tr>	
						  </table>
						  <input type="submit" value="保存" >
						</form>
					</div><?php endif; ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="foot shadow1">
	<div class="copyright">Copyright © 2015 计算机与信息学院 版权所有</div>
</div> 
	</div><?php endif; ?> 
 </body>
</html>