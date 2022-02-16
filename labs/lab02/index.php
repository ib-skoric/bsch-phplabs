<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Q1
        $string = "The quick brown jumps.";
        $brown = " brown";
        echo substr_replace($string, $brown, 9, 0);
        
        echo "<br/>";

        //Q2
        $fruit = array('orange', 'apple', 'mango', 'banana');
        sort($fruit);
        foreach ($fruit as $frt) 
        {
            echo ucfirst($frt) . "<br/>";
        }

        // Q3 
        $samplestring = "230037";
        $endstring = substr($samplestring, 0,1) . ":" . substr($samplestring, 2,3) . ":" . substr($samplestring, 4,5);
        echo $endstring
    ?>
</body>
</html>