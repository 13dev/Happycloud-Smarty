<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 16:37:09
         compiled from "C:\wamp\www\marcomg-simple-file-sharing-5ac38ce\template\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517255e70173633269-35560773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b923cb16133471d4ca9fe4cef44710d7b9a8c5' => 
    array (
      0 => 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\template\\templates\\index.tpl',
      1 => 1457278626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517255e70173633269-35560773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e70173758229_48662407',
  'variables' => 
  array (
    'cookie' => 0,
    'uploads' => 0,
    'users' => 0,
    'downloads' => 0,
    'uploads1' => 0,
    'users1' => 0,
    'downloads1' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e70173758229_48662407')) {function content_55e70173758229_48662407($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\includes\\classes\\smarty\\plugins\\block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><center><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
OLÁ, BEM-VINDO A NOVA HAPPYCLOUD<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Happycloud é um sistema simples onde os utilizadores Podem divulgar Arquivos Rapidamente<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><hr><?php echo $_smarty_tpl->tpl_vars['cookie']->value;?>
</center><hr><div class="jumbotron" align="center"><div class="row"><div class="col-md-4 text-center"><h3><?php echo $_smarty_tpl->tpl_vars['uploads']->value;?>
 Uploads</h3><div id="test-circle1"  style="width: 300px;" stroke="#303030"></div></div><div class="col-md-4 text-center"><h3><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
 Utilizadores</h3><div id="test-circle2"  style="width: 300px;"></div></div><div class="col-md-4 text-center"><h3><?php echo $_smarty_tpl->tpl_vars['downloads']->value;?>
 Downloads</h3> <div id="test-circle3"  style="width: 300px;"></div></div></div></div><!--<div class="form-group" align="center"><div class="row" align="center"><div class="col-lg-2 col-lg-offset-0 text-left"></div><div class="col-lg-2 col-lg-offset-2 text-center"><</div><div class="col-lg-2 col-lg-offset-2 text-center"></div></div></div>--><script>$("#test-circle1").circliful({animation: 1,animationStep: 1,foregroundBorderWidth: 5,backgroundBorderWidth: 5,foregroundColor: '#3498DB',showPercent: 1,percent: <?php echo $_smarty_tpl->tpl_vars['uploads1']->value;?>
,textSize: 48,text: 'Uploads',textStyle: 'font-size: 13px;',textColor: '#3498DB'});$("#test-circle2").circliful({animation: 1,animationStep: 1,foregroundBorderWidth: 5,backgroundBorderWidth: 5,foregroundColor: '#00BC8C',percent: <?php echo $_smarty_tpl->tpl_vars['users1']->value;?>
,textSize: 48,text: 'Users',textStyle: 'font-size: 13px;',textColor: '#00BC8C'});$("#test-circle3").circliful({animation: 1,animationStep: 1,foregroundBorderWidth: 5,backgroundBorderWidth: 5,foregroundColor: '#F39C12',percent: <?php echo $_smarty_tpl->tpl_vars['downloads1']->value;?>
,textSize: 48,text: 'Downloads',textStyle: 'font-size: 13px;',textColor: '#F39C12'});</script><div class='alert alert-info alert-dismissible text-center' role='alert'><strong>Informação! </strong><br>Aqui encontraras SOMENTE OS Arquivos Publicos, Alguns Deles PODEM Conter senha Definida pelo proprietario!</div><div class="panel panel-success"><div class="panel-heading text-center"><h4>ARQUIVOS PUBLICOS</h4></div><div class="panel-body"><table class="table table-striped"><thead><tr><th>Nome Do Ficheiro</th><th>Tipo Do ficheiro</th><th>Download</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['row']->value['file_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['file_type'];?>
</td><td class="hidden-phone"><div class="btn-group"><a class="btn btn-success" href="http://<?php echo @constant('SCRIPT_URL');?>
<?php echo @constant('DIR_INSTALL');?>
/index.php?action=download&amp;file=<?php echo $_smarty_tpl->tpl_vars['row']->value['file_new_name'];?>
"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"> </span>&nbsp; Download</a></div></td></tr><?php } ?></tbody></table></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
