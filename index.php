<!DOCTYPE html>
<html>
<head>
  <title>RPG game</title>
<!-- reset style  -->
<link rel="stylesheet" type="text/css" href="reset.css">
<!--main style -->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
<img id="ani1" src="1.jpg" alt="animal1" height="200px" width="200px">
<img id="ani2" src="2.jpg" alt="animal2" height="200px" width="200px">
<img id="ani3" src="3.jpg" alt="animal3" height="200px" width="200px">
<img id="ani4" src="4.jpg" alt="animal4" height="200px" width="200px">
</div>

<div class="explain">
<h2>How to Play</h2>
<p>
Each character in the game has 3 attributes: Health Points, Attack Power, and Counter Attack Power.<br>
Each time the player attacks, their character's Attack Power increases by its base Attack Power. So if the base Attack Power is 6, each attack will increase the Attack Power by 6. (12, 18, 24, 30 etc...)<br>
The enemy character only has Counter Attack Power and their Counter Attack Power never changes.<br>
The Health Points, Attack Power, and Counter Attack Power of each character will be different.
None of the characters in the game can heal or recover Health Points, so the point of the game is to pick a character and fight an enemy that has low Counter Attack Power first and build up your own Attack Power before you lose all your Health Points.<br>
Depending on game play, you can win or lose with any of the characters in the game.</p>
</div>

<?php

$player1 = array(19,33,24);
$player2 = array(44,22,18);
$player3 = array(26,33,22);
$player4 = array(33,22,12);



?>


</body>
</html>