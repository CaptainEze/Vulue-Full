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
    <link rel="stylesheet" href="css/gen.css">
    <link rel="stylesheet" href="<?php echo ($pathToLocStyle); ?>">

    <script>
       const goBack = ()=>{
            window.location = document.referrer;
       } 
    </script>
</head>

<body class="bg-primary">
    <header class="flx flx-col glass thick-glass">
        <div id="org-id" class="flx flx-rw">
            <span id="org-logo" class="bg-image-hold"></span>
            <span id="org-name" class="txt-off-white">VULUE</span>
        </div>
        <div>
            <p class="txt-white"><?php echo $dashPart; ?></p>
            <button class="brdls bg-trans fa fa-arrow-left fa-lg txt-white back-btn" onclick="goBack()"></button>
        </div>  
    </header>