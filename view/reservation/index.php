<div class="col-10 m-auto">
<h1 class="text-center mt-3 color-blue">Uw reserveringen</h1>
<p class="text-center">Bekijk uw reserveringen!</p>

<?php foreach($allRes as $row) {?>
	<div class="m-4 border row">
		<img class="p-1 col-6" src="<?=URL?>public/Auto-images/<?php echo $row['img'] ?>">
		<table class="table col-6">
				<tbody>
					<tr>
				        <td class="font-weight-bold">Gebruiker:</td>
				        <td><?php echo $row['username'] ?></td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Auto:</td>
				        <td><?php echo $row['merknaam']; echo $row['modelnaam'] ?></td>

				    </tr>
				    <tr>
				        <td class="font-weight-bold">Van:</td>
				        <td><?php echo $row['van'] ?></td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Tot:</td>
				        <td><?php echo $row['tot'] ?></td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Prijs:</td>
				        <td>€ <?php echo $row['prijs_res'] ?>,-</td>
				    </tr>
				</tbody>
			</table>
			<a  class="btn btn-outline-info m-auto" href="<?= URL ?>reservation/edit/<?php echo $row['res_id']?>/<?php echo $row['car_id']?>">Wijzigen</a>
			<a  class="btn btn-outline-danger m-auto" href="<?= URL ?>reservation/delete/<?php echo $row['res_id']?>">Verwijder</a>
	</div>


<?php }

?>

</div>



