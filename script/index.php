<?php
$user = $login->whois_logged();

if($user != false){
    $smarty->assign('print_user_panel', 'true');
}

if($user['rule'] == 'admin'){
    $smarty->assign('print_admin_panel', 'true');
} 

$smarty->assign('title', T_('HappyCloud'));
$smarty->assign('username', $user['username']);

//////////////////////////////////////////////////////////////////////

//files na index
$get_files_public = get_files_public();
$smarty->assign('rows', $get_files_public); 

// cookiee
$cookie = get_cookie();
$smarty->assign('cookie', $cookie);

//downloads
$down = @file_get_contents('./count.txt');
$down1 = $down * 0.2;
$smarty->assign('downloads', $down);
$smarty->assign('downloads1', $down1);

// Uploads
$get_uploads = get_uploads();
$uploads = $get_uploads;
$uploads1 = $uploads * 1.5;
$smarty->assign('uploads', $uploads); 
$smarty->assign('uploads1', $uploads1); 

//users
$users = get_users();
$users1 = $users * 0.7;
$smarty->assign('users', $users); 
$smarty->assign('users1', $users1); 

//display
$smarty->display('index.tpl'); 

?>
