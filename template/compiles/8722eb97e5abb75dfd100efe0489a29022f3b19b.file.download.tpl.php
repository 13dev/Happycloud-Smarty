<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:35:53
         compiled from "/home/happyclo/public_html/template/templates/download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124976479356dc94a971bf17-56424658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8722eb97e5abb75dfd100efe0489a29022f3b19b' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/download.tpl',
      1 => 1457295337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124976479356dc94a971bf17-56424658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file_name' => 0,
    'file_new_name' => 0,
    'file_size' => 0,
    'password_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc94a9dc3422_44573376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc94a9dc3422_44573376')) {function content_56dc94a9dc3422_44573376($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="jumbotron" align="center"><div class="form-group" align="center"><?php if (isset($_smarty_tpl->tpl_vars['file_name']->value)) {?><h3> Arquivo - <?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
 <small> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Tamanho<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['file_size']->value;?>
</small></h3><h5><?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
</h5><hr><div class="form-group" align="center" style="border: 1px solid #464545; border-radius: 9px;padding: 20px;margin: 0 100px 0px 130px;"><p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Requer Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php if (isset($_smarty_tpl->tpl_vars['password_form']->value)) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sim<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</p><form action="index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
&amp;info=no" method="post" enctype="multipart/form-data"><input type="password" class="form-control" placeholder=" Password" name="password" style='max-width: 200px;'/></div><br><br><button class="btn btn-primary btn-block" style='max-width: 400px;' type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><span class='glyphicon glyphicon-download-alt' aria-hidden='true'> </span> Download</button></form><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Não<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.<form action="index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
&amp;info=no" method="post" enctype="multipart/form-data"><button class="btn btn-primary btn-block" style='max-width: 400px;' type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><span class='glyphicon glyphicon-download-alt' aria-hidden='true'> </span> Download</button></form><?php }?><?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
