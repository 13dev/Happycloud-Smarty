<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 19:05:19
         compiled from "C:\wamp\www\marcomg-simple-file-sharing-5ac38ce\template\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1019455e70173b923a2-95558143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec22dcb522ff4a88f000a2572e2aef348f7af36' => 
    array (
      0 => 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\template\\templates\\footer.tpl',
      1 => 1457114716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019455e70173b923a2-95558143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e70173c32648_81575536',
  'variables' => 
  array (
    'print_admin_panel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e70173c32648_81575536')) {function content_55e70173c32648_81575536($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\includes\\classes\\smarty\\plugins\\block.t.php';
?><br/><div class="container"><div class="text-center"><?php if (isset($_smarty_tpl->tpl_vars['print_admin_panel']->value)) {?><p><a href="index.php?action=acp&amp;admin_action=overview">Painel de Administrador</a></p><?php }?><p><small class="muted"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Copyright &copy; 2016 | Ultra - Configs <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></p></div></div></body></html>
<?php }} ?>
