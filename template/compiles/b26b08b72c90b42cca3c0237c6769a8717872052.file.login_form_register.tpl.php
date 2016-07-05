<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 15:36:18
         compiled from "C:\wamp\www\marcomg-simple-file-sharing-5ac38ce\template\templates\login_form_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:402256b254aa498fa6-05260301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26b08b72c90b42cca3c0237c6769a8717872052' => 
    array (
      0 => 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\template\\templates\\login_form_register.tpl',
      1 => 1457188577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402256b254aa498fa6-05260301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56b254aa5ee652_26285601',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b254aa5ee652_26285601')) {function content_56b254aa5ee652_26285601($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\includes\\classes\\smarty\\plugins\\block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="jumbotron" align="center"><form class="form-signin" action="index.php?action=register" name="regitration" method="POST"><h2 class="form-signin-heading">Registar na Happycloud</h2><hr><img src="<?php echo @constant('DIR_TEMPLATE_IMGS');?>
/register.png" width="200"><br><br><label for="inputuser" class="sr-only" id="usr"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Usuário<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="text" class="form-control" placeholder="Usuário" name="username" required autofocus><br><label for="inputPassword" class="sr-only"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required><br><label for="inputPassword" class="sr-only"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Repita a Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="password" id="inputPassword" class="form-control" placeholder="Repita a password" name="password1" required><br><div class="g-recaptcha" data-sitekey="6Les_xkTAAAAAL7dlXe6Ua1tcAVfnth8ZML73wuc"></div><br><br><button class="btn btn-md btn-info btn-block" type="submit" name="send"> Registar-me! </button></form></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
