{include file='header.tpl'}{strip}
        <div class="container">
		<div class="jumbotron" align="center">
            <h1>{t}Bem-Vindo Admin{/t}</h1>
            <p>{t}editar{/t}</p>
            <p>
                <ul>
                    <li><a href="index.php?action=acp&admin_action=acp_users">{t}Editar Users{/t}</a></li>
                </ul>
            </p>
        </div>
		 </div>
{/strip}{include file='footer.tpl'}
