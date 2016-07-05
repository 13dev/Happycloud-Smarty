<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:34:54
         compiled from "/home/happyclo/public_html/template/templates/acp_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54624028856dc946e81d176-56524108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f50db0380348d8650fc7c9b695bc1b212105d7' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/acp_users.tpl',
      1 => 1457295337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54624028856dc946e81d176-56524108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'rowsu' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc946e9729b1_19772982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc946e9729b1_19772982')) {function content_56dc946e9729b1_19772982($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php if (!isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="container"><div class="jumbotron" align="center"><h2>USERS</h2><hr><table class="table table-striped"><thead><tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>EDITAR</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowsu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><div class="modal fade" id="basicModal<?php echo $_smarty_tpl->tpl_vars['row']->value['idu'];?>
" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button><h4 class="modal-title" id="myModalLabel">Mudar Password</h4></div><div class="modal-body"><h3>- Nome: <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
 -</h3><p align="left">Nova Password:</p><form class="form-horizontal" action="index.php?action=acp_users&admin_action=acp&edituser=change_password&username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
" method="post" enctype="multipart/form-data"><input type="password" class="form-control" placeholder="Nova Password" name="npass" required='required' minlength=5></div><div class="modal-footer"><button type="button" class="btn btn-default"  data-dismiss="modal"  >Sair</button><button type="submit" class="btn btn-primary">Mudar Password</button></form></div></div></div></div><tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value['idu'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td><td>******</td><td><div class="btn-group"><a class="btn btn-info btn-sm" href="index.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Editar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><a class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" href="#"><span class="caret"></span></a><ul class="dropdown-menu"><li><a  href="&username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
" data-toggle="modal" data-target="#basicModal<?php echo $_smarty_tpl->tpl_vars['row']->value['idu'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mudar Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li><a  href="index.php?action=acp_users&admin_action=acp&edituser=delete&username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
&idu=<?php echo $_smarty_tpl->tpl_vars['row']->value['idu'];?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tem certeza de que quer apagar esta conta e todos os arquivos associados a ela? Cuidado! Esta operação é irreversível!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eliminar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul></div></td></tr><?php } ?></tbody></table></div></div><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
