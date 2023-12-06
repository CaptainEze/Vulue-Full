<?php
session_start();

require_once('../../config/serverconfig.php');
require_once('../../server/config.php');
require_once('../../classes/process.php');
require_once('../../classes/users.php');
$process = new process;


    
$error = array(
    'nationality' => '',
    'countryOfResidence' => '',
    'stateOfResidence' => '',
    'lgaOfResidence' => '',
    'lgaOfOrigin' => '',
    'bvn' => '',
    'fName' => '', 
    'lName' => '',
    'mName' => '',
    'gender' => '',
    'dob' => '',
    'employmentStatus' => '',
    'address' => ''
);


$errorMin=array('','','');


$loginStatus = $process->verifyLoggedIn();
if ($loginStatus[0]) {
    $loggedIn = $loginStatus[0];
    $usr = $loginStatus[1];
    $id = $_SESSION['user_id'];
    $user = new UserFull($id);
    // check email verification
    if($user->eVerified == 0){
        $_SESSION['verifem'] = $usr;
        $process->redirect("../../auth/register.php?q=ver");
    }
} else {
    $process->destroySession();
    $process->redirect('../../auth/login.php?af=ver');
}


// handling the uploads

// function setError($c){
//     global $error;
//     $error = array()
// }
if(isset($_POST['upload'])){
    $kycStrings['nationality'] = $process->sanitize($_POST['nationality']);
    $kycStrings['countryOfResidence'] = $process->sanitize($_POST['cor']);
    $kycStrings['stateOfResidence'] = $process->sanitize($_POST['sor']);
    $kycStrings['lgaOfResidence'] = $process->sanitize($_POST['lor']);
    $kycStrings['lgaOfOrigin'] = $process->sanitize($_POST['loo']);
    $kycStrings['bvn'] = $process->sanitize($_POST['bvn']);
    $kycStrings['fName'] = $process->sanitize($_POST['first-name']);
    $kycStrings['lName'] = $process->sanitize($_POST['last-name']);
    $kycStrings['mName'] = $process->sanitize($_POST['middle-name']);
    $kycStrings['gender'] = $process->sanitize($_POST['g']);
    $kycStrings['dob'] = $process->sanitize($_POST['dob']);
    $kycStrings['employmentStatus'] = $process->sanitize($_POST['es']);
    $kycStrings['address'] = $process->sanitize($_POST['res-addr']);
    // print_r($kycStrings);
    // test to see if any is empty

    $toContinue = true;
    foreach ($kycStrings as $k => $v) {
        if($k=='mName') continue;

        if($v == '' || $v == ' '){
            $error[$k]='field is required';
            $toContinue = false;
        }
    }
    // print_r($error);
    if($user->accTyp==1){
        $kycStrings['gFName'] = $process->sanitize($_POST['G-first-name']);
        $kycStrings['gLName'] = $process->sanitize($_POST['G-last-name']);
        $kycStrings['gMName'] = $process->sanitize($_POST['G-middle-name']);

        if($kycStrings['gFName'] =='' || $kycStrings['gFName'] ==' '){
            $errorMin[0]=='field is required';
            $toContinue = false;
        } 
        if($kycStrings['gLName'] =='' || $kycStrings['gLName'] ==' '){
            $errorMin[1]=='field is required';
            $toContinue = false;
        } 
        if($kycStrings['gMName'] =='' || $kycStrings['gMName'] ==' '){
            $errorMin[2]=='field is required';
            $toContinue = false;
        } 
    }
    if(!$toContinue){
        
    } else{
        $kycEnroll = $user->updateKyc($kycStrings);
        if($kycEnroll){
            // check if kyc is enrolled
            
        }
        else{
            echo "<script>alert('not done');</script>";
        }
    }






}




require_once('../../server/config.php');
$pageTitle="Complete Onboarding";
$pathToImages="../../assets/images";
$pathToStyles="../../res/styles";
$pathToScripts="../../res/scripts";
$pathToVendors="../../vendors";
$pathToLocStyle="../css/verification.css";
require_once('../../pageComponents/header.php');
require_once('../../pageComponents/nav.php');






