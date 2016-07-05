<?php
$user = $login->whois_logged();

if(isset($_POST['submit'])){
	
$hit_count = @file_get_contents('./count.txt'); // read the hit count from file
$hit_count++; // increment the hit count by 1
@file_put_contents('count.txt', $hit_count); // store the new hit count


}


if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

// Setto i giusti menù
if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
}

// Se non è settato alcun file da scaricare stampo un errore.
if(!isset($_GET['file']) or empty($_GET['file'])){
	$smarty->assign('error', T_("<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Erro!</strong> O link que você inseriu não contém o ID do arquivo!<br>
</div>"));
$smarty->assign('title',T_('Erro'));
    $smarty->display('download.tpl');

    exit;
}
else{
    $file = $db->escape_string($_GET['file']);
}

$query = $db->query("SELECT * FROM `files` WHERE `file_new_name` = '$file'");
$result = $db->fetch_array($query);






// Se il file non è stato trevato stampo errore 404
if(empty($result)){
    header("Status: 404 Not Found");
$smarty->assign('error', T_("<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Erro!</strong> O arquivo que você está tentando baixar não existe.<br>
</div>"));
	$smarty->assign('title',T_('Erro'));
    $smarty->display('download.tpl');
    exit;
}

// Il file esiste quindi posso settare le variabili
$file_type = $result['file_type'];
$file_name = $result['file_name'];
$file_size = $result['file_size'];
$file_id = $result['idf'];
$file_casual_id = $result['file_new_name'];
$file_idu = $result['idu'];
$file_password = $result['file_password'];
$file_visibility = $result['file_visibility'];

// Se il file è salvato come privato e chi lo sta scaricando non è il proprietario blocco il download
if($file_visibility == 'private' and $file_idu != $user['idu']){
		        $smarty->assign('error', T_("<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Erro!</strong> Este arquivo pode ser baixado apenas pelo proprietário. Você não está autorizado a fazer o download.<br>
</div>"));
$smarty->assign('title',T_('Erro'));
    $smarty->display('download.tpl');
    exit;
}

// Controllo per sicurezza che il file esista, se non esiste il database non è integro
if(!file_exists(ROOT.'/uploads/'.$file_casual_id)){
	        $smarty->assign('error', T_("<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Erro!</strong> Ocorreu Um Erro Por favor, Vamos tentar resolver o mais rapidamente possivel.<br>
</div>"));
$smarty->assign('title',T_('Erro'));
    $smarty->display('download.tpl');
    exit;
}

//Altri controlli che attualmente non ci sono
//
//

// Tutti i controlli sono stati superati con successo, chi scarica è autorizzato e stampo una pagina con le info sul file
if(!isset($_GET['info']) or empty($_GET['info']) or $_GET['info'] == 'yes'){
    if(!empty($file_password)){
        $smarty->assign('password_form', 'yes');
    }
    
    // Se il cookie è già stato settato lo cancello dal database e lo rimpiazzo
    if(!empty($_COOKIE['idfcd'])){
        $db->query('DELETE FROM `downloads` WHERE `idfcd` = \'' . $db->escape_string($_COOKIE['idfcd']) . '\'');
    }
    
    // Setto i cookies per autorizzare il download
    $idfcd = generate_idfcd($user['idu'], $file_id);
    setcookie('idfcd', $idfcd, time() + 3600);
    
    $smarty->assign('file_name', $file_name);
    $smarty->assign('file_size', return_human_value($file_size));
    $smarty->assign('file_new_name', $file_casual_id);
}

if(isset($_GET['info']) and $_GET['info'] == 'no'){
    // Se la password è giusta e richiesta posso scaricare oppure non è richiesta
    if(!empty($file_password) and isset($_POST['password']) and $file_password == $_POST['password'] or empty($file_password)){
        $can_download = 'yes';

    }
    // Altrimenti no
    else{
        $can_download = 'no';
        $smarty->assign('error', T_("<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Aviso!</strong> A senha definida pela pessoa que forneceu o download do arquivo não corresponde a inserida.
</div><br><center><a class='btn btn-primary btn-block' style='max-width: 400px;' href='index.php?action=download&file=".$_GET['file']."'><span class='glyphicon glyphicon-arrow-left' aria-hidden='true'> </span>&nbsp; Voltar Atras </a><center>"));

	$smarty->assign('title',T_('Erro'));
	$smarty->display('download.tpl');

	 exit;
    }
    
    // Se non sono settati giustamente i cookies per il download non faccio scaricare
    if(!isset($_COOKIE['idfcd'])){
        $_COOKIE['idfcd'] = null;
    }
    $result = $db->query("SELECT * FROM `downloads` WHERE `idfcd` = '".$db->escape_string($_COOKIE['idfcd'])."'");
    $result = $db->fetch_array($result);
    if(!empty($result) and $result['idf']==$file_id){
        //$can_download = 'yes';
		

    }
    else{
        $can_download = 'no';
        $smarty->assign('error', T_("<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Aviso!</strong> Ocorreu Um Erro Por favor, Vamos tentar resolver o mais rapidamente possivel.<br> Faça Reload Da Pagina!
</div>"));
		header('Location: index.php?action=download&file='.$_GET['file']);
    }
    
}
if(isset($can_download) and $can_download == 'yes'){
    // Delete cookie and db query
    setcookie('idfcd', null, 0);
    $db->query('DELETE FROM `downloads` WHERE `idd` = ' . $result['idd']);

    // Prepare to download
    header('Cache-Control: public');
    header('Content-Description: File Transfer');
    header('Content-type: '.$file_type);
    header('Content-Disposition: attachment; filename= "' . $file_name . '"');
    header('Content-Length: '.$file_size);
    header('Content-Transfer-Encoding: binary');
    readfile(ROOT.'/uploads/'.$file_casual_id);
    exit;
}
$smarty->assign('title', T_('Download'));
$smarty->display('download.tpl');
?>
