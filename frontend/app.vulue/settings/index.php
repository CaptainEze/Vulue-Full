<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="index.css";
    require_once('../../pageComponents/header.php');
    require_once('../../pageComponents/nav.php');
?>
    <main class="first-block-after-header">
        <section class="head flx flx-col">
            <div class="flx flx-col txt-white">
                <span class="bg-image-hold usr-avatar"></span>
                <span>Max John</span>
                <span class="usr-det"><span>Client id: </span><span>XXXXXXXXXX</span></span>
            </div>
            <div>
                Tier 1
            </div>
        </section>
        <section class="body">
            <ul class="set-cust-list">
                <a href="profile" class="txt-white txt-thick no-decor"><li>Profile</li></a>
                <a href="" class="txt-white txt-thick no-decor"><li>Language</li></a>
                <a href="" class="txt-white txt-thick no-decor"><li>Quoting Currency</li></a>
                <a href="time" class="txt-white txt-thick no-decor"><li>Change Basis</li></a>
                <a href="" class="txt-white txt-thick no-decor"><li>Cards</li></a>
                <a href="account-statement" class="txt-white txt-thick no-decor"><li>Get Account Statement</li></a>
                <a href="security" class="txt-white txt-thick no-decor"><li>Security Settings</li></a>
                <a href="" class="txt-white txt-thick no-decor"><li>Sign Out</li></a>
            </ul>
            
        </section>
    </main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
</script>
</html>