<?php   
    /** 
     * comment
     * //hhhh => single line
     * # ===> single line
     * /**  multi line*/


// variables 
// integer , string , boolean , object , array

// $x=5; // php losely type language

// gettype($x); // get data type of parameter

// print => echo print

// echo $x,"dattype of variable is :" ,gettype($x) , "<br>"; // can take multi parameter
// print  gettype($x); // tacke only single parameter

/************** parsing => covert from data type to another data type */
// settype($x,'string'); 
// $x=(string)$x;
// echo $x,"dattype of variable is :" ,gettype($x) , "<br>";



// int double float string array object boolean

/**  methods to check data type of variable   out put of this function => true or false*/

// $x="25";
// echo(is_int($x));
// is_float($x);
// is_double($x);
// is_array($x);
// is_string($x);
// is_object($x);
//]
// var_dump(is_int($x),"<br>");
// var_dump($x);



// $arr=[1,2,30];
// // echo $arr;
// print_r ($arr,"welcome in php");
//  echo "<br>";
//  var_dump($arr,"welcome in php");

/**
 * print =>  single parameter and sigle value not array or bject
 *  echo => string (sigle value not array or bject)and multi parameter
 * print_r=> array and it print lenght and value ,single parameter
 * var_dump => array and it print lenght and value and datatype, multi parameter 
 * 
*/


// operators 
/**
 * arethmatic operator (+,-,*,/,%,**)
 * comparison operator  (<,<,>=,<=,!=,== (compare between value),===(compare between value and data type),>>,<==>)
 */

// $x=5;
// $y=10;
// var_dump($x++); // 5
// var_dump(++$x); // 7
// $y="5";
// var_dump($x===$y);

// $x+=$y;//==> $x=$x+$y
// $x++;=> $x=$x+1;
// $x+=1; $x=$+1;


///   conditional statement  => if ,if else ,if ifelse else
// $var1=5;
// $var2=5;
// if($var1>$var2)
// {
//     echo "$var1 greater than $var2 ";

// }else{
//     echo "$var1 less than $var2 ";

// }
// if($var1>$var2)
// {
//     echo "$var1 greater than $var2 ";

// }elseif ($var1<$var2) {
//     echo "$var1 less than $var2 ";
// }else{
//     echo "$var1 equql $var2 ";
// }




// $grade=85;
// nested if
// if($grade>=50 && $grade <65)
// {
//     echo "D <br>";
// }elseif($grade>=65 && $grade <75)
// {
//     echo "C <br>";

// }
// elseif($grade>=75 && $grade <85)
// {
//     echo "B <br>";

// }
// elseif($grade>=85 && $grade <=100)
// {
//     echo "A <br>";

// }else{
//     echo " sorry failllll <br>";

// }

// switch
// $grade=85;

// switch ($grade) {
//     case $grade>=50 && $grade <65:
//         echo " D <br>";

//         break;
//     case $grade>=65 && $grade <75:
//         echo " c <br>";

//         break;
//     case $grade>=75 && $grade <85:
//         echo " b <br>";

//         break;
//     case $grade>=85 && $grade <100:
//         echo " A <br>";

//         break;
    
//     default:
//         echo " sorry failllll <br>";

//         break;
// }


// looops  => for , while , do-while


// $var=5;
// print(1,1,3,4,5,6,...,15);
// for($i=0;$i<=$var;$i++)
// {
//     echo $i ,"<br>"; 
// }
// $i=2;
// // while($i<=$var)
// // {
// //     echo $i ,"<br>"; 
// //     $i+=1;
// // }


// do {
//     echo $i ,"<br>"; 
//     $i+=1;

// } while ($i <= $var);



// define('x','ayaat');
// echo x;

// $x=150;
// echo $x;












?>