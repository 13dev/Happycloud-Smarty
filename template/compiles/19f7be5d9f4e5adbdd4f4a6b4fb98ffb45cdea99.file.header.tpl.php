<?php /* Smarty version Smarty-3.1.16, created on 2016-03-06 20:39:21
         compiled from "C:\wamp\www\marcomg-simple-file-sharing-5ac38ce\template\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:879755e70173796a32-32056611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f7be5d9f4e5adbdd4f4a6b4fb98ffb45cdea99' => 
    array (
      0 => 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\template\\templates\\header.tpl',
      1 => 1457293160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879755e70173796a32-32056611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e70173b5b892_24307606',
  'variables' => 
  array (
    'title' => 0,
    'error' => 0,
    'print_user_panel' => 0,
    'username' => 0,
    'success' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e70173b5b892_24307606')) {function content_55e70173b5b892_24307606($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\\wamp\\www\\marcomg-simple-file-sharing-5ac38ce\\includes\\classes\\smarty\\plugins\\block.t.php';
?><!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php } else { ?>Titulo Desconheçido<?php }?></title><!-- FAVICON================================================== --><link rel="icon" href="<?php echo @constant('DIR_TEMPLATE_IMGS');?>
/favicon.ico" /><!-- STYLES================================================== --><link href="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><link href="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"><link rel="stylesheet" href="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/css/material-design-iconic-font.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/css/circliful.css"><!-- JAVASCRIPTS================================================== --><script src="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/js/jquery.js"></script><script src="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/js/bootstrap.min.js"></script><script type="text/javascript" src="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/js/bootstrap-filestyle.js"></script><script type="text/javascript" src="<?php echo @constant('DIR_TEMPLATE_VAR');?>
/bootstrap/js/circliful.js"></script><script src='https://www.google.com/recaptcha/api.js'></script><style>body {font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;}</style></head><body><!-- NAVBAR================================================== --><nav class="navbar navbar-inverse"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="./">HappyCloud</a></div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2"><ul class="nav navbar-nav"><li class="active"><a href="./">Home<span class="sr-only">(current)</span></a></li><?php if (!isset($_smarty_tpl->tpl_vars['print_user_panel']->value)) {?><li><a href="./index.php?action=login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  Entrar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li><a href="./index.php?action=register"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  Inscrever-se<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><?php } else { ?><li><a href="./index.php?action=upload"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>&nbsp; <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li><a href="./index.php?action=file_browser"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Arquivos<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul><ul class="nav navbar-nav navbar-right"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Olá, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 !<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['error']->value)) {?>Opções<?php } else { ?>Opções<?php }?> <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a><!-- aggiungere  icon-white?? --><ul class="dropdown-menu" role="menu"><li><a href="index.php?action=ucp&amp;user_action=overview"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp; <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Painel De controlo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><li class="divider"></li><li><a href="index.php?action=logout"><span class="	glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li></ul></li></ul><?php }?></div></div></nav><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="container"><div class="alert alert-error"><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><div class="container"><div class="alert alert-success"><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</p></div></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?><div class="container"><div class="alert alert-info"><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</p></div></div><?php }?>
<?php }} ?>
