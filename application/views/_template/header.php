<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = '//'.$_SERVER['HTTP_HOST'];


if (isset($data)) {
    extract ($data, EXTR_PREFIX_SAME);
}


?>

<!DOCTYPE html>
<html>
<base href="<?php echo $url."/"; ?>">
<head>
    <meta charset="utf-8">
    <title>DesbravaNet<?php if ($title!=NULL) { echo " - " . $title; } ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Ionicons --><link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.css">
    <!-- Skin Blue --><link rel="stylesheet" href="assets/css/skins/skin-blue.min.css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
            
            <?php require('topbar.php'); ?>
            <?php require('leftbar.php'); ?>
            <?php require('page.php'); ?>
            <?php require('rightbar.php'); ?>
      