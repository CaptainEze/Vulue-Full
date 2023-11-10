<?php
session_start();
require_once('../server/config.php');
$pageTitle = "Vulue - Signup";
$pathToImages = "../assets/images";
$pathToStyles = "../res/styles";
$pathToVendors = "../../vendors";
$pathToLocStyle = "../res/styles/signup.css";
require_once('../pageComponents/header-no-nav.php');
?>
<main id="main" class="main first-block-after-header">
    <div class="pre-form-info" xen="preform first-part">
        <p class="txt-deep-blue txt-thick">Register Below</p>
        <p class="txt-off-white">Register for a free account to save & sync<br />across devices</p>
        <p><a href="#" class="no-decor">Require an institutional account&#63;</a></p>
    </div>
    <div id="login-form-selection-type-holder" class="flx" xen="form-type-selector first-part">
        <button class="form-selector brdls bg-trans txt-off-white txt-thick" xen="case-ind form-selector">Individual</button>
        <button class="form-selector brdls bg-trans txt-off-white txt-thick" xen="case-min form-selector">Minor</button>
        <button class="form-selector brdls bg-trans txt-off-white txt-thick" xen="case-prof form-selector">Professional</button>
    </div>
    <div id="reg-info" class="txt-white" xen="reg-info first-part">
        This account type is for more advanced clients with greater experience in finance and investing professionally. These accounts are tailored more to affluent clients.
    </div>
    <form class="card glass thin-glass auth-standard-form">
        <section class="form-part1" xen="form1 first-part">
            <input class="txt-field txt-off-white" type="email" placeholder="Email address" maxlength="30" mipnlength="9" required xen="in-email" autocomplete="email" />
            <p class="log txt-red" xen="em-log"></p>
            <input class="txt-field txt-off-white" type="text" placeholder="Password" id="password" maxlength="16" minlength="8" required xen="in-pass" autocomplete="new-password" />
            <input class="txt-field txt-off-white" type="text" placeholder="Confirm password" id="cpassword" maxlength="16" minlength="8" required xen="in-cpass" autocomplete="off" />
            <p class="log txt-red" xen="cpas-log"></p>

            <div class="call-to-agreemnt flx flx-stretch">
                <label for="agree" class="txt-off-white agree-container">
                    <input type="checkbox" class="check-bx" id="agree" xen="in-agree" value="off">
                    <span class="checkmark" xen="custom-check-mark"></span>
                </label>
                <span class="agr txt-off-white"> I agree with the <a href="#" class="no-decor txt-vlblue">terms and conditions</a></span>
            </div>
            <p class="log txt-red err" xen="err-log"></p>
            <button type="button" class="submit txt-off-white bg-blue txt-thick" xen="go-next">Create Account</button>
            <div class="flx flx-rw flx-stretch">
                <span class="txt-off-white">Already have an account&#63;</span>
                <a href="<?php echo (SITEURL . "/auth/login.php"); ?>" class="no-decor txt-vlblue">Login</a>
            </div>
            <div class="misc txt-off-white txt-thick">
                <p class="bg-primary">Or</p>
            </div>
            <div class="google-auth">
                <button type="button" class="brdls bg-trans flx flx-rw"><span class="bg-image-hold"></span><span class="txt-off-white txt-thick">Login with Google</span></button>
            </div>
        </section>
        <section class="form-part2" xen="form-part2 second-part">
            <div class="pre-form-info">
                <p class="txt-deep-blue txt-thick">OTP Verification</p>
                <p class="txt-off-white">Enter OTP sent to <span xen="hint-email"></span></p>
            </div>

            <div class="otp-in-container otp-input flx flx-stretch">
                <input type="number" id="digit-1" maxlength="1" class="otp-in bg-trans txt-white txt-thick">
                <input type="number" id="digit-2" maxlength="1" class="otp-in bg-trans txt-white txt-thick">
                <input type="number" id="digit-3" maxlength="1" class="otp-in bg-trans txt-white txt-thick">
                <input type="number" id="digit-4" maxlength="1" class="otp-in bg-trans txt-white txt-thick">
                <input type="number" id="digit-5" maxlength="1" class="otp-in bg-trans txt-white txt-thick">
                <input type="number" id="digit-6" maxlength="1" class="otp-in bg-trans txt-white txt-thick">
                <script>
                    const otpInputs = document.querySelectorAll('.otp-input input');
                    const verifyBtn = document.getElementById('verify-btn');

                    otpInputs.forEach((input, index) => {
                        input.addEventListener('input', (e) => {
                            if (e.inputType === 'deleteContentBackward' && index > 0) {
                                otpInputs[index - 1].focus();
                            } else if (index < otpInputs.length - 1 && input.value) {
                                otpInputs[index].setAttribute('class', 'otp-in bg-trans txt-white txt-thick');
                                otpInputs[index + 1].focus();
                            }
                        });

                        input.addEventListener('keyup', (e) => {
                            if (e.keyCode === 8 && index > 0) {
                                otpInputs[index - 1].focus();
                            }
                        });
                    });
                </script>
            </div>

            <div class="resend-container flx flx-stretch">
                <button type="button" class="bg-trans txt-deep-blue txt-thick brdls" id="resend-otp-btn" xen="req-otp">Resend OTP</button>
                <span id="resend-otp-countdown" class="txt-off-white" xen="counter">1:00</span>
            </div>

            <button type="button" id="create-account-button" class="submit txt-off-white bg-blue txt-thick" xen="main-submit">Verify</button>
        </section>
    </form>
