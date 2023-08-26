<?php
/**
 * Auth.Logout.php - Processes Log Out
 */

require_once '../../classes/Database.class.php'; // Database Class
$database = new Database();

include '../../system/config.sys.php'; // Configurations
include '../../system/constants.sys.php'; // Defined Constants

session_start();

//error_reporting(E_ALL);
//error_reporting(-1);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

$user_id = $_SESSION['uid'];
//$role = $_SESSION['role'];
$loggedin = $_SESSION["loggedin"];

//$query = $db_con->prepare("SELECT uid FROM ". TBL_USR ." WHERE uid=:uid");
$query = $database->query( "SELECT uid FROM ". TBL_USR ." WHERE uid=?", [$user_id] );
//$query->bindParam(':uid', $user_id);
//$query->execute();

if ( $query->rowCount() > 0 ){
    //$db_con->exec("UPDATE ". TBL_USR ." SET token=NULL, online='No' WHERE aid='$user_id'");
    $database->query( "UPDATE ". TBL_USR ." SET token=NULL, online='No' WHERE uid=?", [$user_id] );

    session_destroy();
    header('Location: ' . USER_URL );
}
?>