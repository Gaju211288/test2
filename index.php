<?php
// prime number ...
// which number divisible by itself and 1 and 0 and 1 is not prime number 
// 2 is natural prime number..
// 2 , 5, 3 ,7, 11


// function checkPrime($num){

//     if($num == 1)
//         return 0;

//     for($i = 2; $i <= $num/2; $i++){

//         if($num % $i == 0)
//             return 0;
//     }

//     return 1;

// }

// $num = 6 ;
// $chkValue = checkPrime($num);

// if($chkValue == 1)
//     echo "$num is prime number";
// else
//     echo "$num is non prime number";


//calculate 15 prime number..

// $count = 0;
// $num = 2;

// while($count < 15){
//     $divCount = 0;

//     for ($i=1; $i <= $num ; $i++) { 
//         // code...
//         if($num % $i == 0 ){

//             $divCount++;
//         }

//     }
//     if( $divCount < 3){

//         echo $num.", ";
//         $count = $count + 1;
//     }

//     $num = $num + 1;
    
// }

//sum of digit 23


// $num = 28;
// $rem = 0;
// $sum = 0;
//  for ($i=0; $i <= strlen($num); $i++) { 
//     // code...
//     $rem = $num % 10;
//     $sum = $sum + $rem;
//     $num = $num /10 ;
//  }

//  echo "$sum is sum";
 
 // $number = [2, 4 , 20];
 // $sum = 0;
 
 // foreach( $number as $num){

 //        $sum = $sum + $num;
        
 // }

 // print_r($sum);

 //print_r(array_sum($num));

//Even number ..

// $num = 23;

// if($num % 2 == 0)
//     echo "$num is Even number";
// else
//     echo "$num is Odd number";

// $number = [4, 5, 6, 7];
// foreach ($number as $key => $num) {
//     // code...

//     if($num % 2 == 0){
//         echo "$num is prime number";
//         echo "<br/>";
//     }else{
//         echo "$num is odd number";
//         echo "<br/>";
//     }
// }

// $num = 20;

// for($i = 1; $i <= 9; $i++){

//     $result = $num * $i;  
//     echo $result ;
//     echo "<br/>";  
// }

//Factorial

// $num = 6;
// $factorial = 1;
// for ($i=1; $i <= $num ; $i++) { 
//     // code...
//     $factorial = $factorial * $i;
// }
// print_r($factorial);

//fibbonacci series..

//0 1 1 2 3 5 8 13 21 34

// $n1 = 0;
// $n2 = 1;
// $count = 0;
// echo $n1.', '.$n2.', ';

// while ($count < 10) {
//     // code...
//     $n3 = $n2 + $n1;
//    echo $n3.', ';
//     $n1 = $n2;
//     $n2 = $n3;
//     $count = $count + 1;
// }

//reverse number..
// $num = "Gajanan";


// for ($i= strlen($num)-1; $i >= 0 ; $i--) { 
//     // code...
//     echo $num[$i];
// }

$num = ['2','3','4','5','6']; 

//foreach($number as $key => $num){
$test = array();
    for ($i= count($num)-1; $i >= 0 ; $i--) { 
        // code...
        $test[] =  $num[$i];
    }
//}

    print_r($test);