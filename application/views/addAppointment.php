<?php 


?>

<section class="contentSection">
<h1 class="mainTitle">Ajout d'un rendez vous</h1>

<?=form_open('', 'id="appointmentForm" no-validate')?>

<label for="patient">Mail du patient</label>
<div class="select">
    <?=form_dropdown('patient', $formData['patients'], '', 'id="patientField"')?>
</div>

<label for="date">Date du RDV</label>
<input type="date">
<div class="hoursMinutesDiv">
    <div class="select">
        <?=form_dropdown('hours', $formData['hours'], '', 'id="hoursField"')?>
    </div>

    <div class="select">
    <?=form_dropdown('minutes', $formData['minutes'], '', 'id="minutesField"')?>
    </div>
</div>
<?= form_close()?>
</section>