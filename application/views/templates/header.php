<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=css_url('style') ?>">
    <title>Hopital2</title>
</head>

<body>
    <header>
    <div class="leftSideHeader">
        <a href="<?php echo site_url(''); ?>"><img src="<?=img_url('logoHopital.png')?>" alt=""></a>
    </div>
    <div class="rightSideHeader"></div>
    </header>

    <main>

    <div class="navBar">
        <a href="<?php echo site_url('/Patient/add'); ?>"><div class="navItem navItm1">Ajouter un patient <img class="svgImg" src="<?=img_url('user-plus-solid.svg')?>" alt=""></div></a>
        <a href="<?php echo site_url('/Patient/list'); ?>"><div class="navItem navItm2">liste des patients <img class="svgImg" src="<?=img_url('users-solid.svg')?>" alt=""></div></a>
        <a href="<?php echo site_url('/Appointment/add'); ?>"><div class="navItem navItm3">Ajouter un RDV <img class="svgImg" src="<?=img_url('calendar-plus-solid.svg')?>" alt=""></div></a>
        <a href=""><div class="navItem navItm4">liste des RDV <img class="svgImg" src="<?=img_url('calendar-days-solid.svg')?>" alt=""></div></a>
    </div>
<section id="mainSection">

    