</main>
</body>
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../res/scripts/formLog.js"></script>

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
    secondPartForm.css('display', 'none');
    var accType = 0, GlobalEmail;

    const pageChangeEvnt = new CustomEvent('pageChangeEvnt', {
        bubbles: true,
        cancelable: true,
        composed: true
    });

    const moveNext = (_hintText) => {
        firstPartForm.forEach(el => {
            el.css('display', 'none');
        });
        secondPartForm.css('display', 'block');
        Xen.xenon('#hint-email').html(_hintText)
        secondPartForm.DOM.dispatchEvent(pageChangeEvnt);
    }


    const cke = () => {
        if (!Xen.XenonValidate.validateEmail(emailInput.val())[0]) {
            emailInput.newClass('input-not-valid');
            return false;
        } else {
            emailInput.lessClass('input-not-valid');
            return true;
        }
    }
    const ckp = () => {
        if (startedFilingCPass) ckcp();
        if (!Xen.XenonValidate.validatePassword(passwordInput.val())[0]) {
            passwordInput.newClass('input-not-valid');
            return false;
        } else {
            passwordInput.lessClass('input-not-valid');
            return true;
        }
    }
    const ckcp = () => {
        if (cpasswordInput.val() != passwordInput.val()) {
            cpasswordInput.newClass('input-not-valid');
            return false;
        } else {
            cpasswordInput.lessClass('input-not-valid');
            return true;
        }
    }
    const ckag = () => {
        if (agreeInput.val() == 'on') {
            customCheckMark.lessClass('input-not-valid');
            return true;
        } else {
            customCheckMark.newClass('input-not-valid');
            return false;
        }
    }


    emailInput.bind('input', (e) => {
        cke();
    });
    passwordInput.bind('input', (e) => {
        ckp();
    });
    cpasswordInput.bind('input', (e) => {
        startedFilingCPass = true;
        ckcp();
    });
    agreeInput.bind('input', (e) => {
        //manually changing the state of the checkbox because its not a real one rather it is customized
        if (e.DOM.checked) e.val('on');
        else e.val('off');
        ckag();
    });

    const launchRegister = () => {
        let formData = {
            'email': emailInput.val(),
            'pass': passwordInput.val(),
            'cpass': cpasswordInput.val(),
            'accType': accType
        }
        $.ajax({
                url: '../server/php/handleRequest.php?_mode=user-register',
                type: 'POST',
                dataType: 'json',
                data: formData
            })
            .done(function(response) {
                // load();
                if (response.input == "email" && response.status == 0) {
                    // log(response.message, 0);
                    tempFormLog(Xen.xenon('#em-log'),response.message,2000);
                } else if (response.input == "cpassword" && response.status == 0) {
                    tempFormLog(Xen.xenon('#cpas-log'),response.message,2000);
                } else if (response.input == "all" && response.status == 0) {
                    // log(response.message, 0);
                    tempFormLog(Xen.xenon('#err-log'),response.message,2000);
                } else if (response.input == "details" && response.status == 1) {
                    // success
                    // log('Registeration success please wait', 1);
                    requestOtp();

                } else {
                    // log('please check what you are doing', 0);
                    tempFormLog(Xen.xenon('#err-log'),response.message,2000);
                }
            }).fail(function(error) {
                // load()
                // console.log(error);
                // log('An error occured please try again', 0);
                tempFormLog(Xen.xenon('#err-log'),response.message,2000);
                return;
            });
    }

    const requestOtp = (_em = "eim") => {
        //Call ajax here to send email to server.
        //While waiting for response start loader.
        //On response, stop loader and return true.
        //on fail, stop loader and display error message based on the response and return false 
        //For now since I am not done with the server codes I'll just return true.
        // return true;
        GlobalEmail = _em == "eim"?emailInput.val():_em;
        // console.log(email);
        let _data = {
            'email': GlobalEmail
        }
        $.ajax({
            url: '../server/php/handleRequest.php?_mode=otp-resend',
            type: 'POST',
            dataType: 'json',
            data: _data
        }).done(function(response) {
            console.log(response);
            if (response.status == 1) {
                moveNext(GlobalEmail);
                return true;
            } else if (response.status == 0) {
                startCountDown();
            } else {
                console.log('An error occured please try again', 0);
            }
        }).fail(function(error) {
            // load(0);
            console.log(error);
            console.log('An error occured please try again', 0);
            return false;
        });
    }


    <?php 
        if(isset($_GET['q']) && isset($_SESSION['verifem'])){
            $_em = $_SESSION['verifem'];
            echo "requestOtp('$_em')";
        }
    ?>
    



    Xen.xenon('#go-next').bind('click', () => {
        if (cke() && ckp() && ckcp() && ckag()) {
            // perform registration
            launchRegister();
        }
    });

    //Otp countdown handle
    const counter = Xen.xenon('#counter');
    const reqNewOtp = Xen.xenon('#req-otp');

    const disableOtpBtn = () => {
        reqNewOtp.unbind('click', (e) => {
            if (requestOtp()) startCountDown();
        }).css('color', '#888').DOM.disabled = true;

    }
    const enableOtpBtn = () => {
        reqNewOtp.bind('click', () => {
            if (requestOtp()) startCountDown();
        }).css('color', 'blue').DOM.disabled = false;
    }

    const startCountDown = () => {
        disableOtpBtn();
        let initTime = 60;
        let counting = setInterval(() => {
            if (initTime > 0) {
                --initTime;
                if (initTime > 9) counter.html(`0:${initTime}`);
                else counter.html(`0:0${initTime}`)
            } else {
                clearInterval(counting);
                enableOtpBtn();
            }
        }, 1000)
    }
    secondPartForm.bind('pageChangeEvnt', startCountDown);
