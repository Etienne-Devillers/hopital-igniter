<?php



$formData = array (
[
    'name'          => 'firstname',
    'id'            => 'firstname',
    'placeholder'   => 'Renseignez votre prénom',
    'value'         => set_value('firstname'),
    'class'         => 'inputField',
    'pattern'       => "^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇÉÈÊËÎÏÔŒÙÛÜŸ '-]*$"
],
[
    'name'          => 'lastname',
    'id'            => 'lastname',
    'placeholder'   => 'Renseignez votre nom',
    'value'         => set_value('lastname'),
    'class'         => 'inputField',
    'pattern'       => "^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇÉÈÊËÎÏÔŒÙÛÜŸ '-]*$"
],
[
    'name'          => 'birthdate',
    'type'          => 'date',
    'id'            => 'birthdate',
    'placeholder'   => '',
    'value'         => set_value('birthdate'),
    'class'         => 'inputField',
    'min'           => date("Y-m-d", strtotime("-100 year")),
    'max'           => date('Y-m-d')
],
[ 
    'name'          => 'phone',
    'type'          => 'tel',
    'id'            => 'phone',
    'placeholder'   => 'Renseignez votre numéro',
    'value'         => set_value('phone'),
    'class'         => 'inputField'
],
[
    'name'          => 'mail',
    'type'          => 'email',
    'placeholder'   => 'Renseignez votre email',
    'id'            => 'email',
    'value'         => set_value('mail'),
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
$labelValue[3]->labelFor = 'phone';
$labelValue[3]->text = 'N° de téléphone';

$labelValue[4]= new stdClass();
$labelValue[4]->labelFor = 'mail';
$labelValue[4]->text = 'E-mail';

echo form_open('', 'id="patientForm" no-validate');
?>
<section class="contentSection">
<h1 class="mainTitle">Ajout d'un patient</h1>


<?php 

for ($i=0; $i < count($formData); $i++) { 
    ?>
    <div class="inputDiv">
        <label for="<?=$labelValue[$i]->labelFor?>" class="formLabel"><?=$labelValue[$i]->text?> :</label>
        <?= form_input($formData[$i], '', 'required')?>
        <span class="focusBorder"></span>
    </div>
        <?=form_error($labelValue[$i]->labelFor, '<div class="errorDiv">', '</div>')?>
<?php } ?>


    <div class="btnContainer">
        <span class="btnEffectSpan">
        <?= form_submit('','Ajouter', 'class="validationBtn"')?>

        </span>
    </div>

<?= form_close()?>
</section>
