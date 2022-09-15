<?php
class Developer{
    public $language;
    public $company;
    private $salary;
    protected ?int $age;
    public static $counter=0;
    public  function __construct($language,$company)
    {
     
       $this->language=$language;
       $this->company=$company;
       $this->age=null; 
       self::$counter++;
    //    echo $language. ' : '.$company;
    }
    //setter and gettErs
    public function setSalary($salary){
     $this->salary=$salary;
    }

    public function setAge($age){
        $this->age=$age;
    }
     
    public function getSalary(){
       return $this->salary;
    }
    
    public function getAge(){
        return $this->age;
    }
    public static function getCounter(){
     return self::$counter;
    }
}