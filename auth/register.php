<?php
require_once('../server/config.php');
$pageTitle="Vulue - Signup";
$pathToImages="../assets/images";
$pathToStyles="../res/styles";
$pathToVendors="../../vendors";
$pathToLocStyle="../res/styles/signup.css";
require_once('../pageComponents/header-no-nav.php');
?>
<main id="main" class="main first-block-after-header">
        <div class="pre-form-info" xen="preform first-part">
            <p class="txt-deep-blue txt-thick">Register Below</p>
            <p class="txt-off-white">Register for a free account to save & sync<br/>across devices</p>
            <p><a href="#" class="no-decor">Require an institutional account&#63;</a></p>
        </div>
        <div id="login-form-selection-type-holder" class="flx" xen="form-type-selector first-part">
            <button class="form-selector brdls bg-trans txt-off-white txt-thick select-on" xen="case-ind form-selector">Individual</button>
            <button class="form-selector brdls bg-trans txt-off-white txt-thick" xen="case-min form-selector">Minor</button>
            <button class="form-selector brdls bg-trans txt-off-white txt-thick" xen="case-prof form-selector">Professional</button>
        </div>
        <form class="card glass thin-glass auth-standard-form">
            <section class="form-part1" xen="form1 first-part">
                <input class="txt-field txt-off-white" type="email" placeholder="Email address" maxlength="30" minlength="9" required xen="in-email"/>
                <input class="txt-field txt-off-white" type="text" placeholder="Password" id="password" maxlength="16" minlength="8" required xen="in-pass"/>
                <input class="txt-field txt-off-white" type="text" placeholder="Confirm password" id="cpassword" maxlength="16" minlength="8" required xen="in-cpass"/>

                <div class="call-to-agreemnt flx flx-stretch">
                    <label for="agree" class="txt-off-white agree-container">
                        <input type="checkbox" class="check-bx" id="agree" xen="in-agree" value="off">
                        <span class="checkmark" xen="custom-check-mark"></span>
                    </label>
                    <span class="agr txt-off-white"> I agree with the <a href="#" class="no-decor txt-vlblue">terms and conditions</a></span>
                </div>
                <button type="button" class="submit txt-off-white bg-blue txt-thick" xen="go-next">Create Account</button>
                <div class="flx flx-rw flx-stretch">
                    <span class="txt-off-white">Already have an account&#63;</span>
                    <a href="<?php echo(SITEURL."/auth/login.php");?>" class="no-decor txt-vlblue">Login</a>
                </div>
                <div class="misc txt-off-white txt-thick">
                    <p>Or</p>
                </div>
                <div class="google-auth">
                    <button type="button" class="brdls bg-trans flx flx-rw"><span class="bg-image-hold"></span><span class="txt-off-white txt-thick">Login with Google</span></button>
                </div>
            </section>
            <section class="form-part2" xen="form-part2 second-part">
                <div class="pre-form-info">
                    <p class="txt-deep-blue txt-thick">OTP Verification</p>
                    <p class="txt-off-white">Enter OTP sent to ________@exmail.com</p>
                </div>
                
                <div class="otp-in-container flx flx-stretch">
                    <input type="tel" name="" id="" class="otp-in bg-trans txt-white txt-thick" maxlength="1">
                    <input type="tel" name="" id="" class="otp-in bg-trans txt-white txt-thick" maxlength="1">
                    <input type="tel" name="" id="" class="otp-in bg-trans txt-white txt-thick" maxlength="1">
                    <input type="tel" name="" id="" class="otp-in bg-trans txt-white txt-thick" maxlength="1">
                    <input type="tel" name="" id="" class="otp-in bg-trans txt-white txt-thick" maxlength="1">
                    <input type="tel" name="" id="" class="otp-in bg-trans txt-white txt-thick" maxlength="1">
                </div>

                <div class="resend-container flx flx-stretch">
                    <button type="button" class="bg-trans txt-deep-blue txt-thick" id="resend-otp-btn" xen="req-otp">Resend OTP</button>
                    <span id="resend-otp-countdown" class="txt-off-white" xen="counter">1:00</span>
                </div>
                
                <input type="submit" value="Login" id="create-account-button" class="submit txt-off-white bg-blue txt-thick">
            </section>
        </form>    
    </main>
