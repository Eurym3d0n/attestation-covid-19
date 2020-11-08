$(function() {
	$('[data-toggle="popover"]').popover({
		trigger: 'hover'
	});

	$.uid = function() {
		return Math.floor(Math.random() * 26) + Date.now();
	}

	$.getFormattedDate = function(date) {
		var dt = new Date(date);

		var day = dt.getDate();
			day = (day < 10) ? '0' + day : day;

		var month = dt.getMonth() + 1;
			month = (month < 10) ? '0' + month : month;

		return day + '/' + month + '/' + dt.getFullYear();
	}

	$.pad = function(value)  {
		if(value < 10) {
			return '0' + value;
		} else {
			return value;
		}
	}

	$.getFieldValue = function(field) {
		return $('input[name=' + field + ']').val();
	}
});