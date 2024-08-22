<?php   


echo "<h1 style='color:blue ; text-align:center margin-top: 15px;'>welcome from server <h1>";
// form => get data
        // => put data (post data)

//  print_r($_POST);


// include('connection1.php');
require('connection.php');
// $query="select * from users"; // string , ==> query
// // var_dump($query);
// $sqlQuery=$connection->prepare($query); // convert to sql Query
// // var_dump($sqlQuery);
// $sqlQuery->execute();// run 
// $patternName='/^[a-zA-Z ]{3,}$/';
// $pattern='/^[0-9]{3,8}$/';
// $hashPassword=md5($password);
// if(!preg_match($pattern,$password)) 
// {
//    header("location:register.php?message=your password should be between 3 and 8 characters");
//    exit;
// }
// $result=$sqlQuery->fetchAll(PDO::FETCH_ASSOC); // get data
// print_r($result);
if(isset($_POST['RegButton']))
{
    // echo "register";
    $name=$_POST["userName"];
    $email=$_POST["userEmail"];
    $password=$_POST['userPassword'];

    // validation => data
    // name> 3characters
    // regix => regular expression => 
    $patternName="/^[a-zA-Z ]{3,}$/";
    // https://www.w3schools.com/php/php_regex.asp
    if(!preg_match($patternName,$name))//Perform a regular expression match
    {
        header("location:register.php?message=Your name must  be more than 3 characters");
        exit;

    }

    $patternPassword="/^[0-9]{3,8}$/";
    if(!preg_match($patternPassword,$password))//Perform a regular expression match
    {
        header("location:register.php?message=Your password must  be between 3 to 8 numbers");
        exit;

    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))//Perform a regular expression match
    {
        header("location:register.php?message=enter valid email");
        exit;

    }
    $encPassword=md5($password);


    $checkEmail="select * from users where email='$email'";
    $EmailQuery=$connection->prepare($checkEmail);
    $EmailQuery->execute();
    $result=$EmailQuery->fetch(PDO::FETCH_ASSOC);
    if($result)
    {
        header("location:register.php?message=Email already exist choose another email");
        exit;
    }else{
         // $query="insert into users(name,email,password)values('$name','$email','$password')";
    $query="insert into users(name,email,password)values('$name','$email','$encPassword')";
    // print_r($query);
    $sqlQuery=$connection->prepare($query);
    $sqlQuery->execute();
    }

    

   
  
}

if(isset($_POST['LogButton']))
{
  
    $email=$_POST["userEmail"];
    $password=$_POST['userPassword'];
    $encPassword=md5($password);
    $query="select * from users where email='$email' and password='$encPassword'";
    // $query="select * from users where email='$email' and password='$password'";
    $sqlQuery=$connection->prepare($query);
    $sqlQuery->execute();
    $exitUser=$sqlQuery->fetch(PDO::FETCH_ASSOC);
    if($exitUser)
    {
        header("location:profile.php");
        exit;
    }else{
        header("location:login.php?message=UserName or Email doesn't exist");
        exit;
    }

}




?>