<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Level 1 Practice</title>
    
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="main">
        <h1 class="title">PHP Level 1 Practice</h1>
        <p>This is to show what I have learnt so far.</p>

    <?php
    //Sample Array
    $fruits = ["Apple", "Banana", "Orange"];
    echo "<h2>Arrays</h2>";
    echo "<p> Here is a sample array of fruits:";
    print_r($fruits);
    echo "</p>";

    //Sample Function
    function multiply($no1, $no2){
        return $no1 * $no2;
    }
    echo "<h2>Functions</h2>";
    echo "<p> 103 multiply by 45 gives us: " . multiply(103,45) . "</p>";

    //Booleans and If-Else Statements
    $isFruitSweet = true;
    echo "<h2>Booleans and If-Else Statements</h2>";
    if($isFruitSweet){
        echo "<p>Fruits are sweet.</p>";
    } else {
        echo "<p>Fruits are not sweet.</p>";
    }

    //Foreach Loops
    echo "<h2>Foreach Loops</h2>";
    echo "<p> Listing all fruits in a foreach loop:</p>";
    foreach ($fruits as $fruit){
        echo "<li>$fruit</li>";
    }

    //Associative Arrays
    $fruitColours = [
            "Apple" => "Red",
            "Banana" => "Yellow",
            "Orange" => "Orange"
    ];
    echo "<h2>Associative Arrays</h2>";
    echo "<p>Fruits and their colours:</p>";
    foreach ($fruitColours as $fruit => $colour){
        echo "<li>$fruit is $colour</li>";
    }
    ?>
    </div>
</body>
</html>