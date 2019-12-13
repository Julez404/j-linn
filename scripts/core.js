$(function(){
	$("#include_Nav").load("nav.html");
});

$(function(){
	$("#include_Footer").load("footer.html");
});

$(function(){
	$("#include_Cards").load("cards.html");
});

$(function(){
	$("#include_Services").load("services.html");
});

$(function(){
	$("#include_Impressum").load("impressum.html");
});

$(function(){
	$("#include_Ts3status").load("ts3-status.html");
});

$(function(){
	$("#include_About").load("about.html");
});

var active = "include_Cards";

function activeInit() {
	$('#include_Cards').show();
	$('#include_Services').hide();
	$('#include_Ts3status').hide();
	$('#include_About').hide();
	$('#include_Impressum').hide();
}

function activeMenue(_id) {
		h_var1 = active.split("_");
		h_var2 = _id.split("_");
		$('#' + active).addClass('inactive').removeClass('active');
		h_var1 = h_var1[1];
		$('#include_' + h_var1).hide();
		$('#' + _id).addClass('active').removeClass('inactive');
		h_var2 = h_var2[1];
		$('#include_' + h_var2).fadeIn(500);
		active = _id;
}
