<?php

require_once 'dice.php';

$numDice = $_POST['numDice'];
$numSides = $_POST['sides'];

echo "<div style='height: 500px; width: 500px; border: 2px solid black; display: flex; flex-wrap: wrap; padding: 10px;'>";
for($i = 0; $i < $numDice; $i++) {

    $diceArray[] = new dice;
    $diceArray[$i]->numSides = $numSides;
    $diceArray[$i]->roll();
    echo $diceArray[$i];
}
echo "</div>";
