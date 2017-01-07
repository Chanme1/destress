<?php include 'header.php';?>

	<body>
		<h1>Destress</h1>
		
		<?php
			$checked_arr = $_POST['checkbox'];
			$count = count($checked_arr);
			echo "<center><h3>You selected " . $count . " symptoms out of 50.</h3></center><br><br>";

			$high = "
			<h4>Because of the amount of symptoms you listed, we urge you to</h4>
			<ul>
				<li>talk to a doctor</li>
				<li>ask for professional help</li>
				<li>group therapy</li>
			</ul>";
			
			$medium = "
			<h4>These are some suggestions that you might want to consider:</h4>
			<ul>
				<li>talk to someone you trust</li>
				<li>exercise / go outside and get some fresh air</li>
			</ul>";

			$low = "
			<h4>Here are some simple everyday tasks that can lessen your stress:</h4>
			<ul>
				<li>sleep more</li>
				<li>spend time doing an enjoyable hobby</li>
					<ul>
						<li>journal</li>
						<li>draw</li>
						<li>play an instrument</li>
					</ul>
				<li>meditate</li>
				<li>lessen intake of caffeine</li>
				<li>listen to music</li>
				<li>take a hot bath or shower</li>
			</ul>";

			if ($count >= 35)
				echo $high;

			if ($count >= 15)
				echo $medium;

			if ($count > 0)
				echo $low;

			if ($count == 0)
				echo "what's stress?";
		?>

<?php include 'footer.php';?>