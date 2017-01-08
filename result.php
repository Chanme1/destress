<?php include 'header_bunny.php';?>

<div id="content_de">
	<h1>De-stress</h1>

	<?php
		$checked_arr = $_POST['checkbox'];
		$count = count($checked_arr);

		echo "<center><h3>You selected " . $count . " symptoms out of 50.</h3></center><br><br>";

		$high = "
		<div id='high'>
			<h4>Because of the amount of symptoms you listed, we urge you to</h4>
			<ul>
				<li>talk to a doctor</li>
				<li>ask for professional help</li>
				<li>group therapy</li>
			</ul>
		</div>";
		
		$medium = "
		<div id='medium'>
			<h4>These are some suggestions that you might want to consider:</h4>
			<ul>
				<li>talk to someone you trust</li>
				<li>exercise / go outside and get some fresh air</li>
			</ul>
		</div>";

		$low = "
		<div id='low'>
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
			</ul>
		</div>";
	?>

	<div id="contentz">
		<?php
			if ($count >= 35) {
				echo $high;
			}

			if ($count >= 15) {
				echo $medium;
			
			}

			if ($count > 0) {
				echo $low;
				
			}

			if ($count == 0) {
				echo "<p style='font-size:100px'>what is stress?</p>";
				
			}

			if ($count == 0) {
				echo '
				<script>
				$(document).ready(function(){
					$("#face").css("background-image", "url(../bunny/face_happy.png)");
					});
				</script>';
			}
			else if ($count < 15) {
				echo '
				<script>
				$(document).ready(function(){
					$("#face").css("background-image", "url(../bunny/face.png)");
					});
				</script>
				';
			}
			else if ($count < 35) {
				echo '
				<script>
					$(document).ready(function(){
					$("#face").css("background-image", "url(../bunny/face_sad.png)");
					});
				</script>
					';
			}
			else {
				echo '
				<script>
				$(document).ready(function(){
					$("#face").css("background-image", "url(../bunny/face_tear.png)");
					});
				</script>
					';
			}
		?>

		<div id="bunny">
		<div id="upper">
			<div id="face"></div>
			<div id="earL"></div>
			<div id="earR"></div>
		</div>
		<div id="lower">
			<div id="Bbody"></div>
			<div id="armL"></div>
			<div id="armR"></div>
		</div>
		</div>

	</div>
</div>
<?php include 'footer.php';?>