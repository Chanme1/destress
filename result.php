<html>
	<head>
		<title>Destress App</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<h1>Destress</h1>
		
		<?php
			$checked_arr = $_POST['checkbox'];
			$count = count($checked_arr);
			echo "You selected " . $count . " symptoms out of 50.<br><br>";

			$high = "
			<ul>
				<li>talk to a doctor</li>
				<li>ask for professional help</li>
				<li>group therapy</li>
			</ul>";
			
			$medium = "
			<ul>
				<li>talk to someone you trust</li>
				<li>exercise / go outside and get some fresh air</li>
			</ul>";

			$low = "
			<ul>
				<li>sleep more</li>
				<li>spend time doing an enjoyable hobby</li>
					<ul>
						<li>journal</li>
						<li>draw</li>
						<li>play an instrument</li>
					</ul>
				<li>meditate</li>
				<li>drink tea</li>
				<li>listen to music</li>
				<li>take a hot bath or shower</li>
			</ul>";

			if ($count >= 40)
				echo $high;

			if ($count >= 16)
				echo $medium;

			if ($count > 0)
				echo $low;

			if ($count == 0)
				echo "what's stress?";
		?>
	</body>
</html>