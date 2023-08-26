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
	header( 'Location: ' . USER_URL . 'Auth.Login?redirect_to='. $redirect_to );

	exit;
}

// Log Out User If Login Has Been More Than 24hours
if ( ($_SESSION['last_login'] + $max_time) < time() ){
    header( 'Location: Auth.Logout' );
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

    <!-- Custom fonts for this template-->
    <link href="<?= ASSETS_URL; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= ASSETS_URL; ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    