<?php
require_once('../server/config.php');
$pageTitle="Vulue - Signup";
$pathToImages="../assets/images";
$pathToStyles="../res/styles";
$pathToVendors="../../vendors";
$pathToLocStyle="../res/styles/login.css";
require_once('../pageComponents/header-no-nav.php');
?>
<main id="main" class="first-block-after-header">
        <div class="pre-form-info txt-white txt-thick">
            <p class="">Login to account</p>
            <p class="">Provide details to get started below</p>
        </div>
        <form action="" method="post" class="card glass thin-glass auth-standard-form">
            <input class="txt-field txt-off-white" type="email" placeholder="Enter Your Username/Email" maxlength="30" minlength="9" required/>
            <div class="form-single-input-cont">
                <input class="txt-field txt-off-white" type="password" placeholder="Enter Your Password" id="password" maxlength="16" minlength="8" required hxen="dum1 p1"/>
                <button type="button" class="fa fa-regular fa-eye-slash bg-trans brdls txt-off-white" id="pass-hide" xen="cp1"></button>
            </div>
            <div>
                <a href="#" class="no-decor txt-vlblue">Forgot Password&#63;</a>
            </div>
            <input type="submit" value="Login" class="submit txt-off-white bg-blue txt-thick">
            <div class="flx flx-rw flx-stretch">
                <span class="txt-off-white">Don&#x27;t have an account&#63;</span>
                <a href="<?php echo(SITEURL."/auth/register.php");?>" class="no-decor txt-vlblue">Signup</a>
            </div>
            <div class="misc txt-off-white txt-thick">
                <p>Or</p>
            </div>
            <div class="google-auth">
                <button type="button" class="brdls bg-trans flx flx-rw"><span class="bg-image-hold"></span><span class="txt-off-white txt-thick">Login with Google</span></button>
            </div>
        </form>
    </main>
</body>
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script src="../res/scripts/passInpTgl.js"></script>

</html>