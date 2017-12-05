$(document).ready(function()
{

	var slider = new Slider('#s1', {
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});
});

$(document).ready(function()
{

	var slider = new Slider('#s2', {
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});
});