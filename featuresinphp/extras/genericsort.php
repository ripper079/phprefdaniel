<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generic sort and Filter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h5>Generic sort and filter</h5>
    <?php

    $fnFilterUnderAge =
    function ($age) {
        return $age >= 18;
    };

    $fnSortAcending =
    function ($compVarOne, $compVarTwo) {
        if ($compVarOne == $compVarTwo) {
            return 0;
        }

        return ($compVarOne < $compVarTwo) ? -1 : 1;
    };

    $ages = [13,2,67,12,45,25,75,56,12,7,4,71];

    
    //This FILTERS the array
    $filteredArray = array_filter($ages, $fnFilterUnderAge);

    //Copy the array first
    $sortedArray = $filteredArray;
    //This actually modifies and SORT the $sortedArray
    usort($sortedArray, $fnSortAcending);


    ?>
    
    <?php foreach ($sortedArray as $kid) : ?>
        <h6>Person is= <?= $kid ?></h6>
    <?php endforeach; ?>

</body>
</html>
