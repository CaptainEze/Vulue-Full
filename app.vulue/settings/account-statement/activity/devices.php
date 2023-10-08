<?php
    require_once('../../../../server/config.php');
    $pageTitle="Your Settings - Vulue";
    $pathToImages="../../../../assets/images";
    $pathToStyles="../../../../res/styles";
    $pathToVendors="../../../../vendors";
    $pathToLocStyle="css/devices.css";
    $settingPart = "";
    $pathToComps = "../../components";
    require_once('../../components/header.php');
?>
    <main class="first-block-after-header">
        <span class="state">
            <button class="fa fa-edit brdls bg-trans txt-white fa-lg edit" xen="edit"></button>
            <button class="bg-blue brdls txt-white delete" xen="save">Done</button>
        </span>

        <div class="txt-white head txt-thick">
            <p>Devices</p>
            <p>These are the devices currently allowed to access your account</p>
        </div>
        <div class="main-devices">
            <div class="device txt-white txt-thick" xen="dev1">
                <span class="l flx"><i class="fa fa-mobile txt-ash"></i><span>Infinix HOT 30</span></span>
                <button class="fa fa-trash fa-lg txt-deep-blue brdls bg-trans r" xen="del1 del"></button>
                <span class="l">Date:</span>
                <span class="r">11/08/2023 - 09:45:34</span>
                <span class="l">Location:</span>
                <span class="r">Port Hacourt, Nigeria</span>
                <span class="l">IP:</span>
                <span class="r">123.456.78.910</span>
            </div>

            <div class="device txt-white txt-thick" xen="dev2">
                <span class="l flx"><i class="fa fa-mobile txt-ash"></i><span>Infinix HOT 30</span></span>
                <button class="fa fa-trash fa-lg txt-deep-blue brdls bg-trans r" xen="del2 del"></button>
                <span class="l">Date:</span>
                <span class="r">11/08/2023 - 09:45:34</span>
                <span class="l">Location:</span>
                <span class="r">Port Hacourt, Nigeria</span>
                <span class="l">IP:</span>
                <span class="r">123.456.78.910</span>
            </div>

            <div class="device txt-white txt-thick" xen="dev3">
                <span class="l flx"><i class="fa fa-mobile txt-ash"></i><span>Infinix HOT 30</span></span>
                <button class="fa fa-trash fa-lg txt-deep-blue brdls bg-trans r" xen="del3 del"></button>
                <span class="l">Date:</span>
                <span class="r">11/08/2023 - 09:45:34</span>
                <span class="l">Location:</span>
                <span class="r">Port Hacourt, Nigeria</span>
                <span class="l">IP:</span>
                <span class="r">123.456.78.910</span>
            </div>

            <div class="device txt-white txt-thick" xen="dev4">
                <span class="l flx"><i class="fa fa-mobile txt-ash"></i><span>Infinix HOT 30</span></span>
                <button class="fa fa-trash fa-lg txt-deep-blue brdls bg-trans r" xen="del4 del"></button>
                <span class="l">Date:</span>
                <span class="r">11/08/2023 - 09:45:34</span>
                <span class="l">Location:</span>
                <span class="r">Port Hacourt, Nigeria</span>
                <span class="l">IP:</span>
                <span class="r">123.456.78.910</span>
            </div>
        </div>
    </main>
</body>
<script src="../../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    const _alEl=Xen.xenon('.del');

    Xen.xenon('#edit').bind('click',(e)=>{
        e.css('display','none');
        _alEl.forEach(el =>{
            el.css('visibility','visible');
        });
        Xen.xenon('#save').css('display','inline').bind('click',(e)=>{
            //do ajax to update devices
            e.css('display','none').DOM.previousElementSibling.style.display='inline';
            _alEl.forEach(el =>{
                el.css('visibility','hidden');
            });
            
        });
    })

    _alEl.forEach(el => {
        el.css('visibility','hidden').bind('click',(e)=>{
            Xen.xenon(`#dev${_alEl.indexOf(el)+1}`).css('display','none'); 
        })
    });
</script>
</html>