{include file='header.tpl'}{strip}
        <div class="container" align="center">
		<div class="jumbotron">
            <form class="form-signin" action="index.php?action=login" name="login" method="POST">
        <h2 class="form-signin-heading">Entrar na Happycloud</h2><hr>
		<img src="{$smarty.const.DIR_TEMPLATE_IMGS}/login.png" width="200"><br><br>
		
        <label for="inputuser" class="sr-only" id="usr">{t}Usuário{/t}</label>
        <input type="text" class="form-control" placeholder="Usuário" name="username" required autofocus><br>
        <label for="inputPassword" class="sr-only">{t}Password{/t}</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
		<!--<div class="g-recaptcha" data-sitekey="6LcZIRoTAAAAAKYYyd4qZB5MR1BnkO3d3sNowiYO"></div>--><br>
        <button class="btn btn-md btn-info btn-block" type="submit" name="send"> Entrar </button>
      </form>
        </div>
		</div>
		
{/strip}{include file='footer.tpl'}
