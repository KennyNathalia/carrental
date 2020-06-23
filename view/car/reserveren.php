<?php
  $datum = explode( '-', $_POST['daterange']);
  $datum[0] = str_replace(' ', '', $datum[0]);
  $datum[1] = str_replace(' ', '', $datum[1]);

?>
<h2 class="text-center color-blue"><?php echo $carbyid['merknaam']?> <?php echo $carbyid['modelnaam']?></h2>
<div class="d-flex justify-content-center mt-5 ">
  <section class="d-block">

    <table class="table">
        <tbody>
           <tr>
                <td class="font-weight-bold">Datum:</td>
                <td><?php echo $_POST['daterange'] ?></td>
            </tr>
            <tr>
                <td class="font-weight-bold">Dagen:</td>
                <td><?php echo $_POST['numberdays'] ?></td>
            </tr>
            <tr>
                <td class="font-weight-bold">Ophaal datum:</td>
                <td></td>
            </tr>
            <tr>
                <td class="font-weight-bold">Inlever datum:</td>
                <td></td>
            </tr>
            <tr>
                <td class="font-weight-bold">Prijs:</td>
                <td> €<?php echo $_POST['price'] ?></td>
            </tr>
      
           
        </tbody>
      </table>
    	
      
      <input class="d-block m-auto" type="submit" name="" value="reserveren">
     
    
	</section>
</div>
