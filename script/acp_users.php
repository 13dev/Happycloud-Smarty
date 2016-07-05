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

//// index.php?action=acp_users&admin_action=acp&edituser=delete&username=
switch($_GET['username']){
	default:
	if(empty($_GET['username']) or is_null($_GET['username'])){
header('Location: index.php?action=acp&admin_action=acp_users');
	}
		  
	break;
}

switch($_GET['idu']){
	default:
		header('Location: index.php?action=acp&admin_action=acp_users');
	break;
}


switch($_GET['edituser']){
    
    default:
        header('Location: index.php?action=acp&admin_action=acp_users');
		//$smarty->display('acp_users.tpl');
		
    break;
	
	case 'change_password':
        $login->change_password($_GET['username'], $_POST['npass']);
     //   header('Location: ./index.php?action=acp&admin_action=acp_users');
		
		 header('Location: index.php?action=acp&admin_action=acp_users');
		   $smarty->assign('error', T_('Password Mudada Com Sucesso!'));
    break;
	
	case 'delete':
		if(empty($_GET['idu']) or is_null($_GET['idu'])){
			header('Location: ./index.php');
		}
        $result = $db->query('SELECT `file_new_name` FROM `files` WHERE `idu` = \''.$_GET['idu'].'\'');
		
        while($result_ = $db->fetch_array($result)){
            $files[] = $result_['file_new_name'];
        }

        $db->query('DELETE FROM `files` WHERE `idu` = \''.$_GET['idu'].'\'');
		
        foreach($files as $file){
            echo(ROOT.'/uploads/'.$file);
            unlink(ROOT.'/uploads/'.$file);
        }

        $login->unregister($_GET['username']);
        header('Location: ./index.php?action=acp&admin_action=acp_users');
		  $smarty->assign('error', T_('Usuario Eliminado com Sucesso!'));
	
	break;
	
	
	
}





?>