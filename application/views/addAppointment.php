<?php 


?>

<section class="contentSection">
<h1 class="mainTitle">Ajout d'un rendez vous</h1>

<?=form_open('', 'id="appointmentForm" no-validate')?>

<label for="patient">Mail du patient</label>
<div class="select">
    <?=form_dropdown('idPatients', $formData['patients'], '', 'id="patientField"')?>
</div>

<label for="date">Date du RDV</label>
<input type="date" class="dateField" name="date" id="date"
                                value=""  
                                min="<?=$date?>" max="<?=$maxDate?>"
                                required>

<label for="hour">Heure du RDV</label> 
<div class="hoursMinutesDiv">

    <div class="select">
        <?=form_dropdown('hour', $formData['hours'], '', 'id="hoursField"')?>
    </div>
<div class="separator"> : </div>
    <div class="select">
        <?=form_dropdown('minute', $formData['minutes'], '', 'id="minutesField"')?>
    </div>
</div>

<div class="btnContainer">
        <span class="btnEffectSpan">
        <?= form_submit('','Ajouter', 'class="validationBtn"')?>

        </span>
    </div>
<?= form_close()?>
</section>