</script>

<script>
    const regInf = Xen.xenon('#reg-info');
    const regTypeSelector = Xen.xenon('.form-selector');

    const switchRegType = (_typ) => {
        regTypeSelector.forEach(el => {
            el.lessClass('select-on');
        });
        regInf.html('').css('display', 'none');
        accType = _typ;
        switch (_typ) {
            case 0:
                regTypeSelector[0].newClass('select-on');
                break;
            case 1:
                regTypeSelector[1].newClass('select-on');
                regInf.html('This account type is for intending clients below 18 years of age. A guardian must please complete your profile below.').css('display', 'block');
                break;
            case 2:
                regTypeSelector[2].newClass('select-on');
                regInf.html('This account type is for more advanced clients with greater experience in finance and investing professionally. These accounts are tailored more to affluent clients.').css('display', 'block');
                break;
        }
    }
    for (let i = 0; i < regTypeSelector.length; i++) {
        regTypeSelector[i].bind('click', () => {
            switchRegType(i);
        });
    }
    switchRegType(0);
</script>
<script>
    const rejectOtp = (_em = 3456) => {
        if (_em == 3456) {
            $('.otp-in').addClass('otp-reject');
            setTimeout(() => {
                $('.otp-in').removeClass('otp-reject').val('');
            }, 1000);
        } else {
            $(`#digit-${_em}`).addClass('otp-reject');
        }
    }

    Xen.xenon('#main-submit').bind('click', () => {
        let code = $('#digit-1').val() + $('#digit-2').val() + $('#digit-3').val() + $('#digit-4').val() + $('#digit-5').val() + $('#digit-6').val();
        if (code.length != 6) {
            rejectOtp(code.length + 1);
            return;
        }
        // load();
        let _data = {
            'code': code,
            'email': GlobalEmail
        }
        $.ajax({
            url: '../server/php/handleRequest.php?_mode=otp-ver',
            type: 'POST',
            dataType: 'json',
            data: _data
        }).done(function(response) {
            // load(0);
            if (response.status == 0) {
                console.log(response.message, 0);
                rejectOtp();
            } else if (response.status == 1) {
                console.log(response.message, 1);
                // success
                // take to verification
                window.location.href='../app.vulue/verification/tier1.php?';

            } else {
                console.log('An error occured please try again', 0);
                rejectOtp();
            }
        }).fail(function(error) {
            // load(0);
            console.log(error);
            console.log('An error occured please try again', 0);
            return;
        });
    })
</script>
<script src="../res/scripts/authReqHandler.js"></script>

</html>