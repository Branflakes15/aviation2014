<!DOCTYPE html>
<html>
	<head>
		<title>Aviation</title>
		<link rel="stylesheet" type="text/css" href="css/flashcard.css">
	</head>

	<body onload="grid()">
		<div class = "menu">
			<a href="main.php"><img src="images/menu.png" alt="menu"></a>
		</div>

		<div id="content">
			<div class="card" id="card1">
				<div class="word"></div>
					
				<br>

				<section>					
					<img class="imageBorder" alt="image of word">					
				</section>
				
				<div class="desc">
					
				</div>
			</div>
			
			<div>
				<img id="prev" src="images/left.png" alt="back button">
				<img id="audioIcon" src="images/audioicon.png" alt="audio icon to hear word">
				<audio id="audioPlay"></audio>
				<img id="next" src="images/right.png" alt="forward button">
			</div>
		</div>

		<script src="http://code.jquery.com/jquery.js"></script>
		<?php
			require 'sectionGrabber.php';
		?>
		<script>
			$(document).ready(function() {
				$("#prev").click(function () {
					prev();
				});

				$("#next").click(function () {
					next();
				});

				$("#audioIcon").click(function() {
					document.getElementById("audioPlay").load();
					document.getElementById("audioPlay").play();	
				});
			});
		</script>
	</body>
</html>