<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:34:29
         compiled from "/home/happyclo/public_html/template/templates/file_browser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146436754356dc94552fa4c8-83064679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a498051e62c1e6d3e14e53d7238287413ab7b703' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/file_browser.tpl',
      1 => 1457295337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146436754356dc94552fa4c8-83064679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idf' => 0,
    'file_name' => 0,
    'file_size' => 0,
    'file_type' => 0,
    'file_password' => 0,
    'file_visibility' => 0,
    'file_new_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc945566dec7_12553253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc945566dec7_12553253')) {function content_56dc945566dec7_12553253($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><?php if (!empty($_smarty_tpl->tpl_vars['idf']->value)) {?><center><h1> Olá, Aqui está todos os Teus Arquivos Enviados</h1></center><hr><table class="table table-striped"><thead><tr><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nome<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tamanho<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tipo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visibilidade<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Editar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th></tr></thead><tbody><?php }?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?><tr><td style="width: 400px; max-width: 400px;"><?php echo $_smarty_tpl->tpl_vars['file_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file_size']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file_type']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file_password']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file_visibility']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td><td><div class="btn-group"><a class="btn btn-info btn-sm" href="index.php?action=file_manipulator&amp;action_file=overview&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Editar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><a class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" href="#"><span class="caret"></span></a><ul class="dropdown-menu"><li><a href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mudar Visibilidade<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li><a href="#" onclick="return alert('http://<?php echo @constant('SCRIPT_URL');?>
<?php echo @constant('DIR_INSTALL');?>
/index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
')"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"> </span> Partilhar</a></li><li><a href="index.php?action=file_manipulator&amp;action_file=delete&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['file_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['file_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cuidado! Esta operação é irreversível. O ficheiro %1 vai ser removido do sistema. Continuar?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['file_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eliminar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li class="visible-phone divider"></li><li class="visible-phone"><a href="http://<?php echo @constant('SCRIPT_URL');?>
<?php echo @constant('DIR_INSTALL');?>
/index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><i class="icon-download-alt"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul></div></td><td class="hidden-phone"><div class="btn-group"><a class="btn btn-danger btn-sm" href="http://<?php echo @constant('SCRIPT_URL');?>
<?php echo @constant('DIR_INSTALL');?>
/index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['file_new_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"> </span>&nbsp; Download</a></div></td></tr></tbody><?php endfor; else: ?><center><h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Não Tens Nenhum Ficheiro!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2></center><?php endif; ?><?php if (!empty($_smarty_tpl->tpl_vars['idf']->value)) {?></table><?php }?></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
