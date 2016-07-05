<?php /* Smarty version Smarty-3.1.16, created on 2016-03-07 18:34:37
         compiled from "/home/happyclo/public_html/template/templates/login_form_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47387229156dc932b4db0e0-57302953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dc3cd038a70050e25036e84ebab9ed05ffc078' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/login_form_login.tpl',
      1 => 1457364800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47387229156dc932b4db0e0-57302953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc932bb4bf08_28554026',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc932bb4bf08_28554026')) {function content_56dc932bb4bf08_28554026($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container" align="center"><div class="jumbotron"><form class="form-signin" action="index.php?action=login" name="login" method="POST"><h2 class="form-signin-heading">Entrar na Happycloud</h2><hr><img src="<?php echo @constant('DIR_TEMPLATE_IMGS');?>
/login.png" width="200"><br><br><label for="inputuser" class="sr-only" id="usr"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Usuário<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="text" class="form-control" placeholder="Usuário" name="username" required autofocus><br><label for="inputPassword" class="sr-only"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required><div class="checkbox"><label><input type="checkbox" value="remember-me"> Lembrar-me</label></div><!--<div class="g-recaptcha" data-sitekey="6LcZIRoTAAAAAKYYyd4qZB5MR1BnkO3d3sNowiYO"></div>--><br><button class="btn btn-md btn-info btn-block" type="submit" name="send"> Entrar </button></form></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
