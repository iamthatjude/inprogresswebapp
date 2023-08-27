<?php
/**
 * header.layout.php -- Header
 */

ob_start();
session_start();

date_default_timezone_set('Africa/Lagos');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$max_time = 60*60*24; // in seconds but it is 24hours

if ( !isset($_SESSION['uid']) || $_SESSION["loggedin"] !== true || trim($_SESSION['uid']) == '' ){
	//header('Location: ' . $BASE_URL_ROOT . 'admin/');

    $protocol = @$_SERVER['HTTPS'] ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $current_page = str_replace(".php", "", $_SERVER['PHP_SELF'] );
    $redirect_to = $protocol . $host . $current_page;
	header( 'Location: '. USER_URL . USER_LOGIN .'?redirect_to='. $redirect_to );

	exit;
}

// Log Out User If Login Has Been More Than 24hours
if ( ($_SESSION['last_login'] + $max_time) < time() ){
    header( 'Location: '. USER_LOGOUT );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $pageTitle . ' ' . $pageSeparator . ' ' . SITE_NAME; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= ASSETS_URL; ?>css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?= ASSETS_URL; ?>assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    