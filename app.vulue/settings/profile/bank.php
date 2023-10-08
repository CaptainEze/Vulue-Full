<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/bank.css";
    $settingPart = "Bank Details";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <section class="head txt-white">
            <span>Some fields are locked for editing, Please<br/><a href="" style="color:#779;" class="no-decor">Contact us</a> here for assistance</span>
        </section>
        <section class="body">
            <form action="" method="post">
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">Bank Verification Number</span>
                    <input type="number" name="" id="" class="inp bg-trans txt-white" disabled value="1234567890">
                </div>
                <div class="card info flx txt-white">
                    <i class="fa fa-shield"></i>
                    <div class="flx flx-col messg">
                        <p>Why BVN?</p>
                        <p>
                            This is how we verify that transactions are carried out by the real account owner (that's you!). it helps us keep you safe.<br/><br/>Note: Your BVN does not give us access to your bank account(s). Here is what we access:
                        </p>
                    </div>
                </div>
                <div class="items-cont">
                    <div class="flx flx-stretch"><i class="fa fa-user txt-ash"></i><span class="txt-thick txt-white">Your picture</span></div>
                    <div class="flx flx-stretch"><i class="fa fa-id-card txt-ash"></i><span class="txt-thick txt-white">Your full name</span></div>
                    <div class="flx flx-stretch"><i class="fa fa-calendar-alt txt-ash"></i><span class="txt-thick txt-white">Your birth date</span></div>
                </div>
            </form>
        </section>
    </main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
</script>
</html>