</body>
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>


<script>
//implementation for form validation
    const firstPartForm = Xen.xenon('.first-part');
    const secondPartForm = Xen.xenon('.second-part');
    const emailInput = Xen.xenon('#in-email');
    const passwordInput = Xen.xenon('#in-pass');
    const cpasswordInput = Xen.xenon('#in-cpass');
    const agreeInput = Xen.xenon('#in-agree');
    const customCheckMark = Xen.xenon('#custom-check-mark');
    let startedFilingCPass = false;
    secondPartForm.css('display','none');

    const pageChangeEvnt = new CustomEvent('pageChangeEvnt',{
        bubbles:true,
        cancelable:true,
        composed:true
    });
    
    const moveNext = ()=>{
        firstPartForm.forEach(el => {
            el.css('display','none');
        });
        secondPartForm.css('display','block');
        secondPartForm.DOM.dispatchEvent(pageChangeEvnt);
    }
    
    
    const cke = ()=>{
        if(!Xen.XenonValidate.validateEmail(emailInput.val())[0]) {
            emailInput.newClass('input-not-valid');
            return false;
        }
        else {
            emailInput.lessClass('input-not-valid');
            return true;
        }
    }
    const ckp = ()=>{
        if(startedFilingCPass) ckcp();
        if(!Xen.XenonValidate.validatePassword(passwordInput.val())[0]){
            passwordInput.newClass('input-not-valid');
            return false;
        }
        else {
            passwordInput.lessClass('input-not-valid');
            return true;
        }
    }
    const ckcp = ()=>{
        if(cpasswordInput.val() != passwordInput.val()){
            cpasswordInput.newClass('input-not-valid');
            return false;
        }
        else{
            cpasswordInput.lessClass('input-not-valid');
            return true;
        }
    }
    const ckag = ()=>{
        if(agreeInput.val()=='on'){
            customCheckMark.lessClass('input-not-valid');
            return true;
        }
        else {
            customCheckMark.newClass('input-not-valid');
            return false;
        }
    }


    emailInput.bind('input',(e)=>{
        cke();
    });
    passwordInput.bind('input',(e)=>{
        ckp();
    });
    cpasswordInput.bind('input',(e)=>{
        startedFilingCPass = true;
        ckcp();
    });
    agreeInput.bind('input',(e)=>{
        //manually changing the state of the checkbox because its not a real one rather it is customized
        if(e.DOM.checked) e.val('on');
        else e.val('off');
        ckag();
    });

    const requestOtp = ()=>{
        //Call ajax here to send email to server.
        //While waiting for response start loader.
        //On response, stop loader and return true.
        //on fail, stop loader and display error message based on the response and return false 
        //For now since I am not done with the server codes I'll just return true.
        return true;
    }

    Xen.xenon('#go-next').bind('click',()=>{
        if(cke() && ckp() && ckcp() && ckag()){
            if(requestOtp()) moveNext();
        }
    });


    //Otp countdown handle
    const counter = Xen.xenon('#counter');
    const reqNewOtp = Xen.xenon('#req-otp');

    const disableOtpBtn =()=>{
        reqNewOtp.unbind('click',(e)=>{
            if(requestOtp()) startCountDown();
        }).css('color','#888').DOM.disabled=true;

    }
    const enableOtpBtn =()=>{
        reqNewOtp.bind('click',()=>{
            if(requestOtp()) startCountDown();
        }).css('color','blue').DOM.disabled=false;
    }
    
    const startCountDown = ()=>{
        disableOtpBtn();
        let initTime = 60;
        let counting = setInterval(()=>{
            if(initTime>0){
                --initTime;
                if(initTime>9) counter.html(`0:${initTime}`);
                else counter.html(`0:0${initTime}`)
            }
            else{
                clearInterval(counting);
                enableOtpBtn();
            }
        },1000)
    }
    secondPartForm.bind('pageChangeEvnt',startCountDown);
</script>
<script src="../res/scripts/authReqHandler.js"></script>
</html>