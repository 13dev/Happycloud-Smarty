<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:22:58
         compiled from "/home/happyclo/public_html/template/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60875047956dc91a2d3b9f3-97882097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8af339472b582b2bd9fe15a6f0d6ba2cd8897769' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/footer.tpl',
      1 => 1457295338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60875047956dc91a2d3b9f3-97882097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'print_admin_panel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc91a2d52796_83439398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc91a2d52796_83439398')) {function content_56dc91a2d52796_83439398($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><br/><div class="container"><div class="text-center"><?php if (isset($_smarty_tpl->tpl_vars['print_admin_panel']->value)) {?><p><a href="index.php?action=acp&amp;admin_action=overview">Painel de Administrador</a></p><?php }?><p><small class="muted"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Copyright &copy; 2016 | Ultra - Configs <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></p></div></div></body></html>
<?php }} ?>
