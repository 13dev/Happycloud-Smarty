<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 23:35:50
         compiled from "/home/happyclo/public_html/template/templates/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184394493456dc94a61527f3-19528717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38bde5014b4a5fe351307a76756a73ec022bba8' => 
    array (
      0 => '/home/happyclo/public_html/template/templates/upload.tpl',
      1 => 1457295340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184394493456dc94a61527f3-19528717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file_name' => 0,
    'file_weight' => 0,
    'file_password' => 0,
    'file_visibility' => 0,
    'link_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56dc94a6a238b0_13666165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc94a6a238b0_13666165')) {function content_56dc94a6a238b0_13666165($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/happyclo/public_html/includes/classes/smarty/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="jumbotron" align="center"><h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Arquivo carregado com sucesso!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2><hr><p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Detalhes do arquivo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</p><h4><table class="table table-bordered"><thead><tr><th>Nome</th><th>Tamanho</th><th>Password</th><th>Visibilidade</th><th>Download</th></tr></thead><tbody><tr><td><?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file_weight']->value;?>
</td><?php if (empty($_smarty_tpl->tpl_vars['file_password']->value)||is_null($_smarty_tpl->tpl_vars['file_password']->value)||$_smarty_tpl->tpl_vars['file_password']->value=='') {?><td>O Arquivo Não Tem Password!</td><?php } else { ?><td>Password: <?php echo $_smarty_tpl->tpl_vars['file_password']->value;?>
</td><?php }?><td><?php echo $_smarty_tpl->tpl_vars['file_visibility']->value;?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['link_file']->value;?>
" class="btn btn-success" class="js-copytextarea" id="link" value="<?php echo $_smarty_tpl->tpl_vars['link_file']->value;?>
"> Download</a></td></tr></tbody></table><script>var copyTextareaBtn = document.querySelector('.js-textareacopybtn');copyTextareaBtn.addEventListener('click', function(event) {var copyTextarea = document.querySelector('.js-copytextarea');copyTextarea.select();try {var successful = document.execCommand('copy');var msg = successful ? 'successful' : 'unsuccessful';console.log('Copying text command was ' + msg);} catch (err) {console.log('Oops, unable to copy');}});</script><h3><button class="btn btn-primary" class="js-textareacopybtn">COPIAR LINK</button></h3></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
