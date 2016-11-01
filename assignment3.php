<?php
	include 'ChildClass.php';

	$teamOne = new ChildClass("Philadelphia", "Eagles", 7, 9);

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
	    <p>The Philadelphia Eagles had a rough season in 2016.</p>
	    <?= $teamOne; ?>

	    <p>Not satisfied with the results, the team fired their coach and had high expectations for the next season.</p>
	    <?= $teamOne->resetRecord(); ?>

			<p>The 2016 season started well!</p>
			<?= $teamOne->setWins(4); ?>
			<?= $teamOne->setLosses(2); ?>
			<?= $teamOne; ?>

			<p>However, the winning stopped there.</p>;
			<?= $teamOne->setLosses(12); ?>
			<?= $teamOne; ?>

	    <p>Fed up with all the losing and falling ticket sales, the team's owners decided to move the franchise to a more lucrative market and rebrand.</p>
			<?= $teamOne->resetRecord(); ?>
			<?= $teamOne->setCity("Delaware"); ?>
			<?= $teamOne->setMascot("Ladybugs"); ?>

	    <p>The season began well again...</p>
	    <?= $teamOne; ?>
			<?= $teamOne->setWins(5); ?>
			<?= $teamOne->setLosses(1); ?>

	    <p>This time, motivated by the suddenly large fanbase, the team finished the season strong.</p>
	    <?= $teamOne->setWins(13); ?>
			<?= $teamOne->setLosses(3); ?>
			<?= $teamOne; ?>

	    <p>They went on to win the Super Bowl!</p>

		</section>
	</body>
</html>
