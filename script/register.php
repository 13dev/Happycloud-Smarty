<?php
require_once "./script/rc.php";

$secret = "6LcZIRoTAAAAAOVEXRhyYwvI53HXwnAVHTuUmHiN";
 
// resposta vazia
$response = null;
 
// verifique a chave secreta
$reCaptcha = new ReCaptcha($secret);
if(USER_CAN_REGISTER == 'false'){
    $smarty->display('login_form_register_n.tpl');
    exit;
}

// Se è inviato il form e tutti i campi sono stati inviati:
if(isset($_POST['username']) and isset($_POST['username']) and !empty($_POST['username']) and !empty($_POST['password'])){
		if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success) {
	
			if($_POST['password'] != $_POST['password1'] || strlen($_POST['password']) < 5 || strlen($_POST['password1']) < 5 || strlen($_POST['username']) < 5){
	$smarty->assign('error', T_("
		<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Possiveis Erros: </strong> <ul><li> As Passwords Não coincidem</li><li>Sua senha ou usuario deve conter pelo menos 5 ou mais caracteres</li> </ul>
</div>"));	
 $smarty->assign('title', T_('O registro não foi realizado'));
$smarty->display('login_form_register.tpl');
	} else{
	
	if(!$login->register($_POST['username'], $_POST['password'])){
		$smarty->assign('error', T_("
		
		<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Possiveis Erros: </strong> <br/><ul><li>verifique se você digitou todos os campos; </li> <li> Será que o nome de usuário especificado já foi usado por outra pessoa, tente um diferente!</li></ul>
</div>"));
        $smarty->assign('title', T_('O registro não foi realizado'));
		$smarty->display('login_form_register.tpl');

	} else{
		
		$smarty->assign('username', $_POST['username']);
		$smarty->assign('password', $_POST['password']);
        $smarty->assign('error', T_("<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Aviso!</strong> O Teu Registo foi efetuado com sucesso!
</div>"));
 $smarty->assign('title', T_(' O Teu Registo foi efetuado com sucesso!'));
		$smarty->display('login_form_register.tpl');
		
		
	}
}
	
}else{
		 $smarty->assign('error', T_("	<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Aviso!</strong> Completando o reCaptacha, você verificar que você é humano e não um computador de envio de spam.
</div>"));
        $smarty->assign('title', T_('Recaptcha'));
		$smarty->display('login_form_register.tpl');
	  }
	  

}

// Altrimenti stampo il form
else{

    $smarty->assign('title', T_('Register'));
	$smarty->display('login_form_register.tpl');
 
}
?>
