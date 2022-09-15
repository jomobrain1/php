<?php
//inheritance
require_once'./Developer.php';
require_once'./Mentor.php';

$mentor=new Mentor("Kotlin","microsoft","DCW453");
echo $mentor->MentorId.'<br>';
echo var_dump($mentor).'<br>';
echo $mentor->getAge();


// What is class and instance
class Person{
    public $name;
    public $email;
    private $age;
}
$p=new Person();
$p->name="jomobrain1";
$p->email="jomobrain1@gmail.com";
echo '<pre>';
echo var_dump($p);
echo '</pre>';
$p2=new Person();
$p2->name="raymondZiro";
$p2->email="rayMond@gmail.com";
echo '<pre>';
echo ($p2->name);
echo '</pre>';
///===================new Class=============

$d=new Developer('jomobrain1','google');
echo $d->company .'<br>';

$d->setSalary(634834);
echo $d->getSalary().'<br>';

echo Developer::getCounter().'<br>';
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter