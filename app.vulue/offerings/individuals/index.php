<?php
require_once('../../../server/config.php');
$pageTitle = "Dashboard";
$pathToImages = "../../../assets/images";
$pathToStyles = "../../../res/styles";
$pathToVendors = "../../../vendors";
$pathToLocStyle = "css/index.css";
require_once('../../../pageComponents/header.php');
require_once('../../../pageComponents/nav.php');
?>
<main class="first-block-after-header">
    <p class="txt-white txt-bold" id="info1">Don&apos;t leave<br>your<br>finances to<br>chance</p>
    <section id="components" class="">
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="mir"></div>
                <div class="component-text">MIRROR TRADING FUNDS</div>
            </a>
        </div>
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="lck"></div>
                <div class="component-text"></div>
            </a>
        </div>
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="stk"></div>
                <div class="component-text">STOCKS</div>
            </a>
        </div>
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="mu"></div>
                <div class="component-text">MUTUAL FUNDS</div>
            </a>
        </div>
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="com"></div>
                <div class="component-text">COMMODITIES</div>
            </a>
        </div>
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="abs"></div>
                <div class="component-text">ABSOLUTE RETURN FUNDS AND MULTI-ASSET AGGREGATES</div>
            </a>
        </div>
        <div class="offering">
            <a href="" class="link-to txt-white no-decor">
                <div class="component-image" id="alt"></div>
                <div class="component-text">ALTERNATIVE IMPACT INVESTING FUNDS</div>
            </a>
        </div>

    </section>
</main>



<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../../res/scripts/nav.js"></script>
<script>

</script>

</html>