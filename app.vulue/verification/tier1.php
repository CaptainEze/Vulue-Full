<?php
session_start();

require_once('../../server/config.php');
require_once('../../config/serverconfig.php');
require_once('../../classes/process.php');
require_once('../../classes/users.php');
$tierNum = 1;
$userFunctions = new User;
if(!isset($_SESSION['verifem'])) header('../../auth/login.php');
$data = $userFunctions->getUserByEmail($_SESSION['verifem']);
if($data['e_verif']==1){
    $clId = $data['cl_id'];
    require_once('./success.php');

} else{
    $retryLink = "../../auth/register.php?q=ver";
    require_once('./unsuccessful.php');
}


// require_once('success.php');

?>
