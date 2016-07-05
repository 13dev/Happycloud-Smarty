{include file='header.tpl'}{strip}
        <div class="container">
			<div class="jumbotron" align="center">		
		
{if isset($username)}
            <h1>{t 1=$username}Olá %1!{/t}</h1>
            <p>{t 1=$username}Olá <b>%1</b>,<br/>Bem-vindo ao painel de controle do usuário! Aqui você pode Alterar todos os aspectos da sua Conta !{/t} {t}A única coisa que você não pode editar é seu nome de usuário.{/t}
            </p>
		<div style="border: 1px solid #464545;border-radius: 10px;padding: 30px;margin: 60px;">
            <h2>{t}Relátorio{/t}</h2>
            <p>{t}Password{/t}: <b>{$password}</b></p>
            <p>{t}Espaço Ocupado{/t}: <b>{$space_occuped}</b> {t} de {/t} <b>{$space_max}</b></p>
			</div>

            <h2>{t}Alterações do usuário {/t}</h2>
            <form class="form-horizontal" action="index.php?action=ucp&amp;user_action=change_password" method="post" enctype="multipart/form-data" style="border: 1px solid #464545;border-radius: 10px;padding: 30px;margin: 60px;">
                <label>{t}Mudar password{/t}:</label>
                <input type="password" name="password" class="form-control input-sm" style="max-width: 200px;" /><br>
                <input class="btn btn-primary" type="submit" name="submit" value="{t}Mudar Password{/t}" />
            </form>

            <div style="border: 1px solid #464545; border-radius: 10px;padding: 30px;margin: 60px;">
                <h3>{t}Zona Perigosa!{/t}</h3>
                <p><a class="btn btn-danger" href="./index.php?action=ucp&amp;user_action=delete_user" onclick="return confirm('{t}Tem certeza de que quer apagar sua conta e todos os arquivos associados a ela? Cuidado! Esta operação é irreversível!{/t}')">{t}Eliminar Minha Conta!{/t}</a></p>
            </div>
{/if}
    </div>
</div>
{/strip}{include file='footer.tpl'}
