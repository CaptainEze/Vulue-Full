<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/add.css";
    $settingPart = "Add a new card";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header txt-white">
        <p class="txt-white">Please add a new payment card, please note that your card may be charged a one time fee of ₦50.00</p>
        <form action="" method="post">
            <div class="input-elem-cont txt-white">
                <span class="bg-primary extra-item">Card Number</span>
                <span class="fa-regular fa-credit-card fa-lg extra-item txt-ash"></span>
                <input type="number" name="" id="" class="inp bg-trans txt-white">
            </div>
            <div class="flx flx-row">
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">MM/YY</span>
                    <input type="text" name="" id="" class="inp bg-trans txt-white">
                </div>
                <div class="input-elem-cont txt-white">
                    <span class="bg-primary extra-item">CVV</span>
                    <input type="number" name="" id="" class="inp bg-trans txt-white">
                </div>
            </div>
            <div class="end">
                <button type="submit" class="submit txt-off-white bg-ash txt-thick" disabled><i class="fa fa-lock"></i> Securely pay ₦50.00</button>
                <p class="post">Your card details are secured using world-class<br/>encryption software.</p>
            </div>
        </form>
    </main>
    
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    const limitDialog = Xen.xenon('#set-limit');
    const blockCardDialog = Xen.xenon('#block-card');
    const openLimitDialog = (low,high,cardNum) =>{
        Xen.xenon('#limD-card').html(cardNum);
        Xen.xenon('#limD-min').val(low);
        Xen.xenon('#limD-max').val(high);
        limitDialog.css('display','block');
    }
    const closeLimitDialog = ()=>{
        limitDialog.css('display','none');
    }
    const openCardBlockDialog = (cardNum) =>{
        Xen.xenon('#blockDcard').html(cardNum);
        blockCardDialog.css('display','block');
    }
    const closeCardBlockingDialog = () =>{
        blockCardDialog.css('display','none');
    }
</script>
</html>