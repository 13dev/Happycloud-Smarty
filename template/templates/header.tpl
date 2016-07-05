{strip}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{if isset($title)}{$title}{elseif isset($error)}{$error}{else}Titulo Desconheçido{/if}</title>
        <!-- FAVICON
            ================================================== -->
        <link rel="icon" href="{$smarty.const.DIR_TEMPLATE_IMGS}/favicon.ico" />

        <!-- STYLES
            ================================================== -->
        <link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/circliful.css">
		

        <!-- JAVASCRIPTS
            ================================================== -->
        <script src="{$smarty.const.DIR_TEMPLATE_VAR}/js/jquery.js"></script>
        <script src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/bootstrap-filestyle.js"></script>
		
		<script type="text/javascript" src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/circliful.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
		<style>
		 body {
  font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
		
		} 
		</style>
    </head>
    <body>
        <!-- NAVBAR
            ================================================== -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">HappyCloud</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home<span class="sr-only">(current)</span></a></li>
		  {if !isset($print_user_panel)}
		  
		    <li><a href="./index.php?action=login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;{t}  Entrar{/t}</a></li>
           <li><a href="./index.php?action=register"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;{t}  Inscrever-se{/t}</a></li>
		   {else}
		    <li><a href="./index.php?action=upload"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>&nbsp; {t} Upload{/t}</a></li>
            <li><a href="./index.php?action=file_browser"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;{t} Arquivos{/t}</a></li>	

			 
      </ul>
	  
	  
	  		 <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				
				
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;{if isset($username)}{t}Olá, {$username} !{/t}{elseif isset($error)}Opções{else}Opções{/if} <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a><!-- aggiungere  icon-white?? -->
			<ul class="dropdown-menu" role="menu">
				<li><a href="index.php?action=ucp&amp;user_action=overview"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp; {t}Painel De controlo{/t}</a></li>
				<li class="divider"></li>
				<li><a href="index.php?action=logout"><span class="	glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;{t}Logout{/t}</a></li>
			</ul>
		</li>
		</ul>
		{/if}
	
      
    </div>
  </div>
</nav>
{if isset($error)}
        <div class="container">
            <div class="alert alert-error">
                <p class="text-error">{$error}</p>
            </div>
        </div>
{/if}
{if isset($success)}
        <div class="container">
            <div class="alert alert-success">
                <p class="text-error">{$success}</p>
            </div>
        </div>
{/if}
{if isset($info)}
        <div class="container">
            <div class="alert alert-info">
                <p class="text-error">{$info}</p>
            </div>
        </div>
{/if}
{/strip}
