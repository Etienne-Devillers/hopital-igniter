<?php



?>
<h1 class="mainTitle">Liste des RDV</h1>
<h4 class="error"><?= $error ?? ''?></h4>
<h4 class="message"><?= $message ?? ''?></h4>

<table class="patientsTable">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Date du rdv</th>
			<th>N° de téléphone</th>
			<th>E-mail</th>

		</tr>

	</thead>
	<tbody>
		<?php 

        foreach ($appointments as $key => $value) {
            foreach ($patients as $key2 => $value2) {
                if ($value2['id'] == $value['idPatients']){ ?>
		<tr class="tRow" id="<?=$value['id']?>">
			<td><?=$value2['lastname']?></td>
			<td><?=$value2['firstname']?></td>
			<td><?=$value['dateHour']?></td>
			<td><?=$value2['phone']?></td>
			<td><?=$value2['mail']?></td>

		</tr>
		<?php
                }
            }
        } ?>
</table>