<?php
    session_start();
    require_once('../../config/serverconfig.php');
    require_once('../../server/config.php');
    require_once('../../classes/process.php');
    require_once('../../classes/users.php');
    
    $process = new process;
    
    
    $loginStatus = $process->verifyLoggedIn();
    if ($loginStatus[0]) {
        $loggedIn = $loginStatus[0];
        $usr = $loginStatus[1];
        $id = $_SESSION['user_id'];
        $user = new UserFull($id);
        // check email verification
        if($user->eVerified == 0){
            $_SESSION['verifem'] = $usr;
            $process->redirect("../../auth/register.php?q=ver");
        }
    } else {
        $process->destroySession();
        $process->redirect('../../auth/login.php');
    }

    $userInfo = $user->getKycDetails();
    if($userInfo->num_rows=='0'){
        $process->redirect('../verification/completeOnboarding.php');
    } else{
        $userInfo->data_seek(1);
        $userInfo = $userInfo->fetch_array(MYSQLI_ASSOC);
        if($userInfo['kyc_approved']=='1'){

        } else $process->redirect('../verification/completeOnboarding.php');

    }

    
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../vendors";
    $pathToLocStyle="css/index.css";
    require_once('../../pageComponents/header.php');
    require_once('../../pageComponents/nav.php');
