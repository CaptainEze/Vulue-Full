<?php
    require_once('../../server/config.php');
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../vendors";
    $pathToLocStyle="css/transact.css";
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
                        <span class="txt-white txt-thick">Via bank transfer</span>
                    </span>
                    <span class="recmd-banner txt-thick">RECOMMENDED</span>
                </div>
                <div class="pre">
                    <p>Daily cumulative limits for pending KYC and verified KYC for accounts are <i class="fa fa-naira-sign"></i>5,000,000 and <i class="fa fa-naira-sign"></i>25,000,000 respectively.</p>
                    <p>To fund your Vulue account, make a bank transfer of up to <i class="fa fa-naira-sign"></i>1,000,000 to the accounts below.</p>
                </div>
                <div class="main flx flx-col bg-black">
                    <div class="bnk-name-cont flx flx-stretch">
                        <span class="flx flx-stretch">
                            <span class="banner bg-blue"></span>
                            <span class="flx flx-col">
                                <span class="txt-ash u">BANK NAME</span>
                                <span class="d">Vulue</span>
                            </span>
                        </span>
                        <span>
                            <button class="bg-blue brdls"><i class="fa fa-share-nodes"></i></button>
                        </span>
                    </div>
                    <div class="act-no-cont flx flx-stretch">
                        <span class="flx flx-stretch">
                            <span class="banner bg-blue"></span>
                            <span class="flx flx-col">
                                <span class="txt-ash u">ACCOUNT NUMBER</span>
                                <span class="vulue-acct-no d txt-blue-green flx flx-stretch"><span>xxxxxxxxx</span><button class="fa fa-copy bg-trans brdls txt-blue-green fa-lg"></button></span>
                            </span>
                        </span>
                        <span class="glass thick-glass brdls txt-white fa-lg">Unavailable</span>
                    </div>
                    <div class="act-no-cont flx flx-stretch">
                        <span class="flx flx-stretch">
                            <span class="banner bg-blue"></span>
                            <span class="flx flx-col">
                                <span class="txt-ash u">BENEFICIARY</span>
                                <span class="vulue-acct-name d flx flx-stretch">Ekwe Yousuf</span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <p class="pre-alt-payment-mthds">Alternatively</p>
            <div class="alt-payment-mthds flx flx-col">
                
                <div class="flx flx-stretch alt-pymnt">
                    <span class="banner bg-blue"></span>
                    <span class="flx flx-col">
                        <span class="b-name">Vulue Investments Mgt. Client Stanbic Bank Acct</span>
                        <span class="b-acct-no">xxxxxxxxx</span>
                    </span>
                    <button class="fa fa-copy txt-white brdls bg-trans fa-lg"></button>
                </div>
                <div class="flx flx-stretch alt-pymnt">
                    <span class="banner bg-blue"></span>
                    <span class="flx flx-col">
                        <span class="b-name">Vulue Investments Mgt. Client Zenith Bank Acct</span>
                        <span class="b-acct-no">xxxxxxxxx</span>
                    </span>
                    <button class="fa fa-copy txt-white brdls bg-trans fa-lg"></button>
                </div>
                <div class="flx flx-stretch alt-pymnt">
                    <span class="banner bg-blue"></span>
                    <span class="flx flx-col">
                        <span class="b-name">Vulue Investments Mgt. Client GT Bank Acct</span>
                        <span class="b-acct-no">xxxxxxxxx</span>
                    </span>
                    <button class="fa fa-copy txt-white brdls bg-trans fa-lg"></button>
                </div>
            </div>
        </section>
        <section class="other-payment-method flx flx-col">
            <div class="misc txt-off-white txt-thick">
                <p class="bg-primary">OR</p>
            </div>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-col">
                    <span class="p-meth txt-blue-green txt-thick">USSD</span>
                    <span class="info">Transfer using your other banks' USSD code</span>
                </span>
            </a>
            <a class="flx alt-pymnt glass txt-white no-decor" href="#">
                <span class="banner bg-black"></span>
                <span class="flx flx-col">
                    <span class="p-meth txt-blue-green txt-thick">Send money to a debit card</span>
                    <span class="info">Withdraw to a bank card of your choice</span>
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
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    
</script>
</html>
