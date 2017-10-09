<script type="text/javascript">
  //текущая дата в js
	var d = new Date();
	var curr_day = d.getDate();
	var curr_month = d.getMonth() + 1;
	var curr_year = d.getFullYear();
	var curr_date = (curr_day < 10 ? '0' : '') + curr_day + "." + (curr_month < 10 ? '0' : '') + curr_month + "." + curr_year;

	//document.write(curr_date);
  
  //сравнение в строке на совпадение
  	$(document).ready(function(){
		//var varialable = '<?php echo date('d.m.Y')?>';
		var time = $("#inform").html();
		var pos = time.indexOf(curr_date);	
		if (-1 < pos) {
			$("#dell").prop('disabled',true);
		}
		$('#comment').off().on('input', lengthComment);
	});	

	function lengthComment()
	{
		if ($('#comment').val().length > 3) {
			$("#dell").prop('disabled',false);
		} else { $("#dell").prop('disabled',true); }
	}
</script>
<?php 

	//прибавить к дате +1 день (или больше)
	$date2 = strtotime($date2);
        $date2 = date('Y-m-d', ($date2+86400));

?>
