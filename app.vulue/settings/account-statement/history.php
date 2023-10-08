<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/history.css";
    $settingPart = "Transaction History";
    require_once('../components/header.php');
?>
    <section class="pre flx flx-stretch glass thick-glass">
        <button class="brdls bg-trans flx flx-stretch" xen="set-category-btn"><span class="txt-white">All categories</span><i class="fa fa-angle-down txt-ash"></i></button>
        <button class="brdls bg-trans flx flx-stretch" xen="set-staus-btn"><span class="txt-white">Any status</span><i class="fa fa-angle-down txt-ash"></i></button>
    </section>
    <main class="first-block-after-header txt-white" hxen="main main">
        <div class="range-cont">
            <span class="range-ind">From</span> <input type="date" name="from" id="min-range" class="bg-trans date-range txt-white"><span class="range-ind"> to </span><input type="date" name="to" id="max-range" class="bg-trans date-range txt-white">
        </div>
        <div class="vol-cont flx flx-stretch">
            <span class="vol-unt"><span class="ttx">In:</span> <span class="amt">10211166.02</span></span>
            <span class="vol-unt"><span class="ttx">Out:</span> <span class="amt">10211166.02</span></span>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r f">failed</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r re">reversed</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r p">pending</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r t">to be paid</span>
            </div>
        </div>


        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r f">failed</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>

        <div class="main-histories">
            <div class="hist-itm">
                <span class="u l">Transfer description</span>
                <span class="u r">+300</span>
                <span class="d l">August 11, 19:28</span>
                <span class="d r s">Successful</span>
            </div>
        </div>
    </main>
    <aside class="parameter-cont" id="categories" hxen="par1 par1">
        <button class="parameter txt-white bg-trans" xen="all filter-cat">All categories</button>
        <button class="parameter txt-white bg-trans" xen="wall-fnd filter-cat">Wallet fund</button>
        <button class="parameter txt-white bg-trans" xen="wall-with filter-cat">Wallet withdrawal</button>
        <button class="parameter txt-white bg-trans" xen="inv-fnd filter-cat">Investment funded</button>
        <button class="parameter txt-white bg-trans" xen="inv-rmd filter-cat">Investment redeemed</button>
        <button class="parameter txt-white bg-trans" xen="grp-inv filter-cat">Group investing</button>
    </aside>
    <aside class="parameter-cont" id="categories" hxen="par2 par2">
    <button class="parameter txt-white bg-trans">Any status</button>
        <button class="parameter txt-white bg-trans" xen="suc filter-stat">Successful</button>
        <button class="parameter txt-white bg-trans" xen="pen filter-stat">Pending</button>
        <button class="parameter txt-white bg-trans" xen="fai filter-stat">Failed</button>
        <button class="parameter txt-white bg-trans" xen="to filter-stat">To be paid</button>
        <button class="parameter txt-white bg-trans" xen="rev filter-stat">Reversed</button>
    </aside>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    const elms = [Xen.xenon('$main'),Xen.xenon('$par1'),Xen.xenon('$par2')];
    const showCat = Xen.xenon('#set-category-btn');
    const showStat = Xen.xenon('#set-staus-btn');
    

    elms[1].bindElement(showCat,'click','both').bindElement(Xen.xenon('.filter-cat'),'click','off').setHxenParams(()=>{
        elms.forEach(e => {
            e.css('display','none');
        });
        elms[1].css('display','block');
        showCat.DOM.lastElementChild.setAttribute('class','fa fa-angle-up txt-ash');
    },()=>{
        elms.forEach(e => {
            e.css('display','none');
        });
        elms[0].css('display','block');
        showCat.DOM.lastElementChild.setAttribute('class','fa fa-angle-down txt-ash')
    }).initState();


    elms[2].bindElement(showStat,'click','both').bindElement(Xen.xenon('.filter-stat'),'click','off').setHxenParams(()=>{
        elms.forEach(e => {
            e.css('display','none');
        });
        elms[2].css('display','block');
        showStat.DOM.lastElementChild.setAttribute('class','fa fa-angle-up txt-ash');
    },()=>{
        elms.forEach(e => {
            e.css('display','none');
        });
        elms[0].css('display','block');
        showStat.DOM.lastElementChild.setAttribute('class','fa fa-angle-down txt-ash')
    }).initState();
</script>
</html>