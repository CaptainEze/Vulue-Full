<?php
$pageTitle = "Verification Unsuccessful";
$pathToImages = "../../assets/images";
$pathToStyles = "../../res/styles";
$pathToVendors = "../../vendors";
$pathToLocStyle = "../css/verification.css";
require_once('../../pageComponents/header.php');
require_once('../../pageComponents/nav.php');
$tierNum = isset($_GET['tier']) ? $_GET['tier'] : (isset($tierNum) ? $tierNum : 'undefined');
$site = SITEURL;


?>
<main class="first-block-after-header">
    <p class="txt-white ver-status txt-thick">Registration Failed</p>
    <p class="txt-deep-blue aft-ver-status">Account Unregistered</p>

    <div class="ver-avatar-container">
        <div class="ver-avatar bg-image-hold"></div>
    </div>

    <div class="ver-actions flx flx-col">
        <?php
        if ($tierNum = 1) {
            echo <<<_END
                <a href="$retryLink" class="no-decor"><button class="bg-blue brdls txt-off-white" xen="to-next"><span>Please Retry</span><i class="fa fa-angle-right"></i></button></a>
            _END;
        }

        ?>
    </div>
</main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
</html>