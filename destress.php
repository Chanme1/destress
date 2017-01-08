<?php include 'header_symptoms.php';?>

	<div id="content_de">
		<p>
		<h1>De-stress</h1>
		<h2>What symptoms do you have?</h2>
		</p>
	</div>

	<div id = "questions">

		<div id="button_next"> 	&#8594; </div>
		<div id="button_prev"> 	&#8592; </div>
		
		<form action="result.php" method="POST">
			<div id= "questions1">
				<p>
				<input type="checkbox" name="checkbox[]" value="headaches" id = "1" onclick="alertCheck('1')"> Frequent headaches, jaw clenching or pain<br>
				<input type="checkbox" name="checkbox[]" value="teeth" id = "2" onclick="alertCheck('2')"> Gritting, grinding teeth<br>
				<input type="checkbox" name="checkbox[]" value="Stuttering or stammering" id = "3" onclick="alertCheck('3')"> Stuttering or stammering<br>
				<input type="checkbox" name="checkbox[]" value="tremors" id = "4" onclick="alertCheck('4')"> Tremors, trembling of lips, hands<br>
				<input type="checkbox" name="checkbox[]" value="pain" id = "5" onclick="alertCheck('5')"> Neck ache, back pain, muscle spasms<br>
				<input type="checkbox" name="checkbox[]" value="faint" id = "6" onclick="alertCheck('6')"> Light headedness, faintness, dizziness<br>
				<input type="checkbox" name="checkbox[]" value="Sounds" id = "7" onclick="alertCheck('7')"> Ringing, buzzing or “popping sounds<br>
				<input type="checkbox" name="checkbox[]" value="Blush or Sweat" id = "8" onclick="alertCheck('8')"> Stuttering or stammering<br>
				<input type="checkbox" name="checkbox[]" value="Nightmares" id = "9" onclick="alertCheck('9')"> Insomnia, nightmares, disturbing dreams<br>
				<input type="checkbox" name="checkbox[]" value="Concentration" id = "10" onclick="alertCheck('10')"> Difficulty concentrating, racing thoughts<br>
				<input type="checkbox" name="checkbox[]" value="knowledge" id = "11" onclick="alertCheck('11')"> Trouble learning new information<br>
				<input type="checkbox" name="checkbox[]" value="forgetful" id = "12" onclick="alertCheck('12')"> Forgetfulness, disorganization, confusion<br>
				<input type="checkbox" name="checkbox[]" value="hesitant" id = "13" onclick="alertCheck('13')"> Difficulty in making decisions<br>
				<input type="checkbox" name="checkbox[]" value="overloaded" id = "14" onclick="alertCheck('14')"> Feeling overloaded or overwhelmed<br>
				<input type="checkbox" name="checkbox[]" value="crying" id = "15" onclick="alertCheck('15')"> Frequent crying spells or suicidal thoughts<br>
				<input type="checkbox" name="checkbox[]" value="lonely" id = "16" onclick="alertCheck('16')">  Feelings of loneliness or worthlessness<br>
				<input type="checkbox" name="checkbox[]" value="Cold" id = "17" onclick="alertCheck('17')"> Cold or sweaty hands, feet<br>
				<p align="center">1/3</p>
				</p>
			</div>

			<div id = "questions2">
				<p>
				<input type="checkbox" name="checkbox[]" value="Lack of trying" id = "18" onclick="alertCheck('18')"> Little interest in appearance, punctuality<br>
				<input type="checkbox" name="checkbox[]" value="Nervous Ticks" id = "19" onclick="alertCheck('19')"> Nervous habits, fidgeting, feet tapping<br>
				<input type="checkbox" name="checkbox[]" value="Mouth" id = "20" onclick="alertCheck('20')"> Dry mouth, problems swallowing<br>
				<input type="checkbox" name="checkbox[]" value="Sick" id = "21" onclick="alertCheck('21')"> Frequent colds, infections, herpes sores<br>
				<input type="checkbox" name="checkbox[]" value="bumps" id = "22" onclick="alertCheck('22')"> Rashes, itching, hives, “goose bumps”<br>
				<input type="checkbox" name="checkbox[]" value="Allergy" id = "23" onclick="alertCheck('23')"> Unexplained or frequent “allergy” attacks<br>
				<input type="checkbox" name="checkbox[]" value="Angry" id = "24" onclick="alertCheck('24')"> Increased frustration, irritability, edginess<br>
				<input type="checkbox" name="checkbox[]" value="Overreacting" id = "25" onclick="alertCheck('25')"> Overreaction to petty annoyances<br>
				<input type="checkbox" name="checkbox[]" value="Accident Prone" id = "26" onclick="alertCheck('26')"> Increased number of minor accidents<br>
				<input type="checkbox" name="checkbox[]" value="pain" id = "27" onclick="alertCheck('27')"> Heartburn, stomach pain, nausea<br>
				<input type="checkbox" name="checkbox[]" value="OCD" id = "28" onclick="alertCheck('28')"> Obsessive or compulsive behavior<br>
				<input type="checkbox" name="checkbox[]" value="Belching" id = "29" onclick="alertCheck('29')"> Excess belching, flatulence<br>
				<input type="checkbox" name="checkbox[]" value="Work lacking" id = "30" onclick="alertCheck('30')"> Reduced work efficiency or productivity<br>
				<input type="checkbox" name="checkbox[]" value="poop" id = "31" onclick="alertCheck('31')"> Constipation, diarrhea, loss of control<br>
				<input type="checkbox" name="checkbox[]" value="Liar" id = "32" onclick="alertCheck('32')"> Lies or excuses to cover up poor work<br>
				<input type="checkbox" name="checkbox[]" value="Panic" id = "33" onclick="alertCheck('33')"> Difficulty breathing, frequent sighing<br>
				<input type="checkbox" name="checkbox[]" value="speech" id = "34" onclick="alertCheck('34')"> Rapid or mumbled speech<br>
				<p align="center">2/3</p>
				</p>
			</div>

			<div id = "questions3">
				<p>
				<input type="checkbox" name="checkbox[]" value="sudden" id = "35" onclick="alertCheck('35')"> Excessive defensiveness or suspiciousness<br>
				<input type="checkbox" name="checkbox[]" value="panic attack" id = "36" onclick="alertCheck('36')"> Sudden attacks of life threatening panic<br>
				<input type="checkbox" name="checkbox[]" value="Increase heart rate" id = "37" onclick="alertCheck('37')"> Chest pain, palpitations, rapid pulse<br>
				<input type="checkbox" name="checkbox[]" value="Block" id = "38" onclick="alertCheck('38')"> Problems in communication, sharing<br>
				<input type="checkbox" name="checkbox[]" value="Introvert" id = "39" onclick="alertCheck('39')"> Social withdrawal and isolation<br>
				<input type="checkbox" name="checkbox[]" value="Pee" id = "40" onclick="alertCheck('40')"> Frequent urination<br>
				<input type="checkbox" name="checkbox[]" value="Sex" id = "41" onclick="alertCheck('41')">  Diminished sexual desire or performance<br>
				<input type="checkbox" name="checkbox[]" value="Diet" id = "42" onclick="alertCheck('42')"> Weight gain or loss without diet<br>
				<input type="checkbox" name="checkbox[]" value="Tired" id = "43" onclick="alertCheck('43')"> Constant tiredness, weakness, fatigue<br>
				<input type="checkbox" name="checkbox[]" value="Druggie" id = "44" onclick="alertCheck('44')"> Frequent use of over-the-counter drugs<br>
				<input type="checkbox" name="checkbox[]" value="Anxiety" id = "45" onclick="alertCheck('45')"> Excess anxiety, worry, guilt, nervousness<br>
				<input type="checkbox" name="checkbox[]" value="Angry" id = "46" onclick="alertCheck('46')"> Increased anger, frustration, hostility<br>
				<input type="checkbox" name="checkbox[]" value="smoke" id = "47" onclick="alertCheck('47')"> Increased smoking, alcohol or drug use<br>
				<input type="checkbox" name="checkbox[]" value="food" id = "48" onclick="alertCheck('48')"> Increased or decreased appetite<br>
				<input type="checkbox" name="checkbox[]" value="gamble" id = "49" onclick="alertCheck('49')"> Excessive gambling or impulse buying<br>
				<input type="checkbox" name="checkbox[]" value="depression" id = "50" onclick="alertCheck('50')"> Depression, frequent or wild mood swings<br> <br>
				<p align="center">3/3</p>
				</p>

				<div class = "submit">
					<input type="submit" value="Submit">
				</div>
			</div>
		</form>
	</div>

<?php include 'footer.php';?>