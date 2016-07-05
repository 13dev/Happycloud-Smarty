{include file='header.tpl'}{strip}
        <div class="container">
		<div class="jumbotron" align="center">	
			<div class="form-group" align="center">	
{if isset($file_name)}
<h3> Arquivo - {$file_new_name} <small> {t} Tamanho{/t}: {$file_size}</small></h3>
<h5>{$file_name}</h5>
<hr>
			<div class="form-group" align="center" style="border: 1px solid #464545; border-radius: 9px;padding: 20px;margin: 0 100px 0px 130px;">	
            <p>{t}Requer Password{/t}: {if isset($password_form)}{t}Sim{/t}.</p>
            <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
                <input type="password" class="form-control" placeholder=" Password" name="password" style='max-width: 200px;'/>
            </div>   
			<br><br>
                <button class="btn btn-primary btn-block" style='max-width: 400px;' type="submit" name="submit" value="{t}Download{/t}"><span class='glyphicon glyphicon-download-alt' aria-hidden='true'> </span> Download</button>
            </form>
			
    {else}
            {t}Não{/t}.
            <form action="index.php?action=download&amp;file={$file_new_name}&amp;info=no" method="post" enctype="multipart/form-data">
                <button class="btn btn-primary btn-block" style='max-width: 400px;' type="submit" name="submit" value="{t}Download{/t}"><span class='glyphicon glyphicon-download-alt' aria-hidden='true'> </span> Download</button>
            </form>
{/if}
{/if}
</div>
</div>
</div>
{/strip}{include file='footer.tpl'}
