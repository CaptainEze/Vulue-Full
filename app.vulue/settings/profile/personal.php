<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/personal.css";
    $settingPart = "Personal Info";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <section class="head flx flx-stretch txt-white">
            <span class="hin">Personal information</span>
            <span>Some fields are locked for editing, Please<br/><a href="" style="color:#779;" class="no-decor">Contact us</a> here for assistance</span>
        </section>
        <section class="body">
            <form action="" method="post">
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">First Name</span>
                    <span class="fa fa-lock fa-lg extra-item txt-ash"></span>
                    <input type="text" name="" id="" class="inp bg-trans txt-white" value="Max" disabled>
                </div>
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">Last Name</span>
                    <span class="fa fa-lock fa-lg extra-item txt-ash"></span>
                    <input type="text" name="" id="" class="inp bg-trans txt-white" value="John" disabled>
                </div>
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">E-mail Address</span>
                    <input type="email" name="" id="" class="inp bg-trans txt-white" value="">
                </div>
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">Phone Number</span>
                    <input type="tel" name="" id="" class="inp bg-trans txt-white" value="">
                </div>
                <div class="input-elem-cont txt-white">
                    <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Gender</span><i class="fas fa-angle-down"></i></button>
                </div>
                <div class="input-elem-cont txt-white">
                    <button type="button" name="" id="" class="inp bg-trans txt-white flx flx-stretch"><span>Marital Status</span><i class="fas fa-angle-down"></i></button>
                </div>
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">Number of Children</span>
                    <input type="number" name="" id="" class="inp bg-trans txt-white" value="">
                </div>
                <p class="hin txt-white">Address Information</p>
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">House Address</span>
                    <input type="text" name="" id="" class="inp bg-trans txt-white" value="">
                    
                </div>

                <div class="flx flx-stretch txt-white finish-cont">
                    <span>Save edited changes</span>
                    <input type="submit" value="Save Changes" class="bg-blue txt-white brdls">
                </div>
            </form>
        </section>
    </main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>