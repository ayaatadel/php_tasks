<?php 

/** connection with data base
 * ==> mysqli , PDO
 * mySqli => only with mySql database , deprecated => mySql v5
 * PDO => deal with different types of data ,
 * == postgree , mySql , , sqlLite , sql server
 * 
 * ============= use => PDO 
 * 
 * 
 * set up of connection =>
 * cardtionals => 
 * database type
 * host
 * database name
 * user name
 * password
 * 
 */

$host="localhost";
$dbType="mysql";
$dbName="test";
$userName="root";
$password="";

$connection=new PDO("$dbType:host=$host;dbname=$dbName",$userName,$password);

// print_r($connection);
$query="select * from users"; // string , ==> query
// var_dump($query);
$sqlQuery=$connection->prepare($query); // convert to sql Query
// var_dump($sqlQuery);
$sqlQuery->execute();// run 

$result=$sqlQuery->fetchAll(PDO::FETCH_ASSOC); // get data
print_r($result); // print data









?>