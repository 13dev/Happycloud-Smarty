<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:57:42
         compiled from "/home/happyclo/public_html/template/templates/file_manipulator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36053026656dc99c6cc30e3-85534576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1dc3edb6d3f088635e778144ad31749f4a98a9' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/file_manipulator.tpl',
      1 => 1457295338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36053026656dc99c6cc30e3-85534576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file_name' => 0,
    'file_size' => 0,
    'file_type' => 0,
    'file_new_name' => 0,
    'file_password' => 0,
    'file_visibility' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc99c730cd11_05009417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc99c730cd11_05009417')) {function content_56dc99c730cd11_05009417($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="jumbotron" align="center"><?php if (isset($_smarty_tpl->tpl_vars['file_name']->value)) {?><div class="form-group" align="center" style="padding: 20px;margin: 0 50px 0px 50px;"><h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visão geral do arquivo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3><div class="form-group" align="center"><p> </p><p> </p><p> </p><p> </p><p> </p><p> </p><p><div class="table-responsive" ><table class="table table-hover" style=" border-radius: 9px;"><tbody ><tr style="border: 1px solid #464545;"><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nome<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</th><th style="border: 1px solid #464545;"><?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
</th></tr><tr style="border: 1px solid #464545;"><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tamanho<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td><td style="border: 1px solid #464545;"><?php echo $_smarty_tpl->tpl_vars['file_size']->value;?>
</td></tr><tr style="border: 1px solid #464545;"><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tipo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td><td style="border: 1px solid #464545;"><?php echo $_smarty_tpl->tpl_vars['file_type']->value;?>
</td></tr><tr style="border: 1px solid #464545;"><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td><td style="border: 1px solid #464545;"><?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
</td></tr><tr style="border: 1px solid #464545;"><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td><td style="border: 1px solid #464545;"><?php if (!empty($_smarty_tpl->tpl_vars['file_password']->value)) {?><?php echo $_smarty_tpl->tpl_vars['file_password']->value;?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
O Arquivo Não tem Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></td></tr><tr style="border: 1px solid #464545;"><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visibilidade<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td><td style="border: 1px solid #464545;"><?php echo $_smarty_tpl->tpl_vars['file_visibility']->value;?>
</td></tr><tr style="border: 1px solid #464545;"><td>Link:</td><td style="border: 1px solid #464545;"><input type="text" class="form-control input-sm" value="http://<?php echo @constant('SCRIPT_URL');?>
<?php echo @constant('DIR_INSTALL');?>
/index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
" disabled /></p><small> ( <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lembre-se que se o arquivo está definido para qualquer privacidade. Para restringir o acesso, você pode definir uma senha.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 )</small></td></tr></tbody></table></div></div></div><div class="form-group" align="center" style="border: 1px solid #464545; border-radius: 9px;padding: 20px;margin: 0 100px 0px 130px;"><h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Editar Arquivo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3><hr><form class="form-horizontal" action="index.php?action=file_manipulator&amp;action_file=password_change&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
" method="post" enctype="multipart/form-data"><label><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mudar password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label><input type="password" name="password" class="form-control input-sm" /><br><button class="btn btn-primary btn-block" type="submit" name="submit" value="" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button></form><h3>Mudar Visibilidade</h3><hr><a class="btn btn-success btn-block" href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<?php if (($_smarty_tpl->tpl_vars['file_visibility']->value=='public')) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meter o Arquivo privado<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meter o arquivo como público<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></a><h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zona Perigosa!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3><hr><p><a class="btn btn-danger btn-block" class="col-xs-4" href="index.php?action=file_manipulator&amp;action_file=idf_change&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['file_name']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['file_name']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cuidado! Esta operação é irreversível. O ficheiro% 1 não terá mais o mesmo código de identificação e, em seguida, todos os links associados levará a um erro e deve ser atualizado. Continuar?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['file_name']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mudar o Identificador do Ficheiro<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><p><a class="btn btn-danger btn-block" href="index.php?action=file_manipulator&amp;action_file=delete&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value;?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['file_name']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['file_name']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cuidado! Esta operação é irreversível. O ficheiro %1 é removido do sistema. Continuar?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['file_name']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eliminar Ficheiro<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p></div><?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
