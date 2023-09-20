<?php
    require_once('../../../server/config.php');
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/index.css";
    require_once('../../pageComponents/header.php');
    require_once('../../pageComponents/nav.php');
?>
    <main class="first-block-after-header">
        <div class="head">
            <div class="usr-ident txt-white flx flx-stretch">
                <span class="usr-avatar-small"></span>
                <span class="usr-greeting">Good Morning, Ekwe</span>
                <button class="brdls bg-trans txt-white"><i class="fa fa-bell fa-lg"></i></button>
            </div>
            <div class="sub txt-white flx flx-stretch">
                <div class="">
                    <div class="usr-bal flx flx-stretch">
                        <span class="bal" hxen="bal bal">$38,954,680.24</span>
                        <button class="txt-white fa fa-eye-slash brdls bg-trans" xen="hide-bal"></button>
                    </div>
                    <span class="bal-type">Primary account balance</span>
                </div>
                <div class="reg">
                    <button class="brdls bg-trans flx flx-col"><span class="usr-avatar-small"></span><svg height="10" width="10" class="fa fa-rotate-180" style="margin-top:.3em;"><polygon points="0,10 5,5 10,10" style="fill:#0044ee;"/></svg></button>
                </div>
            </div>
        </div>
        <section class="acc-tools flx flx-stretch">
            <div class="tool-cont">
                <a href="fund.php" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls"></button>
                    <span>Fund</span>
                </a>
            </div>
            <div class="tool-cont">
                <a href="" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls"></button>
                    <span>Internal transfer</span>
                </a>
            </div>
            <div class="tool-cont">
                <a href="" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls"></button>
                    <span>Swap</span>
                </a>
            </div>
            <div class="tool-cont">
                <a href="withdraw.php" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls"></button>
                    <span>Withdraw</span>
                </a>
            </div>
        </section>

        <section class="news-letter-sect flx flx-col card">
            <!-- <div class="news-letter-cont flx">
                <div class="news-letter">wddwed</div>
                <div class="news-letter"></div>
            </div>
            <div class="flx">
                
            </div> -->
            news letter
        </section>

        <section class="portfolio-sect">
            <p class="head txt-white txt-thick">Portfolio</p>
            <div class="card portfolio flx flx-col">
                <p class="txt-vdblue txt-thick">Your Portfolio</p>
                <div class="base flx flx-stretch">
                    <span class="l flx">
                        <span>
                            <svg height="12" width="12" class="fa ">
                                <polygon points="0,12 6,0 12,12" style="fill:green;"/>
                            </svg>
                            <svg height="12" width="12" class="fa fa-rotate-180">
                                <polygon points="0,12 6,0 12,12" style="fill:red;"/>
                            </svg>
                        </span>
                        <span class="PNL txt-bold txt-vdblue">XXX.X%</span>
                    </span>
                    <button class="r bg-blue txt-white brdls card">View More</button>
                </div>
            </div>
            <div class="portfolio-ad">
                <span class="flx flx-col">
                    <span class="u txt-bold txt-off-white">Try group <br>Investing!</span>
                    <span class="d">By Vulue</span>
                </span>
            </div>
        </section>

        <section class="watchlist flx">
            <span class="txt-white txt-bold">Watchlist</span><a href="" class="flx bg-trans link-to-watch no-decor"><i class="fa fa-list txt-deep-blue"></i><i class="fa fa-angle-right txt-white"></i></a>
        </section>

        <section class="call-to-upgrade txt-white flx flx-col">
            <p class="head txt-bold">Upgrade your account</p>
            <p class="body">Your account is on TIER 1. Upgrade to Tier 2 to enjoy premium features.</p>
            <a href="" class="no-decor txt-ash"><i class="fas fa-arrow-right"></i> <span>Account Settings</span></a>
        </section>

        <section class="to-cards card">
            <div class="head flx flx-stretch">
                <span class="bg-image-hold"></span>
                <a href="" class="no-decor glass thick-glass txt-deep-blue txt-thick">Show details <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="svg-desgn">
                <svg width="3em" height="3em">
                    <circle cx="1.5em" cy="1.5em" r="1.5em" fill="#ee2200"/>
                </svg>
                <svg width="3em" height="3em">
                    <circle cx="1.5em" cy="1.5em" r="1.5em" fill="#da7700cc"/>
                </svg>
            </div>
        </section>
    </main>
    <aside class="recent-transactions txt-white">
        <div class="head flx flx-stretch">
            <span>Recent Transactions</span>
            <a href="" class="no-decor txt-white">See all</a>
        </div>
        <div class="body flx flx-stretch">
            <span>Naira Transfer</span>
            <span><i class="fa fa-naira-sign"></i>75,000</span>
        </div>
    </aside>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
    const bal = Xen.xenon('$bal',false);
    bal.bindElement(Xen.xenon('#hide-bal'),'click').setHxenParams(()=>{
        bal.html("****");
        Xen.xenon('#hide-bal').lessClass('fa-eye-slash').newClass('fa-eye');
    },()=>{
        bal.html("$38,954,680.24");
        Xen.xenon('#hide-bal').lessClass('fa-eye').newClass('fa-eye-slash');
    })
</script>
</html>