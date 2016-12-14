$(document).ready(function(){
	$('#generateComputingReport').on('click', function(){
		var sdate = '';
		var edate = '';

		sdate = $('#s_date').val();
		edate = $('#e_date').val();
		
		if(sdate == ''){
			sdate = '2015-01-01';
		}else{
			sdate = sdate;
		}

		if(edate == ''){
			edate = '2020-12-31';
		}else{
			edate = edate;
		}

		window.open('./reports/ComputingReport?sdate='+sdate+'&edate='+edate , '_blank');
	});
});