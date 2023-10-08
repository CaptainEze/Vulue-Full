<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../../assets/images";
    $pathToStyles="../../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="../css/index.css";
    $settingPart = "Account Activities";
    $pathToComps = "../../components";
    require_once('../../components/header.php');
?>
    <main class="first-block-after-header">
        <a href="devices.php" class="no-decor"><button class="brdls txt-white bg-uvdark-blue">LInked Devices</button></a>
        <a href="logins.php" class="no-decor"><button class="brdls txt-white bg-uvdark-blue">Login Activity</button></a>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>