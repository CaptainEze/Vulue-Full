<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/index.css";
    $settingPart = "Change PIN";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header" style="padding-top:2em;">
        <form action="" method="post">
        <p class="hin txt-white centered">Enter your current PIN and new PIN</p>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Current Password</span>
                <span class="fa fa-eye extra-item txt-ash"></span>
                <input type="number" name="" id="" class="inp bg-trans txt-white" value="">
            </div>

            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">New PIN</span>
                <span class="fa fa-eye extra-item txt-ash"></span>
                <input type="number" name="" id="" class="inp bg-trans txt-white" value="">
            </div>

            <input type="submit" value="Change PIN" class="submit txt-off-white bg-blue txt-thick">
        </form>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>

<script>
</script>
</html>