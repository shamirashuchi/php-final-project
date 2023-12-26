<?php


namespace App\classes;
use App\classes\Car;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Subject;
class Home extends Teacher implements ExampleOne, ExampleTwo
{
    use Subject;
    //these are non static property
    public $message;
    protected $data;
    private $number;
    //this is static property
    public static $address;

     public function __construct()
     {
         $this->message = "This is a message";
         $this->data  = "This is data";
         $this->number = "This is number";
         $this->carName = "Honda Crv";
         self::$address = "Dhaka";
     }
     public static function update()
     {
         echo "in update";
     }

    public function index()
    {
        //:: called scope resolution property for static method
        echo self::$address;
    }
    protected function create()
    {
        echo "In create";
    }
    private function manage()
    {
        echo "In manage";
    }
//    Home:: dileo static method er khetre object create hoy
    //multiple trait can be use in same class
    //use method can be done through inheritance
    //use method can be done through polymorphism and can change or modify or overriidddddre the method
    //interface can declare body but can not give body
    //kono class interface implement korle oi class e interface er method define korte hoy
    //we can not direct create object of abstruct class. so we can secure core concept or method in abstruct class
    //extends abstract class from any class to create object and use method of abstruct class. abstruct class can implements interface
    public function One()
    {
        echo "Hello One";
    }

    public function Two()
    {
        echo "Hello Two";
    }

    public function Three()
    {
        echo "Hello Three";
    }

    public function test()
    {
        // TODO: Implement test() method.
    }

    public function demo()
    {
        // TODO: Implement demo() method.
    }

    public function hello()
    {
        // TODO: Implement hello() method.
    }

    public function bitm()
    {
        // TODO: Implement bitm() method.
    }
}