<?php
//Mentor extends Developer

class Mentor extends  Developer{

    public string $MentorId;



 public function __construct($language,$company,$MentorId)
 {
    

    parent::__construct($language,$company);
    $this->age=24;
    $this->MentorId=$MentorId;
 }



}