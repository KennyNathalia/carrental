<div class="container">
<h1>Home</h1>
 
<section class="row">
<?php foreach($cars as $row){ ?>
	<div class="border p-4 col-3">
		<p>merk: <?php echo $row['merknaam'] ?></p>
		<p>model: <?php echo $row['modelnaam'] ?></p>
		<img class="w-100" src="<?=URL?>public/Auto-images/<?php echo $row['img'] ?>">
		
	</div>
<?php } ?>
</section>
</div>