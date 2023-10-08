<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/index.css";
    $settingPart = "Password &amp; security";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <button class="btn-classy flx flx-stretch bg-trans brdls txt-white" xen="to-pass"><span>Change Password</span><i class="fa fa-angle-right"></i></button>
        <button class="btn-classy flx flx-stretch bg-trans brdls txt-white" xen="to-chP"><span>Change PIN</span><i class="fa fa-angle-right"></i></button>
        <button class="btn-classy flx flx-stretch bg-trans brdls txt-white" xen="to-reP"><span>Reset PIN</span><i class="fa fa-angle-right"></i></button>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>

<script>
    Xen.xenon('#to-pass').bind('click',()=>{
        window.location = "change-password.php";
    })

    Xen.xenon('#to-chP').bind('click',()=>{
        window.location = "change-pin.php";
    })

    Xen.xenon('#to-reP').bind('click',()=>{
        window.location = "reset-pin.php";
    })
</script>
</html>