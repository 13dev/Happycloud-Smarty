{include file='header.tpl'}{strip}
        <div class="container">
						<div class="jumbotron" align="center">
            <form class="form-signin" action="index.php?action=register" name="regitration" method="POST">
        <h2 class="form-signin-heading">Registar na Happycloud</h2><hr>
		<img src="{$smarty.const.DIR_TEMPLATE_IMGS}/register.png" width="200"><br><br>
        <label for="inputuser" class="sr-only" id="usr">{t}Usuário{/t}</label>
        <input type="text" class="form-control" placeholder="Usuário" name="username" required autofocus><br>
        <label for="inputPassword" class="sr-only">{t}Password{/t}</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required><br>
		<label for="inputPassword" class="sr-only">{t}Repita a Password{/t}</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Repita a password" name="password1" required><br>
		<div class="g-recaptcha" data-sitekey="6LcZIRoTAAAAAKYYyd4qZB5MR1BnkO3d3sNowiYO"></div><br>
		<br>		
        <button class="btn btn-md btn-info btn-block" type="submit" name="send"> Registar-me! </button>
      </form>
        </div>

        </div>
		

{/strip}{include file='footer.tpl'}
