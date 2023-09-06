<?php
    require_once('../../../server/config.php');
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/fund.css";
    $dashPart = "Fund";
    require_once('components/header.php');
?>
    <main class="first-block-after-header txt-white">
        <div id="curr-choice-cont">
            <p class="head txt-white">Currency</p>
            <div class="body">
                <button class="select-curr flx flx-stretch txt-white bg-trans">
                    <span class="flx">
                        <span class="curr-flag bg-blue"></span>
                        <span class="curr-sym">NGN</span>
                        <span class="curr-name txt-thin txt-ash">Nigerian Naira</span>
                    </span>
                    <span>
                        <svg height="10" width="10" class="fa fa-rotate-180">
                            <polygon points="0,10 5,4 10,10" style="fill:#9999ee;"/>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <section id="payment-meth-cont">
            <p class="head txt-off-white">Fund with</p>
            <div id="p-meth1">
                <div class="head flx flx-stretch">
                    <span class="flx flx-stretch">
                        <span class="bnk-flag bg-blue"></span>
                        <span class="txt-white">Via bank transfer</span>
                    </span>
                    <span class="recmd-banner txt-thick">RECOMMENDED</span>
                </div>
                
            </div>
        </section>
    </main>
    
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    
</script>
</html>
