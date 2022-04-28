<?php
var_dump($patient);

?>




<h1 class="mainTitle">Profil du patient</h1>

<section class="patientProfil">

    <div class="leftSideProfil">
        <div class="patientInfo patientImg"><img src="/assets/img/user.png" alt="photo de l'utilisateur" class="userImg"></div>
        <div class="patientInfo patientName"><?=$patient['lastname']?> <?=$patient['firstname']?></div>
        <div class="patientInfo"><img class="profilInfoImg" src="/assets/img/cake-candles-solid.svg" alt="logo d'un gateau d'anniversaire"><?=date('d-m-Y', strtotime($patient['birthdate']))?></div>
        <div class="patientInfo"><img class="profilInfoImg" src="/assets/img/phone-solid.svg" alt="logo d'un téléphone"><a href="tel:<?=$patient['phone']?>"> <?=$patient['phone']?></a></div>
        <div class="patientInfo"><img class="profilInfoImg" src="/assets/img/envelope-solid.svg" alt="logo d'une enveloppe"><a href="mailto:<?=$patient['mail']?>"> <?=$patient['mail']?></a></div>
    </div>

    <div class="rightSideProfil">
        <div></div>
    </div>

</section>
