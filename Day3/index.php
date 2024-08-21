<?php

echo "<h style='color:red; text-align:center; margin:20px '>  OOP : Object Oriented Programming    </h> <br><br>";

// oop => methodology or way for bulid instructure of code
// == oop => depended on object
// oop is not a programming language


//  procedural programming => list of instructions  and execute it step by step
// == functions (block ) , lines of code

// object any thing have data , and can make operation on it
// == object => data , operation 
// == car => object , (data)=> color , model (operation) =>walk 
// == instance
// == class => consist of => properites , methods (functions)
// == blue print


// == create class in php => class ClassName{}
// each prroperity has access modifier => privilages 

// public  , static , private ,protected  

// class Human{
//  public $name;  // properity
//  public  $age;
//   function walk()
// {
//     echo "human can walk";
// }

// }

// handle class => deal with properities , methods => create object (instance) from class

// $h=new Human();
// $h->name="ayaat";
// $h->age=24;
// $h->walk();
// echo "<br>";
// print_r($h);

/// initial value for attributes
// constructor => function with out return => void


// class Human
// {
//     public $name;  // properity
//     public  $age;
//     // $h=new Human();
//     // $h->name="ayaat";
//     // function __construct() // function (initial value)
//     // {
//     //     // this=> variable refer on current object
//     //     $this->name="ayaat";
//     //     $this->age=25;
//     // }
//     function walk()
//     {
//         echo "human can walk";
//     }
// }
// $h = new Human();

// // access properity and change value of it
// $h->name = "eman";
// print_r($h);


//  parametarized constructor
// class Human
// {
//     public $name;  // properity
//     public  $age;
  
//     function __construct($name="ayaat",$age=25) // function (initial value)
//     {
//         // this=> variable refer on current object
//         $this->name=$name;
//         $this->age=$age;
//     }
  
//     function walk()
//     {
//         echo "human can walk";
//     }
// }

// $h=new Human("eman");
// // $h->age=30;
// print_r($h);


/**
 * constructor => default constructor == we don't write code of it
 * default constructor => call when we create object from class
 * parameratized constructor => contructor(parameters)
 * not parametarized constructor (no-args constructor)=> intial value, and if i want to print any thing 
 */


//  priceples of OOP 
/**
 * Inhertance
 * Incapsulation
 * Polymorphism
 * Abstraction
 */


 // Incapsulation =>(كبسوله)=> save data
 // Access modifier (
//  public => default (function , properity)=>any one can handle
//  , private => only in class can handel it=> can not be inherite, 
// protected => private => can be inhirite,
// static => any update can be heared , chage after update)

// incapsulation => save data of class => private

// class Human
// {
//     public $name;  // properity
//     private  $age;
  
//     function __construct($name="ayaat",$age=25) // function (initial value)
//     {
//         // this=> variable refer on current object
//         $this->name=$name;
//         $this->age=$age;
//     }

//     function setAge($age)
//     {
//         $this->age=$age;
         
//     }
//     function getAge()
//     {
//         return $this->age;
//     }
  
//     function walk()
//     {
//         echo "human can walk";
//     }
// }

// $h=new Human();
// $h->setAge(26);
// print_r($h->getAge());
// 

// Inheritance  => inherite from parent to prevent dublication of data

/** 
 * Inheritance
 * single inheritance  => parent >chiled => permitted in php
 * multiLevel inheritance =>pareent > child > chile => permitted in php 
 * multible inheritance =>not permitted in php
 * hichracal inheritance =>paarent >>chiled => permitted in php
 * hypered inheritacne => not permitted in php
 */


 // **********  Single Inheritance
//  class Human{
//    public $name;
//    public $age;
//    function __construct($name="nada",$age=26)
//    {
//     $this->name=$name;
//     $this->age=$age;
    
//    }
   
//    function printData()
//    {
//     echo "name is : $this->name and your Age is : $this->age";
//    }
    
  


// }

//  class Person extends Human{
//     public $address;
//     public $email;
//     function __construct($name="mohammed",$age=27,$address="cairo",$email="mohammed@gmail.com")
//     {
//     //  $this->name=$name;
//     //  $this->age=$age;
//      Parent::__construct($name,$age);
//      $this->address=$address;
//      $this->email=$email;
     
//     }
//     function printData() // prototype (declation => name,number of parameter)
//     {
//         // body => return
//      echo "name is : $this->name <br> and your Age is : $this->age <br>
//       address is : $this->address <br> email is : $this->email ";
//     }

//  }
// $p=new Person();
// $p->printData();
 /**
  * constructor can not be inherit
  */

/**
 * Polymorphism => overriding , overloading
 * overRiding => same name (prototype) but different body=> accepted in php
 * 
 * overLoading=> different in prototype => not permitted in php
 * same name but different in parameters
 */


 /** MultiLevel Inheritance 
  * parent>subClass>subclass
 */

//  class Animal {
//     protected $name;
//     function __construct($name="animal Name")
    
//     {
//        $this->name=$name; 
//     }
//     function eat()
//     {
//         echo "animal eat";
//     }
//  }

//  class Mammel extends Animal{
//     public $type;
//     function __construct($name,$type="mammel type")
//     {
//         parent::__construct($name);
//         $this->type=$type;
        
//     }
//     // function eat()
//     // {
//     //     echo "<br> $this->name is eat <br>";
//     // }
//     function sleep()
//     {
//         echo "<br> $this->name is sleep <br>";
//     }
//  }

//  class Dog extends Mammel{
//     function bark()
//     {
//         echo "<br> $this->name is park <br>";
//     }
//  }

//  $d=new Dog("dog");

//  $d->bark();
//  $d->eat();
//  $d->sleep();


// static ==> save update on data

class Counter
{
    // static => part of class , shared on all objects on same class
    static $count=0;
    function __construct()
    {
        // key word => refer to same class
    //    Counter::$count++;
       self::$count++;
    }

}

$c=new Counter();
echo "count 1 : ",Counter::$count ," <br>";
$c2=new Counter();
echo "count 1 : ",Counter::$count ," <br>";







