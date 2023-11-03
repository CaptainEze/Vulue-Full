<?php
    require_once('../../server/config.php');
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../vendors";
    $pathToLocStyle="css/index.css";
    require_once('../../pageComponents/header.php');
    require_once('../../pageComponents/nav.php');
?>
    <main class="first-block-after-header">
        <p class="txt-white txt-bold" id="info1">Our offerings</p>
        <section id="components" class="flx flx-col">
            <div class="offering">
                <span class="link-to"><a href="individuals" class="flx flx-stretch no-decor txt-white"><span>Investment Management<br>For Individual Clients</span> <i class="fa fa-angle-right"></i></a></span>
            </div>
            <div class="offering">
                <span class="link-to"  ><a href="" class="flx flx-stretch no-decor txt-white"><span>For Institutional<br>Clients</span> <i class="fa fa-angle-right"></i></a></span>
            </div>
            <div class="offering">
                <span class="link-to"  ><a href="" class="flx flx-stretch no-decor txt-white"><span>Market<br>Technologies</span> <i class="fa fa-angle-right"></i></a></span>
            </div>

        </section>
    </main>



<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
    
</script>
</html>