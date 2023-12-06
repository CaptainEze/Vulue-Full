<?php
session_start();
require_once('../../config/serverconfig.php');
require_once('../../server/config.php');
require_once('../../classes/process.php');
require_once('../../classes/users.php');
$process = new process;

$loginStatus = $process->verifyLoggedIn();
if ($loginStatus[0]) {
    $loggedIn = $loginStatus[0];
    $usr = $loginStatus[1];
    $id = $_SESSION['user_id'];
    $user = new UserFull($id);
    // check email verification
    if($user->eVerified == 0){
        $_SESSION['verifem'] = $usr;
        $process->redirect("../../auth/register.php?q=ver");
    }
} else {
    $process->destroySession();
    $process->redirect('../../auth/login.php?af=ver');
}

$pageTitle="Complete Onboarding";
$pathToImages="../../assets/images";
$pathToStyles="../../res/styles";
$pathToScripts="../../res/scripts";
$pathToVendors="../../vendors";
$pathToLocStyle="../css/verification.css";
require_once('../../pageComponents/header-no-nav.php');
?>
    <main class="first-block-after-header">
        <div class="ctmp-cont txt-white">
            <p>Application Submitted</p>
            <p>You have submitted your application successfully. We will notify you by email once we get the results. Thank you for your patience.</p>
            <p>Processing time: 1 - 5 business days</p>
            <p>Until then you can still proceed to your dashboard</p>
        </div>
        <div class="ver-actions" style="padding: 1em;">
            <a href="../dashboard/" class="no-decor txt-white"><button class="bg-blue brdls txt-white"><span style="display:block;text-align:center;">OK</span></a>
        </div>
    </main>