<?php require_once (__DIR__."/../bootstrap.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo CONFIG_AUCTIONAME; ?></title>
    <link rel="stylesheet" href="<?php echo CONFIG_URL ?>/css/stylesheet.css" type="text/css" />
</head>
<body>
<div id="header">
    <h1><?php echo CONFIG_AUCTIONAME; ?></h1>
</div>
<div id="menu">
    <a href="index.php">Home</a> &bull;
    <?php

    /** @var TYPE_NAME $session */
    if ($session->isLoggedIn()){
        echo "<a href='logout.php'>Logout</a> &bull;";
    } else {
        echo  "<a href='login.php'>Login</a> &bull;";
    }
    ?>

    <a href="newitem.php">New Item</a> &bull;
    <a href="processauctions.php">ProcessAuction</a>
</div>
<div id="container">
    <div id="bar">
        <?php require_once (__DIR__."/bar.php"); ?>
    </div>
    <div id="main">

