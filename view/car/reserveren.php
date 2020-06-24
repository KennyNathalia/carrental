<?php
session_start();
$_POST['daterange'] = $_SESSION['daterange'];
$_POST['numberdays'] = $_SESSION['numberdays'];
$_POST['price'] = $_SESSION['price']; 

  $datum = explode( '-', $_POST['daterange']);
  $datum[0] = str_replace(' ', '', $datum[0]);
  $datum[1] = str_replace(' ', '', $datum[1]);
  $_POST['startDatum'] = $datum[0];
  $_POST['eindDatum'] = $datum[1];
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
                <td><?php echo $datum[0] ?></td>
            </tr>
            <tr>
                <td class="font-weight-bold">Inlever datum:</td>
                <td><?php echo $datum[1] ?></td>
            </tr>
            <tr>
                <td class="font-weight-bold">Prijs:</td>
                <td> €<?php echo $_POST['price'] ?></td>
            </tr>

           
        </tbody>
      </table>
    	
        
        <button class="d-block m-auto" >Reserveren </button>


 
      
      
     
    
	</section>
</div>
