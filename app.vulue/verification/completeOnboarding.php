<?php
require_once('../../server/config.php');
$pageTitle="Tier 2 verification - Vulue";
$pathToImages="../../assets/images";
$pathToStyles="../../res/styles";
$pathToVendors="../../vendors";
$pathToLocStyle="../css/verification.css";
require_once('../../pageComponents/header.php');
require_once('../../pageComponents/nav.php');

?>
    <main class="first-block-after-header">
        <p class="txt-deep-blue txt-bold ver-status ver-inf">Onboarding</p>
        <p class="txt-white txt-thick cl-det">please complete your profile below</p>
        
        <form class="card glass thin-glass ver-form " enctype="multipart/form-data">
            <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Country of residence</span><i class="fas fa-angle-down"></i></button>
            <input type="number" name="bvn" id="bvn-in" class="bg-trans t2-ver-inp txt-white" placeholder="Enter bank verification number [BVN]" >
            <input type="text" name="first-name" id="fname" class="bg-trans t2-ver-inp txt-white" placeholder="Legal First Name">
            <input type="text" name="middle-name" id="mname" class="bg-trans t2-ver-inp txt-white" placeholder="Middle Name">
            <input type="text" name="last-name" id="lname" class="bg-trans t2-ver-inp txt-white" placeholder="Legal Last Name">
            <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Gender</span><i class="fas fa-angle-down"></i></button>
            <input type="date" name="dob" id="dob" class="bg-trans t2-ver-inp txt-white" max="">
            <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Employment status</span><i class="fas fa-angle-down"></i></button>
            <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>State of origin</span><i class="fas fa-angle-down"></i></button>
            <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>LGA of origin</span><i class="fas fa-angle-down"></i></button>
            <input type="text" name="res-addr" id="resaddr" class="bg-trans t2-ver-inp txt-white" placeholder="Residential address">

            <div class="file-input txt-white flx flx-col">
                <div class="head txt-thick">Passport Photograph</div>
                <div class="t2-label">
                    <div class="styled-file-picker flx flx-stretch">
                        <span class="fa fa-file fa-3x"></span>
                        <span xen="file-mes-passport">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                    </div>
                    <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker" xen="filepicker-passport">
                </div>
            </div>

            <div class="file-input txt-white flx flx-col">
                <span class="head txt-thick">Valid Government Issued ID</span>
                <div class="info flx"><i class="fa fa-info-circle"></i><span>This includes: -Driver's licencse -International Passport<br/>-Voters card(Temporary or Permanent) -National<br/>Identification Number (NIN) -Residence/Work Permit(For<br/> Foreigners)</span></div>
                <div class="t2-label">
                    <div class="styled-file-picker flx flx-stretch">
                        <span class="fa fa-file fa-3x"></span>
                        <span xen="file-mes-giid">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                    </div>
                    <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker" xen="filepicker-giid">
                </div>
            </div>

            <div class="file-input txt-white flx flx-col">
                <div class="head txt-thick">Date of Birth Certificate</div>
                <div class="t2-label">
                    <div class="styled-file-picker flx flx-stretch">
                        <span class="fa fa-file fa-3x"></span>
                        <span xen="file-mes-birth-cert">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                    </div>
                    <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker" xen="filepicker-birth-cert">
                </div>
            </div>

            <input type="submit" value="Submit" class="submit txt-off-white bg-blue txt-thick">

        </form>
    </main>
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
    const passportInp = Xen.xenon('#filepicker-passport');
    const giidInp = Xen.xenon('#filepicker-giid');

    const fileHandling = (obj,mes,max,typ)=>{
        obj.bind('change',(e)=>{
            if(e.DOM.files.length == 1){
                let fileProps=e.DOM.files[0];
                if(Xen.XenonValidate.validteFileType(fileProps['name'],typ)){
                    if(fileProps['size']<=max){
                        mes.html(`${fileProps['name']} <br/> Click to reselect`);
                        return;
                    }
                    else{
                        mes.html('Select a file to upload <i class="txt-white-red" >max<br/>5MB</i>[JPEG,PNG,JPG,PDF]')
                        e.val("");
                        return;
                    }
                }
                else{
                    mes.html('Select a file to upload max<br/>5MB<i class="txt-white-red"> [JPEG,PNG,JPG,PDF]</i>')
                        e.val("");
                        return;
                }
            }
            e.val("");
            return;
        })
    }
    fileHandling(Xen.xenon('#filepicker-passport'),Xen.xenon("#file-mes-passport"),5242880,'jpeg,jpg,png,pdf');
    fileHandling(Xen.xenon('#filepicker-giid'),Xen.xenon("#file-mes-giid"),5242880,'jpeg,jpg,png,pdf');
    fileHandling(Xen.xenon('#filepicker-birth-cert'),Xen.xenon('#file-mes-birth-cert'),5242880,'jpeg,jpg,png,pdf');
</script>
</html>