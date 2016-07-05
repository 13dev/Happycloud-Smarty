{include file='header.tpl'}{strip}
        <div class="container">
		<center>
            <h1>{t}OLÁ, BEM-VINDO A NOVA HAPPYCLOUD{/t}</h1>
            <p>{t}Happycloud é um sistema simples onde os utilizadores Podem divulgar Arquivos Rapidamente{/t}</p>
			<hr>{$cookie}
			</center><hr>
			<div class="jumbotron" align="center">	
<div class="row">

        <div class="col-md-4 text-center"><h3>{$uploads} Uploads</h3><div id="test-circle1"  style="width: 300px;" stroke="#303030"></div></div>
        <div class="col-md-4 text-center"><h3>{$users} Utilizadores</h3><div id="test-circle2"  style="width: 300px;"></div></div>
        <div class="col-md-4 text-center"><h3>{$downloads} Downloads</h3> <div id="test-circle3"  style="width: 300px;"></div></div>
      </div>
	</div>
<!--
<div class="form-group" align="center">
	<div class="row" align="center">
        <div class="col-lg-2 col-lg-offset-0 text-left">
           
        </div>
		      <div class="col-lg-2 col-lg-offset-2 text-center">
            <
        </div>
		<div class="col-lg-2 col-lg-offset-2 text-center">
           
        </div>
	</div>
	  </div>
	  
	  -->
	  <script>
        $("#test-circle1").circliful({
            animation: 1,
            animationStep: 1,
            foregroundBorderWidth: 5,
            backgroundBorderWidth: 5,
			foregroundColor: '#3498DB',
			showPercent: 1,
            percent: {$uploads1},
            textSize: 48,
            text: 'Uploads',
            textStyle: 'font-size: 13px;',
            textColor: '#3498DB'
        });
		   $("#test-circle2").circliful({
            animation: 1,
            animationStep: 1,
            foregroundBorderWidth: 5,
            backgroundBorderWidth: 5,
			foregroundColor: '#00BC8C',
            percent: {$users1},
            textSize: 48,
            text: 'Users',
            textStyle: 'font-size: 13px;',
            textColor: '#00BC8C'
        });
		 $("#test-circle3").circliful({
            animation: 1,
            animationStep: 1,
            foregroundBorderWidth: 5,
            backgroundBorderWidth: 5,
			foregroundColor: '#F39C12',
            percent: {$downloads1},
            textSize: 48,
            text: 'Downloads',
            textStyle: 'font-size: 13px;',
            textColor: '#F39C12'
        });
	  </script>
	<div class='alert alert-info alert-dismissible text-center' role='alert'>
  <strong>Informação! </strong><br>Aqui encontraras SOMENTE OS Arquivos Publicos, Alguns Deles PODEM Conter senha Definida pelo proprietario!
  </div>
  
	<div class="panel panel-success">
  <div class="panel-heading text-center"><h4>ARQUIVOS PUBLICOS</h4></div>
  <div class="panel-body">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome Do Ficheiro</th>
        <th>Tipo Do ficheiro</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$rows item=row}
	<tr>
    <td>{$row.file_name}</td>
    <td>{$row.file_type}</td>
	<td class="hidden-phone"><div class="btn-group"><a class="btn btn-success" href="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$row.file_new_name}">
	<span class="glyphicon glyphicon-download-alt" aria-hidden="true"> </span>&nbsp; Download</a></div></td>
	</tr>
{/foreach}

    </tbody>
  </table>
  
  
  </div>
</div>

  


        </div>
{/strip}{include file='footer.tpl'}