?>
    <main class="first-block-after-header">
        <div class="head">
            <div class="usr-ident txt-white flx flx-stretch flx-algn-center">
                <span class="flx flx-stretch flx-algn-center hint">
                    <span class="usr-avatar-small"></span>
                    <span class="usr-greeting txt-highlight-blue">Good Morning, Ekwe</span>
                </span>
                <?php 
                print_r($userInfo);
                ?>
                
                <button class="brdls bg-trans txt-white" id="notific-btn">
                    <span id="notific-dot" class="bg-blue"></span>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.625 17.7916C12.6251 18.3172 12.4266 18.8234 12.0692 19.2088C11.7119 19.5942 11.222 19.8303 10.6979 19.8697L10.5416 19.8749H8.4583C7.9327 19.8751 7.42646 19.6766 7.04106 19.3192C6.65566 18.9618 6.41959 18.472 6.38017 17.9478L6.37496 17.7916H12.625ZM9.49996 0.083252C11.3906 0.0832208 13.2073 0.817516 14.5669 2.13125C15.9265 3.44498 16.7226 5.23543 16.7875 7.12492L16.7916 7.37492V11.2958L18.6895 15.0916C18.7724 15.2572 18.8138 15.4404 18.8104 15.6256C18.8069 15.8107 18.7586 15.9923 18.6696 16.1547C18.5806 16.3171 18.4536 16.4555 18.2994 16.5581C18.1452 16.6607 17.9685 16.7243 17.7843 16.7437L17.6645 16.7499H1.33538C1.15014 16.75 0.967638 16.7051 0.803528 16.6192C0.639418 16.5333 0.498588 16.4088 0.393107 16.2565C0.287626 16.1043 0.220639 15.9287 0.197885 15.7448C0.175132 15.561 0.197291 15.3744 0.262464 15.201L0.310381 15.0916L2.2083 11.2958V7.37492C2.2083 5.44105 2.97652 3.58638 4.34398 2.21893C5.71143 0.851479 7.56609 0.083252 9.49996 0.083252Z" fill="#FBFDFF"/>
                    </svg>
                </button>
            </div>
            <div class="sub txt-white flx-col">
                <div class="flx-col">
                    <span class="bal-type">Primary account balance</span>
                    <div class="usr-bal">
                        <span class="bal" hxen="bal bal">$38,954,680.24</span>
                        <button class="txt-white fa fa-eye-slash brdls bg-trans fa-2xs" xen="hide-bal"></button>
                    </div>
                </div>
                <div class="regn flx flx-stretch">
                    <button class="brdls bg-trans flx flx-col"><span class="usr-avatar-mid" id="regn-banner"></span><svg height="10" width="10" class="fa fa-rotate-180" style="margin-top:.3em;"><polygon points="0,10 5,5 10,10" style="fill:#A6A6A6;"/></svg></button>
                </div>
            </div>
        </div>

        <section id="dashboard-spraw">
            <div class="main-container flx">

                <div class="spraw-1 spraw txt-ash">
                    <div class="spraw-content">
                        <p id="pf-head" class="txt-thick">Your Portfolio</p>
                        <p id="pf-desc">Holdings Overview</p>
                        <p id="pf-amt" class="txt-bold">$4,495,334.22</p>
                        <p id="pf-dir" class="txt-green flx flx-stretch"><span><svg height="12" width="12" class="fa "><polygon points="0,12 6,0 12,12" style="fill:green;"/></svg></span><span>Up</span><span>2.47%</span></p>
                        <div id="pf-action"><button class="txt-deep-blue brdls">View More</button></div>
                    </div>
                </div>
                <div class="spraw-2 spraw">
                    <div class="spraw-content grp-in">
                        <span class="flx flx-col">
                            <span class="u txt-bold txt-off-white">Try group <br>Investing!</span>
                            <span class="d">By Vulue</span>
                        </span>
                    </div>
                </div>
                <div class="spraw-3 spraw">
                    <div class="to-cards card">
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
                    </div>
                </div>

            </div>

            <div class="indict flx flx-stretch">
                <button class="ind-btn brdls bg-trans"></button>
                <button class="ind-btn brdls bg-trans"></button>
                <button class="ind-btn brdls bg-trans"></button>
            </div>
        </section>


        <section class="acc-tools flx flx-stretch">
            <div class="tool-cont">
                <a href="fund.php" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls">
                        <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:overlay" filter="url(#filter0_d_2179_494)">
                            <path d="M11.7204 15H3.1272V12H11.7204V3H14.5848V12H23.1781V15H14.5848V24H11.7204V15Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_2179_494" x="0.127197" y="0.8" width="26.0509" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="0.8"/>
                            <feGaussianBlur stdDeviation="1.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2179_494"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2179_494" result="shape"/>
                            </filter>
                            </defs>
                        </svg>
                    </button>
                    <span>Fund</span>
                </a>
            </div>
            <div class="tool-cont">
                <a href="" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:overlay" filter="url(#filter0_d_2179_489)">
                            <path d="M14.75 21.25L12.8929 19.3929L24.1429 8.14286L22.2857 6.28571L11.0357 17.5357L9.17857 15.6786L8.21428 22.2143L14.75 21.25ZM14.8214 6.32143L15.7857 -0.214286L9.25 0.75L11.1071 2.60714L-0.142858 13.8571L1.71428 15.7143L12.9643 4.46429L14.8214 6.32143Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_2179_489" x="-3.14282" y="-2.41436" width="30.2856" height="28.4287" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="0.8"/>
                            <feGaussianBlur stdDeviation="1.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2179_489"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2179_489" result="shape"/>
                            </filter>
                            </defs>
                        </svg>
                    </button>
                    <span>Internal<br>transfer</span>
                </a>
            </div>
            <div class="tool-cont">
                <a href="" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls">
                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:overlay" filter="url(#filter0_d_2179_506)">
                            <path d="M9.16402 7.95176C11.8922 5.17545 16.3003 5.16206 19.046 7.90712L17.2389 9.74163C16.9362 10.0496 16.8485 10.5094 17.0108 10.9111C17.1731 11.3128 17.5591 11.5717 17.9845 11.5717H23.226H23.5988C24.1821 11.5717 24.6515 11.0941 24.6515 10.5004V4.78712C24.6515 4.35416 24.3971 3.96137 24.0023 3.79622C23.6076 3.63107 23.1558 3.72034 22.8531 4.02832L21.0285 5.88515C17.1863 2.0242 10.9974 2.03759 7.17711 5.92978C6.10689 7.01888 5.33493 8.29991 4.86123 9.67021C4.60245 10.4156 4.98843 11.228 5.71652 11.4913C6.44462 11.7547 7.24728 11.3619 7.50607 10.6209C7.8438 9.6479 8.39206 8.73287 9.16402 7.95176ZM3.59802 15.4996V15.8388V15.87V21.2129C3.59802 21.6458 3.85242 22.0386 4.24717 22.2038C4.64192 22.3689 5.09369 22.2797 5.39634 21.9717L7.22097 20.1149C11.0632 23.9758 17.2521 23.9624 21.0724 20.0702C22.1426 18.9811 22.9189 17.7001 23.3926 16.3343C23.6514 15.5888 23.2654 14.7765 22.5373 14.5131C21.8092 14.2498 21.0066 14.6426 20.7478 15.3835C20.4101 16.3566 19.8618 17.2716 19.0898 18.0527C16.3617 20.829 11.9536 20.8424 9.20789 18.0973L11.0106 16.2584C11.3132 15.9504 11.401 15.4906 11.2387 15.0889C11.0764 14.6872 10.6904 14.4283 10.2649 14.4283H5.01913H4.98843H4.65069C4.06734 14.4283 3.59802 14.9059 3.59802 15.4996Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_2179_506" x="0.598022" y="0.8" width="27.0535" height="26" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="0.8"/>
                            <feGaussianBlur stdDeviation="1.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2179_506"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2179_506" result="shape"/>
                            </filter>
                            </defs>
                        </svg>
                    </button>
                    <span>Swap</span>
                </a>
            </div>
            <div class="tool-cont">
                <a href="withdraw.php" class="tool no-decor flx flx-col txt-white">
                    <button class="icon-banner txt-white brdls">
                        <svg width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:overlay" filter="url(#filter0_d_2179_500)">
                            <path d="M21.8728 3H3.82703V5H21.8728V3Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_2179_500" x="0.827026" y="0.8" width="24.0458" height="8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="0.8"/>
                            <feGaussianBlur stdDeviation="1.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2179_500"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2179_500" result="shape"/>
                            </filter>
                            </defs>
                        </svg>

                    </button>
                    <span>Withdraw</span>
                </a>
            </div>
        </section>

        


        <section class="watchlist">
            <div class="head flx flx-stretch">
                <div id="watchlist-text" class="flx">
                    <span class="txt-white">Watchlist</span>
                    <a href="" class="flx bg-trans link-to-watch no-decor"><i class="fa fa-angle-right fa-xs txt-white"></i></a>
                </div>
                <button class="txt-white brdls bg-trans">
                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.25 13.9999H0.749978C0.551066 13.9999 0.360301 14.0789 0.219648 14.2196C0.0789962 14.3602 -2.16144e-05 14.551 -2.16144e-05 14.7499C-2.16144e-05 14.9488 0.0789962 15.1396 0.219648 15.2802C0.360301 15.4209 0.551066 15.4999 0.749978 15.4999H11.25C11.4489 15.4999 11.6397 15.4209 11.7803 15.2802C11.921 15.1396 12 14.9488 12 14.7499C12 14.551 11.921 14.3602 11.7803 14.2196C11.6397 14.0789 11.4489 13.9999 11.25 13.9999ZM0.749978 12.4999H0.817479L3.94498 12.2149C4.28758 12.1808 4.60801 12.0298 4.85248 11.7874L11.6025 5.03739C11.8645 4.76062 12.0061 4.39127 11.9962 4.0103C11.9864 3.62932 11.8259 3.26777 11.55 3.00489L9.49498 0.949893C9.22677 0.697965 8.87532 0.553413 8.50748 0.543732C8.13963 0.534052 7.78106 0.65992 7.49998 0.897394L0.749978 7.64739C0.507553 7.89187 0.356607 8.2123 0.322478 8.55489L-2.16144e-05 11.6824C-0.0101249 11.7922 0.00412913 11.903 0.0417243 12.0067C0.0793194 12.1104 0.13933 12.2045 0.217478 12.2824C0.287558 12.3519 0.370671 12.4069 0.462049 12.4442C0.553427 12.4815 0.651273 12.5005 0.749978 12.4999ZM8.45248 1.99989L10.5 4.04739L8.99998 5.50989L6.98998 3.49989L8.45248 1.99989Z" fill="white"/>
                    </svg>
                </button>
            </div>
            <div class="body flx flx-col">

                <div class="watch flx flx-stretch">
                    <div class="l flx-col">
                        <p class="topic txt-white">Foreign Exchange (FX)<br> Market Strategies Mirror<br>Fund</p>
                        <p class="dur txt-blan">Maturity Period: Mar 1, 2024 - May 31, 2024</p>
                    </div>
                    <div class="r flx flx-col">
                        <img src="../../assets/images/icons/pin-green.svg" alt="" width="13">
                        <span class="pnl txt-green"><svg height="12" width="12" class="fa "><polygon points="0,12 6,0 12,12" style="fill:green;"/></svg>12%</span>
                        <span class="amount txt-white">$10,146.77</span>
                        <span class="status txt-ash">Ongoing investment</span>
                    </div>
                </div>

                <div class="watch flx flx-stretch">
                    <div class="l flx-col">
                        <p class="topic txt-white">Vulue NSE ETF 20</p>
                    </div>
                    <div class="r flx flx-col">
                        <img src="../../assets/images/icons/pin-green.svg" alt="" width="13">
                        <span class="pnl txt-green"><svg height="12" width="12" class="fa "><polygon points="0,12 6,0 12,12" style="fill:green;"/></svg>12%</span>
                        <span class="amount txt-white">$0.00</span>
                        <span class="status txt-ash">No ongoing investment</span>
                    </div>
                </div>

                <div class="watch flx flx-stretch">
                    <div class="l flx-col">
                        <p class="topic txt-white">Vulue Aggressive Multi-Asset Fund</p>
                        <p class="dur txt-blan">Maturity Period: Mar 1, 2024 - Mar 31, 2025</p>
                    </div>
                    <div class="r flx flx-col">
                        <img src="../../assets/images/icons/pin-green.svg" alt="" width="13">
                        <span class="pnl txt-green"><svg height="12" width="12" class="fa "><polygon points="0,12 6,0 12,12" style="fill:green;"/></svg>2.03%</span>
                        <span class="amount txt-white">$306,060.00</span>
                        <span class="status txt-ash">Ongoing investment</span>
                    </div>
                </div>

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
        <!-- <section class="call-to-upgrade txt-white flx flx-col">
            <p class="head txt-bold">Upgrade your account</p>
            <p class="body">Your account is on TIER 1. Upgrade to Tier 2 to enjoy premium features.</p>
            <a href="" class="no-decor txt-ash"><i class="fas fa-arrow-right"></i> <span>Account Settings</span></a>
        </section> -->
    </main>
    <aside class="recent-transactions txt-white">
        <div class="head flx flx-stretch">
            <span>Recent Transactions</span>
            <a href="" class="no-decor txt-ash">See all</a>
        </div>
        <div class="body flx flx-stretch">
            <span>Naira Transfer</span>
            <span><i class="fa fa-naira-sign"></i>75,000</span>
        </div>
    </aside>
</body>
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
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