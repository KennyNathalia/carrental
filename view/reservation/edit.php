<h1 class = "text-center color-blue">Pas je reservering aan:</h1>
<form action="<?=URL?>reservation/validation/<?php echo $resId['res_id']; ?>" method="POST">
	<div class="container">
        <div class="row">
            <div class="col-12 form-group has-feedback">
              <label>Datum <span class="text-danger">*</span></label>
              <input type="text" class="form-control has-feedback-left" id="daterange"  name="daterange">
              <input type="hidden" name="startDatum" value="" >
      		  <input type="hidden" name="eindDatum" value="">
            </div>
            <div class="col-12 form-group has-feedback">
              <label>Aantal dagen <span class="text-danger">*</span></label>
              <input type="number" class="form-control has-feedback-left" name="numberdays" 
                 id="numberdays" readonly>

            </div>
            <div class="col-12 form-group has-feedback">
              <label>Prijs <span class="text-danger">*</span></label>
              <input type="number" class="form-control has-feedback-left" name="price" 
                 id="price" readonly>
            </div>
        </div>  
    </div>
    <input class="d-block m-auto btn btn-primary" type="submit" name="" value="Aanpassen">
</form>
<script>
var huur = "<?php echo $carbyid['huurprijs'] ?>";


  $(function() {
    $('#daterange').daterangepicker({
    minDate: new Date() 
    });
    
    $('#daterange').on('apply.daterangepicker', function(ev, picker) {
        // picker.startDate and picker.endDate are already Moment.js objects.
        // You can use diff() method to calculate the day difference.
        $('#numberdays').val(picker.endDate.diff(picker.startDate, "days")+1);
        
        $('#price').val(Number((picker.endDate.diff(picker.startDate, "days")+1)*huur).toFixed(2));
    });
});

var d = new Date();
           var currMonth = d.getMonth();
           var currYear = d.getFullYear();
           var startDate = new Date(currYear, currMonth, 1);

           $("#datepicker").daterangepicker();
           $("#datepicker").daterangepicker("setDate", startDate);


</script>