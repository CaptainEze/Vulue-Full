<?php
    require_once('../../server/config.php');
    $pageTitle="Dashboard";
    $pathToImages="../../assets/images";
    $pathToStyles="../../res/styles";
    $pathToVendors="../../vendors";
    $pathToLocStyle="css/transact.css";
    $dashPart = "Withdraw";
    if (isset($_GET['state'])) {
        $mes = 'Your deposit of <i class="fa fa-naira-sign"></i>10,000 into your Vulue<br>account has been recieved';
        $state = $_GET['state'];
    }else {
        echo <<<_END
        <script>alert("danger");</script>
        _END;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($pageTitle); ?></title>

    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?php echo ($pathToImages); ?>/logo/logo.png" type="image/x-icon">
    <link rel="icon" href="<?php echo ($pathToImages); ?>/logo/logo.png">
    <link rel="apple-touch-icon" href="">

    <link rel="stylesheet" href="<?php echo ($pathToStyles); ?>/standard.css">
    <link rel="stylesheet" href="<?php echo ($pathToStyles); ?>/all.css">
    <link rel="stylesheet" href="<?php echo ($pathToStyles); ?>/animsclasses.css">
    <link rel="stylesheet" href="<?php echo ($pathToVendors); ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ($pathToLocStyle); ?>">
    <link rel="stylesheet" href="css/gen.css">
    <style>
        .mes{
            padding: 3em 1em;
            text-align: center;
            gap: 2em;
        }
        .mes .head{
            font-size: 1.5em;
        }
        .mes > i{
            font-size: 8em;
        }
        .action{
            padding: 1em;
            gap: 1em;
            text-align: center;
            position: absolute;
            bottom: 1em;
        }
        .action button{
            padding: 1em;
            display: block;
            width: 80vw;
            margin: 0 auto;
            border-radius: .5em;
        }
    </style>
</head>

<body class="bg-primary">
    <header class="header-no-nav glass heavy-glass flx" style="border:unset; !important;">
        <div id="org-id" class="flx flx-rw">
            <span id="org-logo" class="bg-image-hold"></span>
            <span id="org-name" class="txt-off-white">VULUE</span>
        </div>
    </header>
    <main class="first-block-after-header txt-white" style="margin-top:3.5em !important;">
        <div class="mes flx flx-col">
            <?php
            switch ($state) {
                case 1:
                    echo <<<_END
                    <p class="head txt-thick">Transaction Successful</p>
                    <i class="fa-regular fa-check-circle txt-green"></i>
                    _END;
                    break;
                case 0:
                    echo <<<_END
                    <p class="head txt-thick">Transaction Failed</p>
                    <i class="fa-regular fa-circle-xmark txt-red"></i>
                    _END;
                    break;
                case 2:
                    echo <<<_END
                    <p class="head txt-thick">Transaction Pending</p>
                    <i class="fa fa-ellipsis txt-yellow"></i>
                    _END;
                    break;
                
                default:
                    # code...
                    break;
            }
            ?>
            <p style="text-align:center;" class="txt-std"><?php echo $mes; ?></p>
        </div>
        <div class="action flx flx-col">
            <?php
            if ($state == 0) {
                echo <<<_END
                <a href="#" class="no-decor"><button class="bg-uvdark-blue brdls txt-white">Report</button></a>
                _END;
            }
            if ($state == 0 || $state == 2) {
                echo <<<_END
                <a href="#" class="no-decor"><button class="bg-uvdark-blue brdls txt-white">Retry</button></a>
                _END;
            }
            ?>
            <a href="#" class="no-decor"><button class="bg-blue brdls txt-white">Return to dashboard</button></a>
        </div>
    </main>
    
</body>
<script src="../../vendors/xenon/xenon-alpha0.0.1.js"></script>
<script>
    
</script>
</html>
