<?php
require_once('../../server/config.php');
$pageTitle="Verification Successful";
$pathToImages="../../assets/images";
$pathToStyles="../../res/styles";
$pathToVendors="../../vendors";
$pathToLocStyle="../css/verification.css";
require_once('../../pageComponents/header.php');
require_once('../../pageComponents/nav.php');
$tierNum = isset($_GET['tier'])? $_GET['tier']:(isset($tierNum)?$tierNum:'undefined');
$site = SITEURL;
?>
<main class="first-block-after-header">
    <?php
        if($tierNum != 2){
            echo <<<_END
            <p class="txt-white-red ver-status">Account Verified!</p>
            _END;
        }else{
            echo <<<_END
            <p class="txt-white-red ver-status">Unboarding Complete</p>
            _END;
        }
    ?>
    
    <div class="txt-white cl-det flx"><span>Client ID: </span><span>XXXX XXX XXX</span><button class="fa fa-copy bg-trans brdls txt-white"></button></div>

    <div class="ver-avatar-container">
        <div class="ver-avatar bg-image-hold"></div>
    </div>

    <div class="ver-actions flx flx-col">
        <?php
            if($tierNum != 2){
                echo <<<_END
                <button class="flx flx-stretch bg-trans txt-off-white" xen="to-next"><span>Continue onboarding</span><i class="fa fa-angle-right"></i></button>
                _END;
            }
        ?>
        
        <button class="flx flx-stretch bg-trans txt-off-white" xen="to-dash"><span>Go back to Dashboard</span><i class="fa fa-angle-right"></i></button>
    </div>
</main>   
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
    <?php
        if($tierNum != 2){
            echo <<<_END
                Xen.xenon("#to-dash").bind('click',()=>{
                    window.location = "$site/app.vulue/verification/completeOnboarding.php";
                })
            _END;
        }
    ?>
    Xen.xenon("#to-dash").bind('click',()=>{
        window.location = "<?php echo SITEURL."/app.vulue" ?>";
    })

</script>
</html>