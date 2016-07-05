{include file='header.tpl'}{strip}
        <div class="container">
				<center>
            <p class="alert alert-success">
               <h2> {t}Registro concluído com sucesso!{/t}</h2><br/>
                {t}Você será redirecionado daqui a Instantes !{/t}<br/>
				<p>{t}Username{/t}: {$username}</p>
				<p>{t}Password{/t}: ( Escondida )</p>
				{t}Você será redirecionado daqui a Instantes !{/t}<br/>
				{t}SEMPRE QUE TE ESQUEÇERES DA PASSWORD CONTACTA O ADMIN{/t}<br/>
            </p>
			<meta http-equiv="refresh" content="3;url=index.php"> 
			</center>
{/strip}{include file='footer.tpl'}
