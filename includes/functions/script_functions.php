<?php
/*
Questo file contiene varie funzioni dello script. Sono aggiunte dall'utilizzatore
*/

/*
Questa funzione prende la quantità di file occupati da un utente.
space_occuped($user_idu) dove $user_idu è l'id univoco dell'utente. Questa funzione restituisce bytes.
*/
function space_occuped($user_idu){
    global $db;
    // Recupero le dimensioni dei file dell'utente
    $result = $db->query('SELECT `file_size` FROM `files` WHERE `idu` = '.$user_idu);
    // Setto per non generare notice
    $space_occuped = 0;
    // Inseriscp il file occupato nella variabile $space_occuped
    while($result_f = $db->fetch_array($result)){
        $space_occuped = $space_occuped + $result_f['file_size'];
    }
    return($space_occuped);
}

function get_files_public(){
    global $db;
	
	$publicc = "public";
    $result = $db->query("SELECT * FROM `files` WHERE `file_visibility`='".$publicc."'");
	
	$rows = array();
    while($row = $db->fetch_array($result)) {
        $rows[] = $row;
    }
    return($rows);
}

function get_uploads(){
    global $db;
	$sql = "SELECT COUNT(1) FROM `files`";
    $result = $db->query($sql);
	$result = mysql_result($result, 0, 0);
    return($result);
}

function get_users(){
    global $db;
	$sql = "SELECT COUNT(1) FROM `users`";
    $result = $db->query($sql);
	$result = mysql_result($result, 0, 0);
    return($result);
}

function get_cookie(){
    if(!isset($_COOKIE["visit"])){ 

    setcookie('visit', '1');
    $_COOKIE['visit'] = '1';
	$msg = "<div class='alert alert-warning alert-dismissible text-center' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Espera!</strong><br> Reparamos que ainda Não criaste uma conta! <a href='./index.php?action=register' class='alert-link'>Clica Aqui Para te Registares!</a>
</div>";
	return($msg);

	} else{
		$msg = "<div class='alert alert-success alert-dismissible text-center' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Bem - Vindo de Novo!</strong><br>Estamos contentes por te ver novamente! <a href='./index.php?action=register' class='alert-link'>Clica Aqui Para entrares!</a>
</div>";	
	return($msg);
	}
}
/*
Questa funzione genera una id casuale per il download di un file
*/
function generate_idfcd($idu, $idf){
    global $db;
    $while = true;
    while($while){
        $idfcd = string_gen(LONG_FILE_NAME);
        $result = $db->query("SELECT * FROM `downloads` WHERE `idfcd` = '$idfcd'");
        $result = $db->fetch_array($result);
        if(empty($result['idd'])){
            $while = false;
        }
    }
    if(empty($idu)){
        $idu = -1;
    }

    $db->query("INSERT INTO `downloads` (`idd`, `idu`, `idf`, `idfcd`) VALUES (NULL, $idu, $idf, '$idfcd');");
    return($idfcd);
}

/*
Questa funzione scrive gli errori gravi
*/
function panic($panic){
    $f = fopen(ROOT.'/includes/panic.log', 'a');
    fwrite($f, $panic.PHP_EOL);
    fclose($f);
    die($panic);
}
?>
