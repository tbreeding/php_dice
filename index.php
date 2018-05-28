<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dice Roll</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="post" action="createDice.php">
        <input type="radio" name="sides" value="4" />4
        <input type="radio" name="sides" value="6" />6
        <input type="radio" name="sides" value="10" />10
        <input type="radio" name="sides" value="20" />20
        <input name="numDice" type="number" />
        <input name="submit" type="submit" />

    </form>
</body>
</html>