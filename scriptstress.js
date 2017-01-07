function myFunction() {
	if (!document.getElementById("testone").checked) {
		var x = confirm ("Are you sure you want to change your answer")
		if (x==false){
			event.preventDefault()
		}
	} 
}