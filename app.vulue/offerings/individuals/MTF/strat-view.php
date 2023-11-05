<?php
require_once('../../../../server/config.php');
$pageTitle = "Dashboard";
$pathToImages = "../../../../assets/images";
$pathToStyles = "../../../../res/styles";
$pathToVendors = "../../../../vendors";
$pathToLocStyle = "css/strat.css";
$pathToScripts = "../../../../res/scripts";
require_once('../../../../pageComponents/header-nav-back.php');
require_once('../../../../pageComponents/nav.php');
?>
<main class="first-block-after-header txt-white" id="strat-view-main">

    <div href="strat-view.php" class="txt-white ov-main glass std-glass flx flx-stretch">
        <div class="left">

        </div>

        <div class="mid">
            <p class="topic">Strategy Manager</p>
            <p class="tags-c flx flx-stretch">
                <span class="tag txt-yellow">SPECULATIVE</span>
                <span class="tag txt-thick">Default</span>
            </p>
        </div>

        <div class="right">
            <div class="trend-graph">
                <span>graph!<br>graph!<br>graph!<br></span>
            </div>
            <div class="inf flx flx-stretch">
                <button class="bg-trans txt-white">Details</button>
                <span class="stat-label"></span>
            </div>
            <div class="trend txt-green">
                <p class="dir">Up</p>
                <p class="pcent">1.24%</p>
            </div>
        </div>
    </div>

    <div id="main-content-info">
        <p class="pa1">
            We have a long-term vision, realistic targets and disciplined approach. On days of higher probability of major setups following liquidity inducement, we target RRs of 1:4-1:7. On days with no major setups we look out for, we target RRs of 1:2-1:3. However, regardless of market conditions, we strictly choose to risk 0.5%-5% per positions taken at any given time when speculating on the price movements of chosen pairs across asset classes keeping tight drawdowns never above 10% of the initial equity.
        </p>
        <p class="pa2">
            Staking your funds for a fixed duration allows us leverage the power of compounding to actualise greater returns while still observing prudent risk management practices such as sticking to our strategies which greatly put into consideration technical and fundamental market metrics. We compound in the sense that the we make our stated deductions from the cumulative yield. By each new fiscal month, the amount risked per position traded will grow proportionally to the growth in equity even though the percentage risked per trade remains fairly the same.
        </p>
    </div>

</main>



<script src="../../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../../../res/scripts/nav.js"></script>
<script>

</script>

</html>