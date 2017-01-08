function alertCheck(id) {
	if (!document.getElementById(id).checked) {
		var x = confirm ("Are you sure you want to change your answer");
		if (x==false){
			event.preventDefault();
		}
	} 
}

$(document).ready(function(){
	var current = 1;
	$("#questions2").hide();
	$("#questions3").hide();

	function FadeInBox(e){
		e.show().fadeOut(0).fadeIn(1000);
	}

	function FadeOutBox(e) {
		e.fadeOut(1000).hide();
	}

	$("#button_next").click(function(){
		if (current == 1 ) {
			FadeOutBox($("#questions1"));
			FadeInBox($("#questions2"));
			current = 2;
		} else if (current == 2) {
			FadeOutBox($("#questions2"));
			FadeInBox($("#questions3"));
			current = 3;
		}
	});

	$("#button_prev").click(function(){
		if (current == 2 ) {
			FadeOutBox($("#questions2"));
			FadeInBox($("#questions1"));
			current = 1;
		} else if (current == 3) {
			FadeOutBox($("#questions3"));
			FadeInBox($("#questions2"));
			current = 2;
		}
	});
});