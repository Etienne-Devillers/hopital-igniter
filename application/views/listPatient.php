<?php



?>
<h1 class="mainTitle">Liste des patients</h1>

<table class="patientsTable">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Date de naissance</th>
			<th>N° de Téléphone</th>
			<th>Email</th>

		</tr>

	</thead>
	<tbody>
        <?php 
            for ($i=0; $i < 15; $i++) { ?>

                        <tr>
                            <td><?=$patients[$i]['lastname']?></td>
                            <td><?=$patients[$i]['firstname']?></td>
                            <td><?=$patients[$i]['birthdate']?></td>
                            <td><?=$patients[$i]['phone']?></td>
                            <td><?=$patients[$i]['mail']?></td>
                        </tr>

            <?php }
        ?>


	</tbody>
</table>