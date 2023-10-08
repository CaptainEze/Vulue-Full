<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/personal.css";
    $settingPart = "Next of Kin Info";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <form action="" method="post">
            <p class="hin txt-white">Next of Kin Information</p>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Full Name</span>
                <input type="text" name="" id="" class="inp bg-trans txt-white" value="">
            </div>
            <div class="input-elem-cont txt-white">
                <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Next of Kin relationship</span><i class="fas fa-angle-down"></i></button>
            </div>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Phone Number</span>
                <input type="tel" name="" id="" class="inp bg-trans txt-white" value="">
            </div>

            <p class="hin txt-white">Next of Kin Address</p>
            
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Address</span>
                <input type="text" name="" id="" class="inp bg-trans txt-white" value="">
            </div>
            <div class="input-elem-cont txt-white">
                <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Select State</span><i class="fas fa-angle-down"></i></button>
            </div>

            <div class="flx flx-stretch txt-white finish-cont">
                <span>Save edited changes</span>
                <input type="submit" value="Save Changes" class="bg-blue txt-white brdls">
            </div>
        </form>
    </main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>