?>
    <main class="first-block-after-header">
        <div class="pr-inf flx flx-col">
            <p class="txt-blue-green txt-bold ver-status ver-inf cnnc">Account Verification</p>
            <p class="txt-white txt-thick cl-det cnnc">please complete your profile below</p>
        </div>
        
        <form class="card ver-form" enctype="multipart/form-data" method="post" action="" xen="verifform">
            <!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Nationality</span><i><script>Component.arrowDownFill()</script></i></button> -->
            <span class="error txt-red"><?=$error['nationality']; ?></span>
            <select name="nationality" id="nationality" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="" class="bg-primary">Nationality</option>
                <option value="NG" class="bg-primary">Nigerian</option>
            </select>
            <!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Country of residence</span><i><script>Component.arrowDownFill()</script></i></button> -->
            
            <span class="error txt-red"><?=$error['countryOfResidence']; ?></span>
            <select name="cor" id="cor" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="">Country of residence</option>
                <option value="NG" class="bg-primary">Nigerian</option>

            </select>
            <!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>State of residence</span><i><script>Component.arrowDownFill()</script></i></button> -->
            
            <span class="error txt-red"><?=$error['stateOfResidence']; ?></span>
            <select name="sor" id="sor" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="" class="bg-primary">State of residence</option>
                <option value="rivers" class="bg-primary">Rivers State</option>
            </select>
            <!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>LGA of residence</span><i><script>Component.arrowDownFill()</script></i></button> -->
            
            <span class="error txt-red"><?=$error['lgaOfResidence']; ?></span>
            <select name="lor" id="lor" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="">LGA of residence</option>
                <option value="oyigbo" class="bg-primary">Oyigbo</option>
            </select>
            <!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>LGA of Origin</span><i><script>Component.arrowDownFill()</script></i></button> -->
            
            <span class="error txt-red"><?=$error['lgaOfOrigin']; ?></span>
            <select name="loo" id="loo" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="" class="bg-primary">LGA of Origin</option>
                <option value="oyigbo" class="bg-primary">Oyigbo</option>
            </select>

            <span class="error txt-red"><?=$error['bvn']; ?></span>
            <div class="inp-haul">
                <input type="number" name="bvn" id="bvn-in" class="bg-trans t2-ver-inp txt-white cump" required>
                <p class="custom-placeholder-text txt-white bg-primary">Bank verification number [BVN]</p>
                <a href="#" class="no-decor extra-icon"><script>Component.infoIcon();</script></a>
            </div>
            <span class="error txt-red"><?=$error['fName']; ?></span>
            <div class="inp-haul">
                <input type="text" name="first-name" id="fname" class="bg-trans t2-ver-inp txt-white cump" required>
                <p class="custom-placeholder-text txt-white bg-primary">Legal First Name</p>
            </div>
            <?php
            if($user->accTyp==1){
                echo <<<_END
                <div class="inp-haul">
                    <input type="text" name="G-first-name" id="G-fname" class="bg-trans t2-ver-inp txt-white cump" required>
                    <p class="custom-placeholder-text txt-white bg-primary">Gurdian's Legal First Name</p>
                </div>
                _END;
            }
            ?>
            <span class="error txt-red"><?=$error['lName']; ?></span>
            <div class="inp-haul">
                <input type="text" name="last-name" id="lname" class="bg-trans t2-ver-inp txt-white cump" required>
                <p class="custom-placeholder-text txt-white bg-primary">Legal Last Name</p>
            </div>
            <?php
                if($user->accTyp==1){
                    echo <<<_END
                    <div class="inp-haul">
                        <input type="text" name="G-last-name" id="G-lname" class="bg-trans t2-ver-inp txt-white cump" required>
                        <p class="custom-placeholder-text txt-white bg-primary">Guardian's Legal Last Name</p>
                    </div>
                    _END;
                }
            ?>
            <span class="error txt-red"><?=$error['mName']?></span>
            <div class="inp-haul">
                <input type="text" name="middle-name" id="mname" class="bg-trans t2-ver-inp txt-white">
                <p class="custom-placeholder-text txt-white bg-primary">Middle Name (Optional)</p>
            </div>
            
            <?php
                if($user->accTyp==1){
                    echo <<<_END
                    <div class="inp-haul">
                        <input type="text" name="G-middle-name" id="G-mname" class="bg-trans t2-ver-inp txt-white cump" required>
                        <p class="custom-placeholder-text txt-white bg-primary">Guardian's Middle Name</p>
                    </div>
                    _END;
                }
            ?>
            <!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Gender</span><i><script>Component.arrowDownFill()</script></i></button> -->
            <span class="error txt-red"><?=$error['gender']; ?></span>
            <select name="g" id="g" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="" class="bg-primary">Gender</option>
                <option value="m" class="bg-primary">Male</option>
                <option value="f" class="bg-primary">Female</option>
            </select>
            <span class="error txt-red"><?=$error['dob']; ?></span>
            <div class="inp-haul">
                <input type="date" name="dob" id="dob" class="bg-trans t2-ver-inp txt-white cump" max="" required>
                <p class="custom-placeholder-text txt-white bg-primary">Date of Birth</p>
            </div>
            
            <span class="error txt-red"><?=$error['employmentStatus']; ?></span><!-- <button type="button" class="bg-trans t2-ver-inp txt-white flx flx-stretch"><span>Employment status</span><i><script>Component.arrowDownFill()</script></i></button> -->
            <select name="es" id="es" class="bg-trans t2-ver-inp txt-white flx flx-stretch custm-select cump" required>
                <option value="" class="bg-primary">Employment Status</option>
                <option value="student" class="bg-primary">Student</option>
            </select>
            <span class="error txt-red"><?=$error['address']; ?></span>
            <div class="inp-haul">
                <input type="text" name="res-addr" id="resaddr" class="bg-trans t2-ver-inp txt-white cump" required>
                <p class="custom-placeholder-text txt-white bg-primary">Residential address</p>
            </div>

            <div class="file-input txt-white flx flx-col">
                <div class="head txt-thick">Passport Photograph</div>
                <div class="t2-label">
                    <div class="styled-file-picker flx">
                        <span class="fa-3x"><script>Component.fileIcon()</script></span>
                        <span xen="file-mes-passport">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                    </div>
                    <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker cump" xen="filepicker-passport" required>
                </div>
            </div>

            <div class="file-input txt-white flx flx-col">
                <span class="head txt-thick">Valid Government Issued ID</span>
                <div class="info flx"><script>Component.infoIcon('#fff')</script><span>This includes: -Driver's licencse -International Passport<br/>-Voters card(Temporary or Permanent) -National<br/>Identification Number (NIN) -Residence/Work Permit(For<br/> Foreigners)</span></div>
                <div class="t2-label">
                    <div class="styled-file-picker flx">
                        <span class="fa-3x"><script>Component.fileIcon()</script></span>
                        <span xen="file-mes-giid">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                    </div>
                    <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker cump" xen="filepicker-giid" required>
                </div>
            </div>
            
            <div class="file-input txt-white flx flx-col">
                <span class="head txt-thick">Utility Bill</span>
                <div class="info flx"><script>Component.infoIcon('#fff')</script><span>It is a means of proof of address, cannot be older than 3<br>months (except for rental agreement)<br><br>It includes: •Waste, water, electricity, landline phone,<br>mobile broadband, internet, or cable bills.<br>Rental agreement: a complete and signed rental<br>agreement, containing the rental period.<br>Bank or Credit statement.</span></div>
                <div class="t2-label">
                    <div class="styled-file-picker flx">
                        <span class="fa-3x"><script>Component.fileIcon()</script></span>
                        <span xen="file-mes-utb">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                    </div>
                    <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker cump" xen="filepicker-utb" required>
                </div>
            </div>
            

            <?php
            if($user->accTyp==1){
                echo <<<_END
                <div class="file-input txt-white flx flx-col">
                    <div class="head txt-thick">Date of Birth Certificate</div>
                    <div class="t2-label">
                        <div class="styled-file-picker flx">
                            <span class="fa-3x"><script>Component.fileIcon()</script></span>
                            <span xen="file-mes-birth-cert">Select a file to upload max<br/>5MB [JPEG,PNG,JPG,PDF]</span>
                        </div>
                        <input type="file" name="" id=""  accept=".png, .jpeg, .jpg, .pdf" class="file-picker cump" xen="filepicker-birth-cert" required>
                    </div>
                </div>
                _END;
            }
            ?>
            <input type="hidden" name="upload" value="set">
            <input type="submit" name="" value="Submit" class="submit txt-off-white bg-blue txt-thick" xen="submit">

        </form>
    </main>
    <!-- <aside xen="custom-options-cont" class="glass heavy-glass custom-options-cont">
        <div xen="custom-opts" class="bg-primary flx flx-col opts">
            <select name="" id="">
                <option value="">abc</option>
                <option value="">ceg</option>
            </select>
        </div>
    </aside> -->
