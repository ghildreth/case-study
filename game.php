<?php

$word1 = strtolower($_POST["word1"]);
$word2 = strtolower($_POST["word2"]);
$word3 = strtolower($_POST["word3"]);
$randomString = $_POST["randomString"];
// echo $randomString;

// function searchString($pattern, $source) {
//     $patLen = strlen($pattern);
//     $sourLen = strlen($source);

//     for($i = 0; i < $sourLen-$patLen; $i ++) {
//         $j = 0;
//         while($j < $patLen && $source[$i+$j] == $pattern[$j]) {
//             $j ++;
//         }
//         if($j == $patLen) return $i;
//     }
//     return -1;
// }
// echo(searchString('gab', $randomString));


function searchSubString($pattern, $source) {
    $sourLen = strlen($source);
    $counter = 0;
    $result = [
        $pattern[0] => 0,
        $pattern[1] => 0,
        $pattern[2] => 0
    ];

    foreach ($pattern as $val) {
        $associativeResult = array_keys($result);
        $patLen = strlen($val);
        for( $i = 0; $i <= $sourLen - $patLen; $i ++) {
    
            for($j = 0; $j < $patLen; $j ++) 
                if($source[$i + $j] != $val[$j])
                    break;
                if($j == $patLen && $patLen != 0) {
                // echo "Pattern (${val}) found at index ${i}\n";
                    if(in_array($val, $associativeResult)) {
                        $result[$val] += 1;
                    } else {
                        $result[$val] = 0;
                    }
                
                }
        }
    }

    var_dump($result);
}
$arrayOfStrings = [$word1, $word2, $word3];
echo $arrayOfStrings;
echo searchSubString($arrayOfStrings, $randomString);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <title>Game Time!</title>
</head>
<body>
<div>
<h1>Word 1: <?php echo $word1; ?></h1><br>
<h2>Word 2: <?php echo $word2; ?></h2><br>
<h3>Word 3: <?php echo $word3; ?></h3>
<h4><?php echo $randomString ?></h4
</div>


<a href="/index.php">Play Again?</a>



</body>
</html>