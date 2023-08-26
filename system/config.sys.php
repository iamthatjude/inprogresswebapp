<?php
/**
 * config.sys.php -- Configuration
 */

// Database Connection
//--Local
//define('DB_HOST', 'localhost'); // database host
//define('DB_USER', 'root'); // database user
//define('DB_PASS', ''); // database password
//define('DB_NAME', 'ipwebapp'); // database name
//--Online
/*define('DB_HOST', 'localhost'); // database host
define('DB_USER', ''); // database user
define('DB_PASS', ''); // database password
define('DB_NAME', ''); // database name*/

// $Options = array(
//     PDO::ATTR_PERSISTENT => true,
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
// );
/*$options = [
    PDO:: ATTR_ERRMODE            => PDO:: ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
    PDO:: ATTR_EMULATE_PREPARES   => false,
];

try {
	$db_con = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, $options);
}
catch (PDOException $e){
	die("ERROR: Could not connect. " . $e->getMessage());
}*/
// catch (Exception $e){
// 	var_dump('Couldn\'t Establish A Database Connection. Due to the following reason: ' . $e->getMessage());
// }


// Get Base Url -- http/https
if ( isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ){
        $ssl = 'https'; // HTTPS or SSL Version
}
else {
    $ssl = 'http'; // HTTP Version
}

//--Local
$base_url = ($ssl) ."://". $_SERVER['HTTP_HOST'] ."/dir/inprogresswebapp";
//--Online
//$base_url = ($ssl) ."://". $_SERVER['HTTP_HOST'];
//$base_url = ($ssl) ."://". $_SERVER['HTTP_HOST'] ."/";


// Some Settings
$pageSeparator = '|';
?>