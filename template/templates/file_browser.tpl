{include file='header.tpl'}{strip}

        <div class="container">
		
		
{if !empty($idf)}
<center><h1> Olá, Aqui está todos os Teus Arquivos Enviados</h1></center>
<hr>
<table class="table table-striped">
    <thead>
	<tr>
		<th>{t}Nome{/t}</th>
		<th>{t}Tamanho{/t}</th>
		<th>{t}Tipo{/t}</th>
		<th>{t}Password{/t}</th>
		<th>{t}Visibilidade{/t}</th>
		<th>{t}Editar{/t}</th>
		<th>{t}Download{/t}</th>
	</tr>
    </thead>
    <tbody>
{/if}
{* idf, file_name, file_size, file_type, file_new_name, file_name, file_password, file_visibility *}

{section name=id loop=$idf}

       <tr>
			<td style="width: 400px; max-width: 400px;">{$file_name[id]}</td>
			<td>{$file_size[id]}</td>
			<td>{$file_type[id]}</td>
			<td>{$file_password[id]}</td>
			<td>{$file_visibility[id]}</td>
			<td>
	<div class="btn-group">
		<a class="btn btn-info btn-sm" href="index.php?action=file_manipulator&amp;action_file=overview&amp;file={$file_new_name[id]}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> {t}Editar{/t}</a>
		<a class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file={$file_new_name[id]}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>  {t}Mudar Visibilidade{/t}</a></li>
			<li><a href="#" onclick="return alert('http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name[id]}')"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"> </span> Partilhar</a></li>
			<li><a href="index.php?action=file_manipulator&amp;action_file=delete&amp;file={$file_new_name[id]}" onclick="return confirm('{t 1=$file_name[id]}Cuidado! Esta operação é irreversível. O ficheiro %1 vai ser removido do sistema. Continuar?{/t}')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>  {t}Eliminar{/t}</a></li>
			<li class="visible-phone divider"></li>
			<li class="visible-phone"><a href="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name[id]}"><i class="icon-download-alt"></i> {t}Download{/t}</a></li>
		</ul>
	</div>
	</td>
	<td class="hidden-phone">
	<div class="btn-group">
		<a class="btn btn-danger btn-sm" href="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name[id]}"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"> </span>&nbsp; Download</a>
	</div>
	</td>
      </tr>
      
    </tbody>

  {sectionelse}
  
  <center>
<h2>{t}Não Tens Nenhum Ficheiro!{/t}</h2>
</center>
{/section}

{if !empty($idf)}
            </table>
{/if}
        </div>
		
{/strip}{include file='footer.tpl'}

