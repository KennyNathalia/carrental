<div class="container">
	<div class="row">
		<div class="col-12 form-group has-feedback">
			<label>From <span class="text-danger">*</span></label>
			<input type="text" class="form-control has-feedback-left" id="daterange" 				 name="daterange">
		</div>
		<div class="col-12 form-group has-feedback">
			<label>Number of days <span class="text-danger">*</span></label>
			<input type="text" class="form-control has-feedback-left" name="numberdays" 
				   id="numberdays" disabled>
		</div>
	</div>  
</div>

<script>
	$(function() {
    $('#daterange').daterangepicker({
    minDate: new Date()	
    });
    
    $('#daterange').on('apply.daterangepicker', function(ev, picker) {
        // picker.startDate and picker.endDate are already Moment.js objects.
        // You can use diff() method to calculate the day difference.
        $('#numberdays').val(picker.endDate.diff(picker.startDate, "days"));
    });
});

var d = new Date();
           var currMonth = d.getMonth();
           var currYear = d.getFullYear();
           var startDate = new Date(currYear, currMonth, 1);

           $("#datepicker").daterangepicker();
           $("#datepicker").daterangepicker("setDate", startDate);


</script>