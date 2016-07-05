<?php

if(isset($_POST['username']) and isset($_POST['username']) and !empty($_POST['username']) and !empty($_POST['username'])){

	// Se il login non è valido stampo il l'errore
	if(!$login->login($_POST['username'], $_POST['password'])){
		$smarty->assign('error', T_("<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Erro! </strong>O Utilizador ou a password estão incorretas, por favor tente novamente!</div>"));
        	$smarty->assign('title', T_('Login Incorreto!'));
		$smarty->display('login_form_login.tpl');
		exit;
	}

	else{
		// Se non c'è alcun errore sono stato loggiato e stampo a video l'informazione
        $smarty->assign('title', T_('Login Bem sucedido'));
		$smarty->display('login_login.tpl');

	}
}
// Altrimenti stampo il form
else{
    $smarty->assign('title', T_('Login'));
	$smarty->display('login_form_login.tpl');
}
?>