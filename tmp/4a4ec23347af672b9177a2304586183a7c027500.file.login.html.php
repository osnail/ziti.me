<?php /* Smarty version Smarty-3.0.6, created on 2012-09-05 15:26:11
         compiled from "D:\ziti.me/zttpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:273665046fe93ba7300-24958941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4ec23347af672b9177a2304586183a7c027500' => 
    array (
      0 => 'D:\\ziti.me/zttpl\\login.html',
      1 => 1346829968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273665046fe93ba7300-24958941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<dl class="logareg">
		<dt><span class="cur">登陆迷字</span>or<a href="#">注册迷字</a></dt>
		<dd>
			<form>
				<p><input type="text" class="txt" placeholder="用户名/邮箱" name="username"/></p>
				<p><input type="password" class="txt no-bt" placeholder="密码" name="password"/></p>
				<p><input type="submit" name="" class="login-btn" value="登陆"/></p>
				<p class="forget"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'forgetpw'),$_smarty_tpl);?>
">忘记密码？</a></p>
			</form>
			<div class="third-login">
				<span class="tit">第三方账号直接登陆></span>
				<span><a href="#" class="weibo"></a><a href="#" class="qq"></a><a href="#" class="douban"></a></span>
			</div>
		</dd>
	</dl>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>