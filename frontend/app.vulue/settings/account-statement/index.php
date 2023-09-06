<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/index.css";
    $settingPart = "Account Statement";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <a href="history.php" class="no-decor"><button class="brdls txt-white bg-uvdark-blue">Transaction History</button></a>
        <a href="activity" class="no-decor"><button class="brdls txt-white bg-uvdark-blue">Account Activities</button></a>
        <a href="" class="no-decor"><button class="brdls txt-white bg-uvdark-blue">Request Account Statement Document</button></a>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>