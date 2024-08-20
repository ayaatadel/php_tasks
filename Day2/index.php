<?php
// echo "day2";

// array
// indexed array , multi dimension array, associtive array

// $x=array(1,2,3);
// $arr2=[1,15,20];
// echo "<br>",gettype($x),"<br>",gettype($arr2);

// indexed array => array can be managed using index

// echo $arr2[0];

// iteration on array => loop , foreach
// get length of array=> use function count
// $arr2=[1,15,20];
// for($i=0;$i<count($arr2);$i++)
// {
//     echo"value of index : $i = ", $arr2[$i],"<br>";
// }
// echo "values of array 2 using for each <br>";
// foreach ($arr2 as $key=>$value) {
//     # code...
//     echo"value of index : $key= ", $value,"<br>";
// }
// $x=["ayaat"];
// echo count($x);

// data type of values you can enter any data type of values
echo "<br>";
// add 
// $arr22=["ayaat",1,true,5.2];
// $arr22[]=5;
// $arr22[]=[2,36,15];
// print_r($arr22);
// echo "*******************************","<br>";
// array_push($arr22,2,"array_push",4); 

// $arr22[10]="nada";
// $arr22[]=5;
// $arr22[9]="eman";
// $arr22[]="1222222";
// array_unshift($arr22,"php g2");
// // print_r($arr22);
// echo "******************** after pop ***********","<br>";
// // remeove element from array
// array_pop($arr22);
// array_shift($arr22);
// // print_r($arr22);

// // ===========================
// echo "******************** after over write ***********","<br>";

// $arr22[1]="over write";
// print_r($arr22);
// echo "******************** after unset ***********","<br>";

// unset($arr22[1]);
// print_r($arr22);
// foreach ($arr22 as $key=>$value) {
//     # code...
//  echo"value of index : $key= ", $value,"<br>";
//     // echo "" $value;
// }

/************************   multi dimension array */

$arr = [[1, 2, 3], ["ayaat", "nada", 'eman'], [5, "mahmoud", "islam"]];
// echo $arr[0][1];
// foreach ($arr as $value) {
//     echo "<br>";
//     // print_r($value);
//     foreach ($value as $data) {
//         # code...
//         echo "$data ";    }
//     # code...
// }

// $arr[]="ayaat";
// $arr[]=["new","data"];
// array_push($arr,["ramy","lara"]);
// // array_pop($arr);
// // array_shift($arr);
// array_unshift($arr,["php","laravel"]);
// print_r($arr); 
// echo "******************** after unset ***********","<br>";

// unset($arr[0]);
// print_r($arr);


/********************     associative array => array [key ,value] */

// $arr=[
//     ["name"=>"ayaat","age"=>24,"address"=>"menofia"],
//     ["name"=>"mohammed","age"=>21,"address"=>"cairo"],
//     ["name"=>"mohmoud","age"=>25,"address"=>"giza"]

// ];
//    echo"<table border=1px >";
//    echo"<thead style='color:red'>";
//    echo"<tr>";
//    echo"<th>";
//    echo"name";
//    echo"</th>";
//    echo"<th>";
//    echo"age";
//    echo"</th>";
//    echo"<th>";
//    echo"address";
//    echo"</th>";

//    echo"</tr>";

//    echo"</thead>";
//    echo"<tbody>";

//     // var_dump($arr);
//     foreach ($arr as  $value) {
//         # code...
//         // print_r($value);
//         echo "<tr style='color:blue'>";
//         foreach ($value as $key => $data) {
//             # code...

//           echo "<td>";

//           echo "$data";
//           echo "</td>";







//         }
//         echo "</tr>";
//     }
//     echo "</tbody>";

//***************** */
// $arr=[
//     ["name"=>"ayaat","age"=>24,"address"=>"menofia"],
//     ["name"=>"mohammed","age"=>21,"address"=>"cairo"],
//     ["name"=>"mohmoud","age"=>25,"address"=>"giza"]

// ];

// foreach ($arr as $value) {
//     # code...
//     foreach ($value as $key => $data) {
//         # code...
//         echo"<br>";
//         // print_r($key);
//         if($data=="ayaat")
//         {
//             echo "heloo";

//         }

//     }
// }

// merege
// $arr1=[1,2,3];
// $arr2=[4,5,6,7];
// // $arr1=$arr1+$arr2;
// // print_r($arr1);
// // $arr1=array_merge($arr1,$arr2);
// print_r($arr1);
// print_r( array_merge($arr1,$arr2));
//Array ( [0] => 1 [1] => 2 [2] => 3 [2] => 7 )

// sort
// $arr=[110,22,"ayaat","eman","Zaher",3];
// // (asort($arr));
// arsort($arr);
// print_r ($arr) ;



// $arr = [
//     ["name" => "ayaat", "age" => 24, "address" => "menofia"],
//     ["name" => "mohammed", "age" => 21, "address" => "cairo"],
//     ["name" => "mohmoud", "age" => 25, "address" => "giza"]

// ];


// foreach ($arr as $value) {
//     # code...

//     foreach ($value as $key => $data) {
//         # code...
//         echo "<br>";
//         echo "$key :: $data";
//     }
//     echo "****************************";
// }
// $data=["name"=>"ayaat","age"=>24,"address"=>"menofia"];
// // asort($data);
// ksort($data);
// var_dump($data);



/************************ */

// function 
// bulid in function => sort ,merge

// user defined function


// function sum()
// {
//     echo "summation";
// }
// sum();
// function result()
// {
//  return 5+3; 
// }
// $outPut=result();
// echo($outPut);
// function add($num1,$num2)
// {
//  return $num1+$num2; 
// }
// echo add(5,9);


/// search with code 
// isSet , isempty => different between them
// task => callback , anonomous function ,recursive function