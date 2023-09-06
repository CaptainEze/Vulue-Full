<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/profile.css";
    $settingPart = "Profile";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <section class="head flx flx-col">
            <div class="flx flx-col txt-white">
                <span class="bg-image-hold usr-avatar" style="width: 6em; height:6em;"></span>
                <button class="edit-prof-pic bg-trans brdls txt-white flx flx-stretch" ><span>Change Profile Picture</span><i class="fa fa-edit"></i></button>
            </div>
        </section>
        <section class="body">
            <ul class="set-cust-list">
                <a href="personal.php" class="txt-white txt-thick no-decor"><li>Personal details</li></a>
                <a href="bank.php" class="txt-white txt-thick no-decor"><li>Bank details</li></a>
                <a href="employment.php" class="txt-white txt-thick no-decor"><li>Employment details</li></a>
                <a href="next-of-kin.php" class="txt-white txt-thick no-decor"><li>Next of kin</li></a>
            </ul>
            
        </section>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>