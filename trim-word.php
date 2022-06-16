<?php


// function paragraphTrim($paragraph){
        
//          return $word;
// }

function paragraphTrim($para,$numberOfWord=20){
    $totalWordArray = str_word_count($para,1);
    for($i=1;$i<$numberOfWord;$i++){
        echo $totalWordArray[$i]." ";
    }

}
?>

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

 
$paragraph = "<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis maxime delectus illum saepe reprehenderit eius placeat deleniti eveniet cum modi. Molestiae nam facilis iste reprehenderit error, tempore assumenda rerum deleniti</h1>";
paragraphTrim($paragraph);

?>




<?php

$paragraph1 = "<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis maxime delectus illum saepe reprehenderit eius placeat deleniti eveniet cum modi. Molestiae nam facilis iste reprehenderit error, tempore assumenda rerum delenitiLorem ipsum dolor sit amet consectetur adipisicing elit. Debitis maxime delectus illum saepe reprehenderit eius placeat deleniti eveniet cum modi. Molestiae nam facilis iste reprehenderit error, tempore assumenda rerum delenitiLorem ipsum dolor sit amet consectetur adipisicing elit. Debitis maxime delectus illum saepe reprehenderit eius placeat deleniti eveniet cum modi. Molestiae nam facilis iste reprehenderit error, tempore assumenda rerum deleniti</h1>";
echo paragraphTrim($paragraph1,5);

?>
    
</body>
</html>