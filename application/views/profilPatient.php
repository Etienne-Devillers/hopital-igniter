<?php


?>




<h1 class="mainTitle">Profil du patient</h1>

<section class="patientProfil">

    <div class="leftSideProfil">

        <div class="patientInfo patientImg"><img src="/assets/img/user.png" alt="photo de l'utilisateur" class="userImg"></div>
        <div class="patientInfo patientName"><?=$patient['lastname']?> <?=$patient['firstname']?></div>

        <div class="patientInfo patientInfoBottom">
            <img class="profilInfoImg" src="/assets/img/cake-candles-solid.svg" alt="logo d'un gateau d'anniversaire"><?=date('d-m-Y', strtotime($patient['birthdate']))?> (<?=$age?> ans)
        </div>

        <div class="patientInfo patientInfoBottom">
            <img class="profilInfoImg" src="/assets/img/phone-solid.svg" alt="logo d'un téléphone">
            <a href="tel:<?=$patient['phone']?>"> <?=$patient['phone']?></a>
        </div>

        <div class="patientInfo patientInfoBottom">
            <img class="profilInfoImg" src="/assets/img/envelope-solid.svg" alt="logo d'une enveloppe">
            <a href="mailto:<?=$patient['mail']?>"> <?=$patient['mail']?></a>
        </div>

    </div>

    <div class="rightSideProfil">
        <?php if ($appointments) { ?>

            <div class=""> Liste des rendez vous </div>
            <div></div>

        <?php } else { ?>

            <div>Aucun RDV</div>

        <?php } ?>
        

        
    </div>

</section>
