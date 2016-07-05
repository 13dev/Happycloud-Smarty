<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:33:53
         compiled from "/home/happyclo/public_html/template/templates/login_form_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213702673156dc934b4c0321-58142645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ebe2dceb806e074494aa75eda8a1301c7ebb967' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/login_form_register.tpl',
      1 => 1457296396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213702673156dc934b4c0321-58142645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc934b7673a2_02721845',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc934b7673a2_02721845')) {function content_56dc934b7673a2_02721845($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="jumbotron" align="center"><form class="form-signin" action="index.php?action=register" name="regitration" method="POST"><h2 class="form-signin-heading">Registar na Happycloud</h2><hr><img src="<?php echo @constant('DIR_TEMPLATE_IMGS');?>
/register.png" width="200"><br><br><label for="inputuser" class="sr-only" id="usr"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Usuário<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="text" class="form-control" placeholder="Usuário" name="username" required autofocus><br><label for="inputPassword" class="sr-only"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required><br><label for="inputPassword" class="sr-only"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Repita a Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><input type="password" id="inputPassword" class="form-control" placeholder="Repita a password" name="password1" required><br><div class="g-recaptcha" data-sitekey="6LcZIRoTAAAAAKYYyd4qZB5MR1BnkO3d3sNowiYO"></div><br><br><button class="btn btn-md btn-info btn-block" type="submit" name="send"> Registar-me! </button></form></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
