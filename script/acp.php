<?php
$user = $login->whois_logged();

// Setto i giusti menù
if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Controllo se è loggiato se no stampo un errore!
if(!$user){
    $smarty->assign('error', T_('Error: Tu Não Tens Acesso para estares Aqui !').' '.T_('Login!'));
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// Controllo che l'utente non sia admin e in tal caso errore
if($user['rule'] !== 'admin'){
    $smarty->assign('error', T_('Error: Tu Não Tens Acesso para estares Aqui!'));
    $smarty->display('header.tpl');
    $smarty->display('footer.tpl');
    exit;
}
$smarty->assign('title', T_('Painel de Controlo'));
// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

switch($_GET['admin_action']){
    
    default:
        //header('Location: index.php');
		$smarty->display('acp.tpl');
		
    break;
	case 'acp_users':
	
    $result = $db->query("SELECT * FROM `users` WHERE `rule`<>'admin'") or die($mysqli->error);
    $rowsu = array();
    while($row = $db->fetch_array($result)) {
        $rowsu[] = $row;
    }
	
	$smarty->assign('rowsu', $rowsu); 
	$smarty->display('acp_users.tpl');
	
	break;
}

?>