</body>
<script src="../../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../../res/scripts/nav.js"></script>
<script>
    // const passportInp = Xen.xenon('#filepicker-passport');
    // const giidInp = Xen.xenon('#filepicker-giid');

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

    // loadOptions();

    fileHandling(Xen.xenon('#filepicker-passport'),Xen.xenon("#file-mes-passport"),5242880,'jpeg,jpg,png,pdf');
    fileHandling(Xen.xenon('#filepicker-giid'),Xen.xenon("#file-mes-giid"),5242880,'jpeg,jpg,png,pdf');
    fileHandling(Xen.xenon('#filepicker-utb'),Xen.xenon("#file-mes-utb"),5242880,'jpeg,jpg,png,pdf');
    <?php
        if($user->accTyp == 1) echo "fileHandling(Xen.xenon('#filepicker-birth-cert'),Xen.xenon('#file-mes-birth-cert'),5242880,'jpeg,jpg,png,pdf');";
    ?>
    
</script>
<script>
    
    const form = Xen.xenon('#verifform');
    const submitBtn = Xen.xenon('#submit');
    let allInp = $('.cump'), toSubmit=true, emptyFields=[];

    // submitBtn.bind('click',()=>{
    //     for(i=0;i<allInp.length;i++){
    //         toSubmit = toSubmit && checkInput(allInp[i]);
    //         // console.log(checkInput(allInp[i]))
    //         if(!checkInput[allInp[i]]) emptyFields[emptyFields.length] = i;
    //     }
    //     console.log(emptyFields)
    //     if(toSubmit){
            
    //     } else{
    //         emptyFields.forEach((e,i) => {
    //             console.log($('.error')[i]);
    //             // $('.error')[i].html('This field is required');
    //             $('.error')[i].html = 'This field is required';
    //         });
    //     }
    // })

    // const checkInput=(obj)=>{
    //     if(obj.val==""||obj.val==" "||obj.val==undefined||obj.val==null) return false;
    //     else return true;
    // }
</script>
</html>
