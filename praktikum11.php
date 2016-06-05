<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
$y = 6;


echo $x + $y;echo "<br>";
echo $x - $y;echo "<br>";
echo $x * $y;echo "<br>";
echo $x / $y;echo "<br>";
echo $x % $y;echo "<br>";
// echo $x **$y;echo "<br>";
?>
    <hr>
    operator Assigment
    <hr>
    <?php
   $x = '10';
   $y = 10;
 
   $compare = $x==$y;
 var_dump($compare); echo "<br>";
   
   $compare = $x===$y;
   var_dump($compare); echo "<br>";
   
   $compare = $x != $y;
   var_dump($compare); echo "<br>"; 
  
   $compare = $x <> $y;
   var_dump($compare); echo "<br>" ;
   
   $compare = $x !== $y;
   var_dump($compare); echo "<br>";
   
   $compare = $x < $y;
   var_dump($compare); echo "<br>";
   
   $compare = $x > $y;
   var_dump($compare); echo "<br>";
   
   $compare = $x >= $y;
   var_dump($compare); echo "<br>";
   
   $compare = $x <= $y;
   var_dump($compare); echo "<br>";
    ?>
    
 
    
    
    <?php
    $x=5;
    $y=6;
    
    if($x>$y){
    echo "x lebih besar";
    }  else if ($x!=0){
    echo 
        "x tidak sama dengan 0";
    } else 
        {
        echo "x = 0";
        
        }
    ?>
    
    
    <?php
    $favcolor = "red";
    
    switch ($favcolor) {
    case "red":
        echo "you favorite color is red!";
        break;
    

    case "blue":
        echo "you favorite color is blue!";
        break;
    
    case "green":
        echo "you favorite color is green!";
        break;
   default:
    echo"you favorite color is neiter red,blue, not green!";
    }
    ?>
    
    
    
     <?php
     for ($x = 0; $x <=10; $x++){
 echo "the number is: $x <br>";
    }
    ?>
    
    
    
    <?php
     $x=1;
     while($x <= 5){
 echo "the number is: $x <br>";
 $x++;
    }
    ?>
  </body>
  </html>

