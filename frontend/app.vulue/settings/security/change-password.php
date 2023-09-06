<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/index.css";
    $settingPart = "Change Password";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header" style="padding-top:2em;">
        <form action="" method="post">
        <p class="hin txt-white centered">Enter your current password and new password</p>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Current Password</span>
                <button class="fa fa-regular fa-eye extra-item txt-ash brdls bg-trans" type="button" xen="cp1"></button>
                <input type="password" name="" id="" class="inp bg-trans txt-white" value="" hxen="dum1 p1">
            </div>

            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">New Password</span>
                <button class="fa fa-regular fa-eye extra-item txt-ash brdls bg-trans" type="button" xen="cp2"></button>
                <input type="password" name="" id="" class="inp bg-trans txt-white" value="" hxen="dum2 p2">
            </div>

            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Confirm Password</span>
                <button class="fa fa-regular fa-eye extra-item txt-ash brdls bg-trans" type="button" xen="cp3"></button>
                <input type="password" name="" id="" class="inp bg-trans txt-white" value="" hxen="dum3 p3">
            </div>

            <input type="submit" value="Save New Password" class="submit txt-off-white bg-blue txt-thick">
        </form>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../../res/scripts/passInpTgl.js"></script>
<script>
</script>
</html>