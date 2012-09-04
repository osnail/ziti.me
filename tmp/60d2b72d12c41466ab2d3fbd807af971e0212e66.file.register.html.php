<?php /* Smarty version Smarty-3.0.6, created on 2012-09-03 19:36:41
         compiled from "D:\LAOYAPHP\yunbian/zttpl\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2534650449649249946-44867911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d2b72d12c41466ab2d3fbd807af971e0212e66' => 
    array (
      0 => 'D:\\LAOYAPHP\\yunbian/zttpl\\register.html',
      1 => 1346672197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2534650449649249946-44867911',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
	<title>迷字网-字体爱好者社区</title>
	<meta charset="utf-8" />
	<meta name="author" content="<?php echo $_smarty_tpl->getVariable('yb')->value['author'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->getVariable('yb')->value['site_desc'];?>
" />
    <meta name="keywords" content="<?php if ($_smarty_tpl->getVariable('titlepre')->value){?><?php echo $_smarty_tpl->getVariable('titlepre')->value;?>
,<?php }?><?php echo $_smarty_tpl->getVariable('yb')->value['site_keyword'];?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/zttpl/assets/style.css" />
</head>
<body>
	<header>
		<div class="inner">
			<div class="logo"><a href="/">迷字网</a></div>
			<nav>
				<a href="#">展示</a>
				<a href="#">设计师</a>
				<a href="#">提交作品</a>
			</nav>
			<div class="login">
				<a href="#">注册</a>
				<a href="#">登陆</a>
			</div>
			<div class="search">
				<div class="search-content">
					<div class="search-type">
						<ul class="cur">
							<li>作品</li>
							<li>设计师</li>
						</ul>
						<div class="sw"><a href="#">切换搜索类别</a></div>
					</div>
					<input type="text" class="search-key" placeholder="搜索艺术字展示" />
				</div>
				<div class="search-go"><a href="#">搜索</a></div>
			</div>
		</div>
	</header>
	<dl class="logareg">
		<dt><a href="#">登陆迷字</a>or<span class="cur">注册迷字</span></dt>
		<dd>
			<form>
				<p><input type="text" class="txt" placeholder="用户名/邮箱" name=""/></p>
				<p><input type="password" class="txt no-bt" placeholder="密码" name=""/></p>
				<p><input type="password" class="txt no-bt" placeholder="密码确认" name=""/></p>
				<p><input type="submit" name="" class="login-btn" value="注册"/></p>
			</form>
			<div class="third-login">
				<span class="tit">第三方账号直接登陆></span>
				<span><a href="#" class="weibo"></a><a href="#" class="qq"></a><a href="#" class="douban"></a></span>
			</div>
		</dd>
	</dl>
	<footer>
		<div class="inner">
			<p class="site-info">
				<a href="#">关于迷字</a>
				<a href="#">服务&帮助</a>
				<a href="#">网站声明</a>
			</p>
			<p>Copyright © 2012 ziti.me . All screenshots © their respective owners.</p>
		</div>
	</footer>
</body>
</html>