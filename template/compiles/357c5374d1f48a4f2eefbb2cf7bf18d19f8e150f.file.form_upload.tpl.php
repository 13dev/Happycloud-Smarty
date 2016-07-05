<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 20:38:21
         compiled from "C:\wamp\www\marcomg-simple-file-sharing-5ac38ce\template\templates\form_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189556d89a73ac6ee8-99771329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '357c5374d1f48a4f2eefbb2cf7bf18d19f8e150f' => 
    array (
      0 => 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\template\\templates\\form_upload.tpl',
      1 => 1457120298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189556d89a73ac6ee8-99771329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d89a73d0b9b0_27156723',
  'variables' => 
  array (
    'max_file_size' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d89a73d0b9b0_27156723')) {function content_56d89a73d0b9b0_27156723($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\includes\\classes\\smarty\\plugins\\block.t.php';
if (!is_callable('smarty_function_html_image')) include 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\includes\\classes\\smarty\\plugins\\function.html_image.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><script type="text/javascript">function onSubmitButton(){document.getElementById("submitButtonDiv").style.display = "none";document.getElementById("progressBar").style.display = "block";}</script><ul class="list-group"><div class="jumbotron" align="center"><form class="form-horizontal" action="index.php?action=upload" method="post" enctype="multipart/form-data" onsubmit="return onSubmitButton()"><li class="list-group-item"><div class="form-group" style="padding: 0px 300px 0px;"><label><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['max_file_size']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['max_file_size']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ficheiro (Tamanho Maximo: %1)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['max_file_size']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label><input type="file" class="filestyle" name="file" id="input09"><!--<p class="help-block">Example block-level help text here.</p>--></div></li><li class="list-group-item">  <div class="form-group"><label for="examplePassword1">Password</label><input type="password" class="form-control input-sm" name="password" id="examplePassword1" placeholder="Password" style="max-width: 400px;"></div></li><li class="list-group-item" ><div class="form-group"><label for="example1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visibilidade Do Ficheiro<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><br><select name="visibility" id="example1" style="color: #A29999;width: 200px;" required='required'><option value="public"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Publico<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option><option value="private"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Privado<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option></select></div></li><li class="list-group-item"><button type="submit" class="btn btn-primary" name="submit" id="submitButton" style="width: 300px;"><span class="glyphicon glyphicon-send" aria-hidden="true"> </span>   &nbsp;Enviar</button></li><div id="progressBar" style="display:none"><?php echo smarty_function_html_image(array('file'=>((string)@constant('DIR_TEMPLATE_IMGS'))."/progress_bar.gif"),$_smarty_tpl);?>
</div></form></div></ul><script type="text/javascript">$('#input09').filestyle({buttonText : '  Escolher',buttonName : 'btn-primary','placeholder' : 'Escolhe um arquivo...'});</script></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
