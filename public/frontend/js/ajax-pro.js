var url_api = 'https://www.forextime.com/informers/rates/symbols?symbols=EURUSD,USDJPY,USDCAD,AUDUSD,XAUUSD,XAGUSD,CADJPY';
jQuery(document).ready(function($) {
	getData();
	var refInterval = window.setInterval('getData()', 60000);
});

function getData(){
	$.ajax({
		url: url_api,
		type: 'GET',
		dataType: 'JSON',
	})
	.done(function(data) {
		var stt = 0;
		$.each(data, function( index, value ) {
			stt++;
			$('#item'+stt+' span').text(value.name);
			$('#item'+stt+' p').text(value.bid);
		});
	})
}