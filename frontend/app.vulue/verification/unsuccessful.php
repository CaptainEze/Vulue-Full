<?php
require_once('../../../server/config.php');
$pageTitle="Verification Unsuccessful";
$pathToImages="../../assets/images";
$pathToStyles="../../res/styles";
$pathToVendors="../../../vendors";
$pathToLocStyle="../css/verification.css";
require_once('../../pageComponents/header.php');
require_once('../../pageComponents/nav.php');
$tierNum = isset($_GET['tier'])? $_GET['tier']:(isset($tierNum)?$tierNum:'undefined');
$site = SITEURL;


?>
<main class="first-block-after-header">
    <p class="txt-white-red ver-status">Tier <?php echo $tierNum ?> Account Unverified!</p>
    
    <div class="ver-avatar-container">
        <div class="ver-avatar bg-image-hold"></div>
    </div>

    <div class="ver-actions flx flx-col">
        <button class="flx flx-stretch bg-trans txt-off-white" xen="try-again"><span>Retry</span><i class="fa fa-angle-right"></i></button>
        <?php
            if($tierNum != 1){
                echo <<<_END
                    <button class="flx flx-stretch bg-trans txt-off-white" xen="to-dash"><span>Back to Dashboard</span><i class="fa fa-angle-right"></i></button>
                _END;
            }
        ?>
    </div>
</main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
    Xen.xenon("#try-again").bind('click',()=>{
        window.location = "<?php 
            echo $tierNum == 2 ? SITEURL."/frontend/app.vulue/verification/completeOnboarding.php":SITEURL."/frontend/auth/register.php" 
        ?>";
    })
    <?php
        if($tierNum != 1){
            echo <<<_END
                Xen.xenon("#to-dash").bind('click',()=>{
                    window.location = "$site/frontend/app.vulue";
                })
            _END;
        }
    ?>
</script>
</html>