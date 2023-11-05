<?php
require_once('../../../../server/config.php');
$pageTitle = "Dashboard";
$pathToImages = "../../../../assets/images";
$pathToStyles = "../../../../res/styles";
$pathToVendors = "../../../../vendors";
$pathToLocStyle = "css/index.css";
$pathToScripts = "../../../../res/scripts";
require_once('../../../../pageComponents/header-prods.php');
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ov':
            $action = 1;
            break;
        case 'fd':
            $action = 2;
            break;
        case 'st':
            $action = 3;
            break;
        default:
            $action = 1;
            break;
    }
} else {
    $action = 1;
}
?>
<main class="first-block-after-header txt-white">
    <div class="prod-special-nav flx flx-stretch">
        <a class="item brdls bg-trans no-decor" xen="to-ov" href="?action=ov">Overview</a>
        <a class="item brdls bg-trans no-decor" xen="to-fd" href="?action=fd">Funds</a>
        <a class="item brdls bg-trans no-decor" xen="to-st" href="?action=st">Strategies</a>
    </div>
    <?php
    switch ($action) {
        case 1:

    ?>
            <section id="MTF-main-content">
                <h1 class="head txt-std">Grow with ease<br>and profit like a<br>pro</h1>
                <div id="content-info-txt" class="flx-col">
                    <p>Our “Tenor-Based Mirror Trading Fund.” Through the symbiotic relationship we’ve created between our experienced strategy managers (in-house institutional traders) and the proprietary ML-embedded systematic trading analysis, simulation, execution, compliance software suite - TRAILX, we’ve essentially employed augmented intelligence in providing rapid adaptations to market conditions, better informed and prudent risk management strategies, and sustainable compounding yields.</p>
                    <p>Although, we execute trades with capital security and sustainable rates in mind, the financial markets cannot be at all times “maestroed” by one player. This inevitable market volatility and uncertainties equate to varying estimated returns. We employ the best to ensure returns on investment within the stipulated range we set across various markets we offer. </p>
                </div>
                <div class="returns-sect glass heavy-glass">
                    <div class="l1">My Mirror Trading Funds</div>
                    <div class="l2">₦2,244,848.97</div>
                    <div class="l3 flx flx-stretch"><span class="txt-ash"> All other currencies have been converterd to base currency</span><a href="" class="no-decor txt-ash">See my full portfolio</a></div>
                    <div class="l4 flx flx-stretch txt-std">
                        <div class="flx flx-stretch bg-ash">
                            <span class="topic">Today’s return</span>
                            <span class="amt txt-green">₦0.00 (0.00%)</span>
                        </div>
                        <div class="flx flx-stretch bg-ash">
                            <span class="topic">Total return</span>
                            <span class="amt txt-green">₦44,848.97 (2.04%)</span>
                        </div>
                    </div>
                </div>
                <div class="overviews">
                    <div class="overview flx flx-stretch">
                        <span class="topic">Foreign Exchange (FX)<br>Market Strategies Mirror<br>Fund</span>
                        <span class="fund">₦XXX.XX</span>
                        <span class="trend">x.x%</span>
                    </div>
                    <div class="overview flx flx-stretch">
                        <span class="topic">Global & Synthetic Indices<br>Market Strategies Mirror<br>Fund</span>
                        <span class="fund"></span>
                        <span class="trend"></span>
                    </div>
                    <div class="overview flx flx-stretch">
                        <span class="topic">Commodities Market Strategies<br>Mirror Fund</span>
                        <span class="fund"></span>
                        <span class="trend"></span>
                    </div>
                    <div class="overview flx flx-stretch">
                        <span class="topic">Stock Market Strategies<br>Mirror Fund</span>
                        <span class="fund"></span>
                        <span class="trend"></span>
                    </div>
                    <div class="overview flx flx-stretch">
                        <span class="topic">Money Market Strategies<br>Mirror Fund</span>
                        <span class="fund"></span>
                        <span class="trend"></span>
                    </div>
                    <div class="overview flx flx-stretch">
                        <span class="topic">Crypto Spot & Futures<br>Market Strategies Mirror<br>Fund</span>
                        <span class="fund"></span>
                        <span class="trend"></span>
                    </div>
                </div>

            </section>
        <?php
            break;
        case 2:
        ?>
            <section id="MTF-main-content" class="funds-sect">

                <div id="ad-container">
                    <a href="#"><img src="../../../../assets/images/banners/ad-banner.svg" alt=""></a>
                </div>

                <div class="fund-typ flx">
                    <div class="main">
                        <div class="top">
                            <p class="amt">₦XXX.XX</p>
                            <p class="trend">x.x%</p>
                            <p class="topic txt-thick">Forex Market Strategies<br>Mirror Fund</p>
                        </div>
                        <div class="bottom">
                            <p class="txt-bl">ROE</p>
                            <p class="yield flx flx-stretch"><span>9-12%</span><a href="" class="info fa fa-info-circle no-decor txt-bl fa-2xs"></a></p>
                            <p class="txt-bl">Maturity period</p>
                            <div class="duration flx flx-stretch">
                                <button class="brdls glass txt-white">3M</button>
                                <button class="brdls glass txt-white">6M</button>
                                <button class="brdls glass txt-white">9M</button>
                                <button class="brdls glass txt-white">1Y</button>

                            </div>
                        </div>
                    </div>
                    <div class="nav flx">
                        <a href="" class="no-decor"><button class="fa fa-angle-right fa-lg brdls bg-trans txt-white"></button></a>
                    </div>
                </div>

                <div class="fund-typ flx">
                    <div class="main">
                        <div class="top">
                            <p class="amt">₦XXX.XX</p>
                            <p class="trend">x.x%</p>
                            <p class="topic txt-thick">Global & Synthetic<br>Indices Market<br>Strategies Mirror Fund</p>
                        </div>
                        <div class="bottom">
                            <p class="txt-bl">ROE</p>
                            <p class="yield flx flx-stretch"><span>9-12%</span><a href="" class="info fa fa-info-circle no-decor txt-bl fa-2xs"></a></p>
                            <p class="txt-bl">Maturity period</p>
                            <div class="duration flx flx-stretch">
                                <button class="brdls glass txt-white">3M</button>
                                <button class="brdls glass txt-white">6M</button>
                                <button class="brdls glass txt-white">9M</button>
                                <button class="brdls glass txt-white">1Y</button>

                            </div>
                        </div>
                    </div>
                    <div class="nav flx">
                        <a href="" class="no-decor"><button class="fa fa-angle-right fa-lg brdls bg-trans txt-white"></button></a>
                        <button class="brdls bg-trans txt-white lock"><i class="fa fa-lock"></i></button>
                    </div>
                </div>

                <div class="fund-typ flx">
                    <div class="main">
                        <div class="top">
                            <p class="amt">₦XXX.XX</p>
                            <p class="trend">x.x%</p>
                            <p class="topic txt-thick">Commodities Market<br>Strategies Mirror Fund</p>
                        </div>
                        <div class="bottom">
                            <p class="txt-bl">ROE</p>
                            <p class="yield flx flx-stretch"><span>9-12%</span><a href="" class="info fa fa-info-circle no-decor txt-bl fa-2xs"></a></p>
                            <p class="txt-bl">Maturity period</p>
                            <div class="duration flx flx-stretch">
                                <button class="brdls glass txt-white">3M</button>
                                <button class="brdls glass txt-white">6M</button>
                                <button class="brdls glass txt-white">9M</button>
                                <button class="brdls glass txt-white">1Y</button>

                            </div>
                        </div>
                    </div>
                    <div class="nav flx">
                        <a href="" class="no-decor"><button class="fa fa-angle-right fa-lg brdls bg-trans txt-white"></button></a>
                        <button class="brdls bg-trans txt-white lock"><i class="fa fa-lock"></i></button>
                    </div>
                </div>

                <div class="fund-typ flx">
                    <div class="main">
                        <div class="top">
                            <p class="amt">₦XXX.XX</p>
                            <p class="trend">x.x%</p>
                            <p class="topic txt-thick">Stock Market Strategies<br>Mirror Fund</p>
                        </div>
                        <div class="bottom">
                            <p class="txt-bl">ROE</p>
                            <p class="yield flx flx-stretch"><span>9-12%</span><a href="" class="info fa fa-info-circle no-decor txt-bl fa-2xs"></a></p>
                            <p class="txt-bl">Maturity period</p>
                            <div class="duration flx flx-stretch">
                                <button class="brdls glass txt-white">3M</button>
                                <button class="brdls glass txt-white">6M</button>
                                <button class="brdls glass txt-white">9M</button>
                                <button class="brdls glass txt-white">1Y</button>

                            </div>
                        </div>
                    </div>
                    <div class="nav flx">
                        <a href="" class="no-decor"><button class="fa fa-angle-right fa-lg brdls bg-trans txt-white"></button></a>
                        <button class="brdls bg-trans txt-white lock"><i class="fa fa-lock"></i></button>
                    </div>
                </div>

                <div class="fund-typ flx">
                    <div class="main">
                        <div class="top">
                            <p class="amt">₦XXX.XX</p>
                            <p class="trend">x.x%</p>
                            <p class="topic txt-thick">Money Market Strategies<br>Mirror Fund</p>
                        </div>
                        <div class="bottom">
                            <p class="txt-bl">ROE</p>
                            <p class="yield flx flx-stretch"><span>9-12%</span><a href="" class="info fa fa-info-circle no-decor txt-bl fa-2xs"></a></p>
                            <p class="txt-bl">Maturity period</p>
                            <div class="duration flx flx-stretch">
                                <button class="brdls glass txt-white">3M</button>
                                <button class="brdls glass txt-white">6M</button>
                                <button class="brdls glass txt-white">9M</button>
                                <button class="brdls glass txt-white">1Y</button>

                            </div>
                        </div>
                    </div>
                    <div class="nav flx">
                        <a href="" class="no-decor"><button class="fa fa-angle-right fa-lg brdls bg-trans txt-white"></button></a>
                        <button class="brdls bg-trans txt-white lock"><i class="fa fa-lock"></i></button>
                    </div>
                </div>

            </section>
        <?php
            break;
        case 3:
        ?>
            <section id="MTF-main-content">
                <div class="copilot-cont flx flx-stretch">
                    <button class="brdls bg-trans">
                        <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.6667 0C23.8194 0 28 4.19922 28 9.375C28 14.5508 23.8194 18.75 18.6667 18.75H9.33333C4.18056 18.75 0 14.5508 0 9.375C0 4.19922 4.18056 0 9.33333 0H18.6667ZM9.33333 4.6875C8.09566 4.6875 6.90867 5.18136 6.0335 6.06044C5.15833 6.93951 4.66667 8.1318 4.66667 9.375C4.66667 10.6182 5.15833 11.8105 6.0335 12.6896C6.90867 13.5686 8.09566 14.0625 9.33333 14.0625C10.571 14.0625 11.758 13.5686 12.6332 12.6896C13.5083 11.8105 14 10.6182 14 9.375C14 8.1318 13.5083 6.93951 12.6332 6.06044C11.758 5.18136 10.571 4.6875 9.33333 4.6875Z" fill="#C0C0C0" />
                        </svg>
                    </button>
                    <span>ENABLE INSIGHTS &amp; ADVISORY CO-PILOT</span>
                </div>
                <div>
                    <p class="cam txt-ash">Choose another market</p>
                    <div id="markets" class="flx flx-stretch">
                        <button class="bg-trans txt-white flx flx-stretch"><span>FX</span><span class="indicator on"></span></button>
                        <button class="bg-trans txt-white flx flx-stretch"><span>Synthetic Indices</span><span class="indicator"></span></button>
                        <button class="bg-trans txt-white flx flx-stretch"><span>Commodities</span><span class="indicator"></span></button>
                        <button class="bg-trans txt-white flx flx-stretch"><span>Stocks</span><span class="indicator"></span></button>
                        <button class="bg-trans txt-white flx flx-stretch"><span>Money Market</span><span class="indicator"></span></button>
                    </div>
                </div>
                <div class="investment-section">
                    <div id="investments">

                        <!-- investment template  -->
                        <!-- <div class="inv-container">
                            <div class="inv">
                                <div class="head flx flx-col">
                                    <span class="topic">Foreign Exchange (FX)<br>Market Strategies Mirror<br>Fund</span>
                                    <span class="dur txt-blan">Maturity Period: Mar 1, 2024 - May 31, 2024</span>
                                </div>
                                <div class="mid flx">
                                    <span>₦101,243.33</span>
                                </div>
                                <div class="end flx flx-col">
                                    <span class="interest txt-green">1.24%</span>
                                    <span class="inv-status txt-ash">Ongoing investment</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="to-next">
                            <button class="brdls bg-trans flx txt-white"><i class="fa fa-angle-right fa-lg"></i></button>
                        </div> -->
                        <!-- end -->


                        <div class="no-investment-info txt-thin">
                            NO INVESTMENTS MADE YET!
                        </div>
                    </div>
                    <a href="#" class="alt-inv txt-ash no-decor">Choose another unit investment</a>
                </div>
                <div id="main-overview-list" class="">

                    <a href="strat-view.php" class="txt-white no-decor ov-main glass std-glass flx flx-stretch">
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
                    </a>

                    <a href="#" class="txt-white no-decor ov-main glass std-glass flx flx-stretch">
                        <div class="left">

                        </div>

                        <div class="mid">
                            <p class="topic">Strategy Manager</p>
                            <p class="tags-c flx flx-stretch">
                                <span class="tag txt-red">HEDGING</span>
                                <span class="tag txt-thick"></span>
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
                    </a>

                    <a href="#" class="txt-white no-decor ov-main glass std-glass flx flx-stretch">
                        <div class="left">

                        </div>

                        <div class="mid">
                            <p class="topic">Strategy Manager</p>
                            <p class="tags-c flx flx-stretch">
                                <span class="tag txt-yellow-alt">AHA ARB</span>
                                <span class="tag txt-thick"></span>
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
                    </a>
                    

                </div>

                <div class="new"></div>

                <div id="ad-container">
                    <a href="#"><img src="../../../../assets/images/banners/ad-banner.svg" alt=""></a>
                </div>


            </section>
    <?php
            break;
    }
    ?>

</main>



<script src="../../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>

</script>

</html>