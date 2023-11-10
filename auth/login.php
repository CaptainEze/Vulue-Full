<?php
require_once('../server/config.php');
$pageTitle = "Vulue - Signup";
$pathToImages = "../assets/images";
$pathToStyles = "../res/styles";
$pathToVendors = "../../vendors";
$pathToLocStyle = "../res/styles/login.css";
require_once('../pageComponents/header-no-nav.php');
if(isset($_GET['af'])){
    
    switch ($_GET['af']) {
        case 'ver':
            $nextTo = "../app.vulue/verification/completeOnboarding.php";
            break;
        
        default:
            $nextTo = "../app.vulue/dashboard";
            break;
    } 
} else{
    $nextTo = "../app.vulue/dashboard";
}
?>
<main id="main" class="first-block-after-header">
    <div class="pre-form-info txt-white txt-thick">
        <p class="">Login to account</p>
        <p class="">Provide details to get started below</p>
    </div>
    <form action="" method="post" class="card glass thin-glass auth-standard-form">
        <input class="txt-field txt-off-white" type="email" placeholder="Enter Your Username/Email" maxlength="30" minlength="9" required xen="in-email" />
        <div class="form-single-input-cont">
            <input class="txt-field txt-off-white" type="password" placeholder="Enter Your Password" id="password" maxlength="16" minlength="8" required hxen="in-pass p1" />
            <button type="button" class="fa fa-regular fa-eye-slash bg-trans brdls txt-off-white" id="pass-hide" xen="cp1"></button>
        </div>
        <div>
            <a href="#" class="no-decor txt-vlblue">Forgot Password&#63;</a>
        </div>
        <p class="log txt-red err" xen="err-log"></p>
        <button type="button" class="submit txt-off-white bg-blue txt-thick" xen="login-btn">Login</button>
        <div class="flx flx-rw flx-stretch">
            <span class="txt-off-white">Don&#x27;t have an account&#63;</span>
            <a href="<?php echo (SITEURL . "/auth/register.php"); ?>" class="no-decor txt-vlblue">Signup</a>
        </div>
        <div class="misc txt-off-white txt-thick">
            <p class="bg-primary">Or</p>
        </div>
        <div class="google-auth">
            <button type="button" class="brdls bg-trans flx flx-rw"><span class="bg-image-hold"></span><span class="txt-off-white txt-thick">Login with Google</span></button>
        </div>
    </form>
</main>
</body>
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../res/scripts/passInpTgl.js"></script>
<script src="../res/scripts/formLog.js"></script>
<script>
    const emailInput = Xen.xenon('#in-email');
    const passwordInput = Xen.xenon('#in-pass');

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
        if (!Xen.XenonValidate.validatePassword(passwordInput.val())[0]) {
            passwordInput.newClass('input-not-valid');
            return false;
        } else {
            passwordInput.lessClass('input-not-valid');
            return true;
        }
    }

    emailInput.bind('input', (e) => {
        cke();
    });
    passwordInput.bind('input', (e) => {
        ckp();
    });



    const launchLogin = () => {
        let formData = {
            'email': emailInput.val(),
            'pass': passwordInput.val()
        }
        $.ajax({
                url: '../server/php/handleRequest.php?_mode=user-login',
                type: 'POST',
                dataType: 'json',
                data: formData
            })
            .done(function(response) {
                // load(0);
                console.log(response);
                if (response.input == "email" && response.status == 0) {
                    // log(response.message, 0);
                    tempFormLog(Xen.xenon('#err-log'),response.message,2000);
                } else if (response.input == "password" && response.status == 0) {
                    // log(response.message, 0);
                    tempFormLog(Xen.xenon('#err-log'),response.message,2000);
                } else if (response.input == "details" && response.status == 1) {
                    // log(response.message, 1);
                    // success
                    window.location.href = "<?php echo $nextTo; ?>";

                } else {
                    // log('An error occured please try again', 0);
                    tempFormLog(Xen.xenon('#err-log'),response.message,2000);
                }
            }).fail(function(error) {
                // load(0)
                console.log(error);
                // log('An error occured please try again', 0);
                return;
            });
    }

    Xen.xenon('#login-btn').bind('click', () => {
        if (cke() && ckp()) {
            launchLogin();
        }
    })
</script>

</html>