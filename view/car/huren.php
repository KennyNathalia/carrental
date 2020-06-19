<h2 class="text-center color-blue"><?php echo $carbyid['merknaam']?> <?php echo $carbyid['modelnaam']?></h2>
<div class="d-flex justify-content-center mt-5 ">

	<input class="d-block width" type="text" name="daterange" value="" id="datePicker" />
	
</div>
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left',
    minDate: new Date()
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});


var d = new Date();
           var currMonth = d.getMonth();
           var currYear = d.getFullYear();
           var startDate = new Date(currYear, currMonth, 1);

           $("#datepicker").daterangepicker();
           $("#datepicker").daterangepicker("setDate", startDate);
</script>