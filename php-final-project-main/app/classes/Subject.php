<?php


namespace App\classes;

//interface,abstract,trait can not make object
trait Subject
{
    public $subjectName = 'English';
    public $subjectCode = '112';
    public $hour = '200';
    public function  getSubjectCode()
    {
        echo $this->subjectCode;
    }
    public function  getSubjectName()
    {
        echo $this->subjectName;
    }
}