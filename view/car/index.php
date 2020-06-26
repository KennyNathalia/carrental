<?php session_start();
$_SESSION['error'] = "";

?>
<div class="col-10 m-auto">
<h1 class="text-center mt-3 color-blue">Auto overzicht</h1>
<p class="text-center">Op deze pagina kunt u ons overzicht zien van onze huur- en koopauto's!</p>


<h1 class="ml-5 color-blue">Auto lijst</h1>
<?php foreach($cars as $row){?>
	<div class="m-1 row border">
		<section class="col-6">
		<h3 class="font-weight-bold m-3 col-12 color-blue"><?php echo $row['merknaam'] ?> <?php echo $row['modelnaam'] ?></h3>
		<img class="col-7 m-3" src="<?=URL?>public/Auto-images/<?php echo $row['img'] ?>">
		</section>
		<section class="col-3 mb-5">
			<h2 class="mt-5 mb-3">€<?php $number= $row['prijs']; echo number_format($number, 0, ',','.'); ?>,-</h2>
			<p>Huurprijs (per dag): €<?php $huur = $row['prijs'] * 0.002; echo number_format($huur, 0, ',','.');?>,- </p>
			
			<table class="table">
				<tbody>
				    <tr>
				        <td class="font-weight-bold">Vermogen:</td>
				        <td><?php echo $row['pk'] ?> pk</td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Brandstof:</td>
				        <td><?php echo $row['brandstof'] ?></td>
				    </tr>
				     <tr>
				        <td class="font-weight-bold">Deuren:</td>
				        <td><?php echo $row['deuren'] ?></td>
				    </tr>
				</tbody>
			</table>
			
			<a href="<?=URL?>car/details/<?php echo $row['car_id'] ?>" class="btn btn-outline-info m-auto">Informatie</a>
			<a href="<?=URL?>car/huren/<?php echo $row['car_id'] ?>" class=" btn btn-outline-primary m-auto">Nu huren</a>
			<a href="<?=URL?>car/kopen/<?php echo $row['car_id'] ?>" class=" btn btn-outline-success m-auto">Nu kopen</a>
		</section>
	</div>


<?php }

 ?>

</div>