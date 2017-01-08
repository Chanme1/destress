<html>
	<head>
		<title>De-stress</title>

		<!-- BOOTSTRAP -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="styles.css">

		<script> 
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

		</script>
	</head>

	<body>