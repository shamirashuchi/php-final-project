<?php


namespace App\classes;


class Student
{
         public $students = [];

         public function __construct()
         {

             $this->students = [
                 0 => [
                     'id' => 1,
                     'name' => 'Rahiul Islam',
                     'email' => 'Kalam@gmail.com',
                     'mobile' => '33333'
                 ],
                 1 => [
                     'id' => 2,
                     'name' => 'Kalam Islam',
                     'email' => 'Rahim@gmail.com',
                     'mobile' => '5555'
                 ],
                 2 => [
                     'id' => 3,
                     'name' => 'Ashik Islam',
                     'email' => 'Ashik@gmail.com',
                     'mobile' => '6666'
                 ],
                 3 => [
                     'id' => 4,
                     'name' => 'Mezba Islam',
                     'email' => 'Mezba@gmail.com',
                     'mobile' => '7777'
                 ]
             ];
         }
         public function getAllStuddent()
         {
             return $this->students;
         }
}