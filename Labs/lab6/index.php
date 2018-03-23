<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $numberofHobbits = 1;

    switch ($numberofHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }
    ?>
    </p>
<p>
    <?php

    $myage = 22;

    if ($myage >= 16){
        echo "You can buy specs";
        if ($myage >= 18)
        echo "You can buy mugs";

    if ($myage >= 21)
        echo "You can buy sausage";
    }
    else {
        echo "You cant buy";
    }
    ?>
</p>

<p>
    <?php
    $wantedgood = "sausages";

    switch ($wantedgood){
        case "mugs":
            echo "You have to be 16 to buy specs";
            break;
        case "specs":
            echo "You have to be 18 to buy mugs";
            break;
        case sausages:
            echo "You have to be 21 to buy sausages";
            break;
    }
    ?>
</p>
<p>
    <?php
    $provisionedActivity = array("specs","mugs","sausage rolls");

    foreach ($provisionedActivity as $x){
        print "<p>$x</p>";
    }
    unset($provisionedActivity[3]);
    echo $provisionedActivity[3];
?>
</p>

</body>
</html>