<?php 
// How to find even numbers in PHP


// echo "The even numbers are as of follows <br>";
// for($x=1;$x<=20;$x++){
//     if($x%2==0){
//         echo $x,"<br>";
//     }
// }
// How to find odd numbers in php
// for($x=1;$x<=20;$x++){
//         if($x%2==1){
//             echo $x,"<br>";
//         }
//      }
// To find prime numbers 



// echo "The even numbers are as of follows <br>";
// for($x=1;$x<=20;$x++){
//     if($x%2==0){
//         echo $x,"<br>";
//     }
// }

// $x=0;
// while($x<=10){
//     echo $x++,"<br>";
// }
// Prime number chcek in php


$n=100;
for($x=2;$x<=$n;$x++){
    for($y=2;$y<=$n;$y++){
       if($x%$y==0){
           break;
       }
      
    }
    if($x==$y){
        echo $x,"<br>";
    }
}
// $x=20;
// for($i=2;$i<=$x;$i++){
//     // echo $i,"<br>";
//     for($j=2;$j<=$x;$j++){
//         if($i%$j==0){
//            break;
//         }
        
//     }
//     if($i==$j){
//         echo "$i<br>";
//     }
    
// }
 
// How to find prime number in PHP 



?>
