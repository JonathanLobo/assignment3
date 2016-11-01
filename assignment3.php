<?php
	require_once 'ChildClass.php';

	$teamOne = new ChildClass("Philadelphia", "Eagles", 7, 9);

	$teamTwo = clone $teamOne;

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Assignment 3</title>

		<link rel="stylesheet" href="assignment3.css">

	</head>
	<body>
		<h1>NFL News Report</h1>

	  <section>
			<div>
		    <h3>The Philadelphia Eagles had a rough season in 2015.</h3>
		    <p><?= $teamOne; ?></p>

		    <p>Not satisfied with the results, the team fired their coach and had high expectations for the next season.</p>
		    <?= $teamOne->resetRecord(); ?>
			</div>

			<br>

			<div>
				<h3>The 2016 season started well!</h3>
				<?= $teamOne->setWins(4); ?>
				<?= $teamOne->setLosses(2); ?>
				<p><?= $teamOne; ?></p>

				<p>However, the winning stopped there.</p>
				<?= $teamOne->setLosses(12); ?>
				<p><?= $teamOne; ?></p>

		    <p>Fed up with the losing, the team's owners decided to move the franchise to a more lucrative market and rebrand the team.</p>
				<?= $teamOne->resetRecord(); ?>
				<?= $teamOne->setCity("Delaware"); ?>
				<?= $teamOne->setMascot("Ladybugs"); ?>
			</div>

			<br>

			<div>
		    <h3>The 2017 season began well again...</h3>
				<?= $teamOne->setWins(7); ?>
				<?= $teamOne->setLosses(1); ?>
				<p><?= $teamOne; ?></p>

		    <p>This time, motivated by the suddenly large fanbase, the team finished the season strong.</p>
		    <?= $teamOne->setWins(13); ?>
				<?= $teamOne->setLosses(3); ?>
				<p><?= $teamOne; ?></p>

				<h3>They went on to win the Super Bowl!</h3>
			</div>

			<br>

			<div>
				<h3>It's hard to believe that only 2 years ago...</h3>
				<p><?= $teamTwo; ?></p>
			</div>

		</section>

		<footer>
			<p>&copy; Jonathan Lobo, 2016</p>
		</footer>

	</body>
</html>
