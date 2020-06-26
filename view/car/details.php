<div class="col-10 m-auto">
<h1 class="text-center mt-3 color-blue"><?php echo $carbyid['merknaam'] ?></h1>




	<div class="m-1 row border d-flex justify-content-between">
		<section class="col-6">
		<h3 class="font-weight-bold m-3 col-12 color-blue"><?php echo $carbyid['merknaam'] ?> <?php echo $carbyid['modelnaam'] ?></h3>
		<img class="w-100 m-3" src="<?=URL?>public/Auto-images/<?php echo $carbyid['img'] ?>">
		</section>
		<section class="col-4 mb-5">
			<h2 class="mt-5 mb-3">€<?php $number= $carbyid['prijs']; echo number_format($number, 0, ',','.'); ?>,-</h2>
			<p>Huurprijs (per dag): €<?php $huur = $carbyid['prijs'] * 0.002; echo number_format($huur, 0, ',','.');?>,- </p>
			
			<table class="table">
				<tbody>
				    <tr>
				        <td class="font-weight-bold">Vermogen:</td>
				        <td><?php echo $carbyid['pk'] ?> pk</td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Brandstof:</td>
				        <td><?php echo $carbyid['brandstof'] ?></td>
				    </tr>
				     <tr>
				        <td class="font-weight-bold">Deuren:</td>
				        <td><?php echo $carbyid['deuren'] ?></td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Zitplaatsen:</td>
				        <td><?php echo $carbyid['plaatsen'] ?></td>
				    </tr>
				    <tr>
				        <td class="font-weight-bold">Snelheid:</td>
				        <td><?php echo $carbyid['km'] ?> km/h</td>
				    </tr>
				   
				</tbody>
			</table>
			
			
			<a href="<?=URL?>car/huren/<?php echo $carbyid['car_id'] ?>" class="btn btn-outline-primary m-auto">Nu huren</a>
		</section>
	</div>
	



</div>