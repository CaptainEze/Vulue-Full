<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/index.css";
    $settingPart = "";
    require_once('../components/header.php');
    $currentTmeZone = 1;
?>
    <main class="first-block-after-header">
        <div class="txt-white head">
            <p class="top txt-thick">Change Basis</p>
            <p class="sub">1. When you switch to a new UTC time zone, the change(%) for Spot, Margin, OPtions and Futures (excluding Mock Trading) will be calculated based on your new time zone.</p>
            <p class="sub">2. Switching to a new UTC time zone will only effect the change(%) for market information. This change will not apply to KLine candlesticks.</p>
        </div>

        <div class="body flx flx-col">
            <button class="txt-white brdls bg-trans t-zone">Last 24 hours</button>
            <?php
                
                for ($i=-12; $i <=12 ; $i++) {
                    $_str = $i<=0?$i:"+$i";
                    if(isset($currentTmeZone) && $i==$currentTmeZone){
                        echo <<<_END
                        <button class="txt-white brdls bg-trans t-zone">UTC $_str 0:00 (Device time zone)</button>
                        _END;
                    }else{
                        echo <<<_END
                        <button class="txt-white brdls bg-trans t-zone">UTC $_str 0:00 </button>
                        _END;
                    }
                }
            ?>
        </div>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>

<script>
</script>
</html>