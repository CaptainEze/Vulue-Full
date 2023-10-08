<?php
    require_once('../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../assets/images";
    $pathToStyles="../../../res/styles";
    $pathToVendors="../../../vendors";
    $pathToLocStyle="css/manage.css";
    $settingPart = "Manage Cards";
    require_once('../components/header.php');
?>
    <main class="first-block-after-header">
        <section class="card-cont flx flx-col">
            <div class="card">
                <div class="head flx flx-stretch">
                    <span class="bg-image-hold"></span>
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
            <div class="card-actions flx flx-stretch">
                <button class="brdls bg-vdark-blue txt-white">Block Card</button>
                <button class="brdls bg-vdark-blue txt-white">Set Limit</button>
            </div>
        </section>

        <section class="card-cont flx flx-col">
            <div class="card">
                <div class="head flx flx-stretch">
                    <span class="bg-image-hold"></span>
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
            <div class="card-actions flx flx-stretch">
                <button class="brdls bg-vdark-blue txt-white" onclick="openCardBlockDialog('23489-888')">Block Card</button>
                <button class="brdls bg-vdark-blue txt-white" onclick="openLimitDialog('400','3000000','23489-888')">Set Limit</button>
            </div>
        </section>
        <div class="add-card-cont">
            <a href="add.php"><button class="bg-blue txt-white brdls txt-thick">Add Card</button></a>
        </div>
    </main>
    <aside class="set-lim glass std-glass txt-white" xen="set-limit">
        <div class="main bg-uvdark-blue">
            <div class="head flx flx-stretch">
                <span class="txt-thick">Set card Limit</span><button class="fa fa-xmark fa-lg bg-trans brdls txt-white" onclick="closeLimitDialog()"></button>
            </div>
            <p class="pre">Set Transaction limit for card <strong xen="limD-card">xxxxxxxxxx</strong></p>
            <div class="setter">
                <p>Minimum Amount</p>
                <input type="number" value="100" class="bg-trans txt-white" xen="limD-min">
                <p>Maximum Amount</p>
                <input type="number" value="1000000" class="bg-trans txt-white" xen="limD-max">
                <div class="flx flx-stretch" style="gap: 1em">
                    <button class="bg-ash brdls txt-white txt-thick" onclick="closeLimitDialog()">Cancel</button>
                    <button class="bg-blue brdls txt-white txt-thick">Save Changes</button>
                </div>  
            </div>
        </div>
    </aside>
    <aside class="block-card glass std-glass txt-white" xen="block-card">
        <div class="main bg-uvdark-blue">
            <div class="head flx flx-stretch">
                <span class="txt-thick">Block card</span><button class="fa fa-xmark fa-lg bg-trans brdls txt-white" onclick="closeCardBlockingDialog()"></button>
            </div>
            <p class="pre">Are you sure you want to block card <strong xen="blockDcard">xxxxxxxxxx</strong> ?</p>
            <div class="setter flx flx-stretch">
                <button class="bg-ash brdls txt-white txt-thick" onclick="closeCardBlockingDialog()">Cancel</button><button class="bg-blue brdls txt-white txt-thick">Block</button>
            </div>
        </div>
    </aside>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
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