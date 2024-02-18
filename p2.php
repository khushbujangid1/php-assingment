<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=5; //global x
    function myTest(){
        $x=4; //local x
        echo "the value of x inside is $x";
        echo "<br>"; 
    }
    myTest();
    echo "the value of x outside is $x";
    ?>
</body>
</html>