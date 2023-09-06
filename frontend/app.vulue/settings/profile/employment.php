<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/personal.css";
    $settingPart = "Employment Info";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <form action="" method="post">
            <p class="hin txt-white">Employer Information</p>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Company Name</span>
                <input type="text" name="" id="" class="inp bg-trans txt-white" value="">
            </div>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Monthly Salary</span>
                <input type="number" name="" id="" class="inp bg-trans txt-white" value="">
            </div>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Date of Employment</span>
                <input type="date" name="" id="" class="inp bg-trans txt-white" value="">
            </div>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Salary per day</span>
                <input type="number" name="" id="" class="inp bg-trans txt-white" value="">
            </div>

            <p class="hin txt-white">Employer Information</p>
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Address of Employer</span>
                <input type="text" name="" id="" class="inp bg-trans txt-white" value="">
            </div>
            <div class="input-elem-cont txt-white">
                <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Select State</span><i class="fas fa-angle-down"></i></button>
            </div>
            <div class="input-elem-cont txt-white">
                <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Select your employment type</span><i class="fas fa-angle-down"></i></button>
            </div>
            <div class="input-elem-cont txt-white">
                <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Select your industry</span><i class="fas fa-angle-down"></i></button>
            </div>

            <div class="flx flx-stretch txt-white finish-cont">
                <span>Save edited changes</span>
                <input type="submit" value="Save Changes" class="bg-blue txt-white brdls">
            </div>
        </form>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>