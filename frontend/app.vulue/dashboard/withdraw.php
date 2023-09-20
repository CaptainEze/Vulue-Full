<?php
    require_once('../../../server/config.php');
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/transact.css";
    $dashPart = "Withdraw";
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
            <p class="head txt-off-white">Withdraw with</p>
            <div id="p-meth1">
                <div class="head flx flx-stretch">
                    <span class="flx flx-stretch">
                        <span class="bnk-flag bg-blue"></span>
                        <span class="txt-white txt-thick">Via bank transfer</span>
                    </span>
                    <span class="recmd-banner txt-thick">RECOMMENDED</span>
                </div>
                <div class="pre">
                    <p>Daily cumulative limits for pending KYC and verified KYC for accounts are <i class="fa fa-naira-sign"></i>5,000,000 and <i class="fa fa-naira-sign"></i>25,000,000 respectively.</p>
                    <p>You can send up to <i class="fa fa-naira-sign"></i>1,000,000 from your vulue account.</p>
                </div>
        </section>
        <section class="other-payment-method flx flx-col">
            <div class="misc txt-off-white txt-thick">
                <p class="bg-primary">OR</p>
            </div>
            
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-col">
                    <span class="p-meth txt-blue-green txt-thick">Add money with a debit card</span>
                    <span class="info">Fund your Account with your bank card</span>
                </span>
            </a>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-stretch p-meth">Crypto</span>
                <span>Unavailable</span>
            </a>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-stretch p-meth">Apple Pay</span>
            </a>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-stretch p-meth">Google Pay</span>
            </a>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-stretch p-meth">Airtel Money</span>
            </a>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-blue"></span>
                <span class="flx flx-stretch p-meth">Payment method</span>
            </a>
        </section>
        <button class="bg-ash continue-btn brdls txt-white">Continue</button>
    </main>
    
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    
</script>
</html>
