<?php
require_once('server/config.php');
$pageTitle="Vulue";
$pathToImages="./assets/images";
$pathToStyles="./res/styles";
$pathToVendors="./vendors";
$pathToLocStyle="./res/styles/landingpage.css";
require_once('pageComponents/header.php');
require_once('pageComponents/nav.php');
?>
<section class="first-block-after-header">
    <div id="message1" class="txt-white">
        <p class="message mes1 txt-thick">Innovative Products<br/>&amp; Expert Ingenuity at<br/> your finger tips</p>
        <span class="bg-image-hold"></span>
        <p class="message mes2 txt-thick">Investment<br/>Management for<br/>our Clients</p>
        <p class="message mes3 txt-std">Vulue Investments. Investing made<br/>Easier and Safer with our Ecosystem of<br/>Investment Products, covering the Whole<br/>Spectrum from Traditional to<br/>Alternatives</p>
    </div>
    <div class="call-in">
        <a href="<?php echo(SITEURL."/auth/login.php");?>" class="txt-white btn-a"><button class="bg-blue btn" >Start Investing</button></a>
    </div>
</section>
<section id="message2">
    <div class="bg-image-hold"></div>
</section>
<section id="message3" class="txt-white">
    <p class="message mes1 txt-std">Multi-Currency<br/>Wallet and Cards</p>
    <p class="message mes2">A Digital Wallet to Stash<br/>all your Currencies, Fund and<br/>Withdraw Investments Swiftly</p>
</section>
<section id="ups" class="flx-col">
    <div class="ups flx-col card bg-off-white">
        <span class="thumbnail"></span>
        <div class="flx flx-stretch txt-bold">
        <span>Multi-Strategy<br/>Driven</span>
            <svg width="2.4em" height="2.4em">
                <circle cx="1em" cy="1em" r=".7em" stroke-width=".3em" stroke="#dd9911" fill="#ffffff00"/>
            </svg>
        </div>
    </div>
    <div class="ups flx-col card bg-off-white">
        <span class="thumbnail"></span>
        <div class="flx flx-stretch txt-bold">
            <span>Institutional-Grade<br/>Custody</span>
            <svg width="2.4em" height="2.4em">
                <circle cx="1em" cy="1em" r=".7em" stroke-width=".3em" stroke="#117777" fill="#ffffff00"/>
            </svg>
        </div>
    </div>
    <div class="ups flx-col card bg-off-white">
        <span class="thumbnail"></span>
        <div class="flx flx-stretch txt-bold">
            <span>AI Embedded Market<br/>Technologies</span>
            <svg width="2.4em" height="2.4em">
                <circle cx="1em" cy="1em" r=".7em" stroke-width=".3em" stroke="#ff22ff" fill="#ffffff00"/>
            </svg>
        </div>
    </div>
    <div class="ups flx-col card bg-off-white">
        <span class="thumbnail"></span>
        <div class="flx flx-stretch txt-bold">
            <span>Stake Holder<br/>Centric</span>
            <svg width="2.4em" height="2.4em">
                <circle cx="1em" cy="1em" r=".7em" stroke-width=".3em" stroke="#00a1ff" fill="#ffffff00"/>
            </svg>
        </div>
    </div>
</section>
</body>

<script src="vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="res/scripts/nav.js"></script>
</html>