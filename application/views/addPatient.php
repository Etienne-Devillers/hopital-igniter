<?php


echo form_open('', 'id="patientForm"');
$formData = array (
[
    'name'          => 'firstname',
    'id'            => 'firstname',
    'placeholder'   => 'Renseignez votre prénom',
    'value'         => '',
    'class'         => 'inputField',
    'pattern'       => "^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇÉÈÊËÎÏÔŒÙÛÜŸ '-]*$"
],
[
    'name'          => 'lastname',
    'id'            => 'lastname',
    'placeholder'   => 'Renseignez votre nom',
    'value'         => '',
    'class'         => 'inputField',
    'pattern'       => "^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇÉÈÊËÎÏÔŒÙÛÜŸ '-]*$"
],
[
    'name'          => 'birthdate',
    'type'          => 'date',
    'id'            => 'birthdate',
    'placeholder'   => '',
    'value'         => '',
    'class'         => 'inputField',
    'min'           => date("Y-m-d", strtotime("-100 year")),
    'max'           => date('Y-m-d')
],
[ 
    'name'          => 'phonenumber',
    'type'          => 'tel',
    'id'            => 'phonenumber',
    'placeholder'   => 'Renseignez votre numéro',
    'value'         => '',
    'class'         => 'inputField'
],
[
    'name'          => 'email',
    'type'          => 'email',
    'placeholder'   => 'Renseignez votre email',
    'id'            => 'email',
    'value'         => '',
    'class'         => 'inputField'
]);

$labelValue = array();
$labelValue[0]= new stdClass();
$labelValue[0]->labelFor = 'firstname';
$labelValue[0]->text = 'Prénom';

$labelValue[1]= new stdClass();
$labelValue[1]->labelFor = 'lastname';
$labelValue[1]->text = 'Nom';

$labelValue[2]= new stdClass();
$labelValue[2]->labelFor = 'birthdate ';
$labelValue[2]->text = 'Date de naissance';

$labelValue[3]= new stdClass();
$labelValue[3]->labelFor = 'phonenumber';
$labelValue[3]->text = 'N° de téléphone';

$labelValue[4]= new stdClass();
$labelValue[4]->labelFor = 'email';
$labelValue[4]->text = 'E-mail';


?>

<h1 class="mainTitle">Ajout d'un patient</h1>


<?php 

for ($i=0; $i < count($formData); $i++) { 
    ?>
    <div class="inputDiv">
        <label for="<?=$labelValue[$i]->labelFor?>" class="formLabel"><?=$labelValue[$i]->text?> :</label>
        <?= form_input($formData[$i], '', 'required')?>
        <span class="focusBorder"></span>
    </div>

<?php } ?>

<div class="inputDiv">
    <?= form_submit('validationBtn','Envoyer', 'class="validationBtn"')?>
</div>
<?= form_close()?>

