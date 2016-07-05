{include file='header.tpl'}{strip}
        <div class="container">
		<div class="jumbotron" align="center">		
{if isset($file_name)}
	<div class="form-group" align="center" style="padding: 20px;margin: 0 50px 0px 50px;">	
	
            <h3>{t}Visão geral do arquivo{/t}</h3>
		<div class="form-group" align="center">
            <p> </p>
            <p> </p>
            <p> </p>
            <p> </p>
            <p> </p>
            <p> </p>
            <p> 
<div class="table-responsive" >
<table class="table table-hover" style=" border-radius: 9px;">
    <tbody >
        <tr style="border: 1px solid #464545;">
            <th>{t}Nome{/t}:</th>
            <th style="border: 1px solid #464545;">{$file_name}</th>
        </tr>
        <tr style="border: 1px solid #464545;">
            <td>{t}Tamanho{/t}:</td>
            <td style="border: 1px solid #464545;">{$file_size}</td>
        </tr>
        <tr style="border: 1px solid #464545;">
        <td>{t}Tipo{/t}:</td>
        <td style="border: 1px solid #464545;">{$file_type}</td>
        </tr>
        <tr style="border: 1px solid #464545;">
            <td>{t}ID{/t}:</td>
            <td style="border: 1px solid #464545;">{$file_new_name}</td>
        </tr>
         <tr style="border: 1px solid #464545;">
            <td>{t}Password{/t}:</td>
            <td style="border: 1px solid #464545;">{if !empty($file_password)}{$file_password}{else}{t}O Arquivo Não tem Password{/t}{/if}</td>
        </tr>
           <tr style="border: 1px solid #464545;">
            <td>{t}Visibilidade{/t}:</td>
            <td style="border: 1px solid #464545;">{$file_visibility}</td>
        </tr>
          <tr style="border: 1px solid #464545;">
            <td>Link:</td>
            <td style="border: 1px solid #464545;"><input type="text" class="form-control input-sm" value="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name}" disabled /></p>
			<small> ( {t}Lembre-se que se o arquivo está definido para qualquer privacidade. Para restringir o acesso, você pode definir uma senha.{/t} )</small></td>
        </tr>
    </tbody>
</table>
</div>
		</div>
		</div>
		<div class="form-group" align="center" style="border: 1px solid #464545; border-radius: 9px;padding: 20px;margin: 0 100px 0px 130px;">	
            <h3>{t}Editar Arquivo{/t}</h3><hr>
            <form class="form-horizontal" action="index.php?action=file_manipulator&amp;action_file=password_change&amp;file={$file_new_name}" method="post" enctype="multipart/form-data">
                <label>{t}Mudar password{/t}:</label> 
                <input type="password" name="password" class="form-control input-sm" /><br>
                <button class="btn btn-primary btn-block" type="submit" name="submit" value="" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;{t}Change password{/t}</button>
            </form>
			<h3>Mudar Visibilidade</h3><hr>
			           <a class="btn btn-success btn-block" href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file={$file_new_name}"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;{if ($file_visibility == 'public')}{t}Meter o Arquivo privado{/t}{else}{t}Meter o arquivo como público{/t}{/if}</a>
					 
					   <h3>{t}Zona Perigosa!{/t}</h3>
					   <hr>
                <p><a class="btn btn-danger btn-block" class="col-xs-4" href="index.php?action=file_manipulator&amp;action_file=idf_change&amp;file={$file_new_name}" onclick="return confirm('{t 1=$file_name}Cuidado! Esta operação é irreversível. O ficheiro% 1 não terá mais o mesmo código de identificação e, em seguida, todos os links associados levará a um erro e deve ser atualizado. Continuar?{/t}')"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;{t}Mudar o Identificador do Ficheiro{/t}</a>
                <p><a class="btn btn-danger btn-block" href="index.php?action=file_manipulator&amp;action_file=delete&amp;file={$file_new_name}" onclick="return confirm('{t 1=$file_name}Cuidado! Esta operação é irreversível. O ficheiro %1 é removido do sistema. Continuar?{/t}')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> {t}Eliminar Ficheiro{/t}</a></p>
      
			</div>




{/if}
        </div>
		</div>
{/strip}{include file='footer.tpl'}
