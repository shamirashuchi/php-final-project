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
                     'mobile' => '33333',
                     'roll' => '101',
                     'image' => 'assets/img/2.jpg'
                 ],
                 1 => [
                     'id' => 2,
                     'name' => 'Kalam Islam',
                     'email' => 'Rahim@gmail.com',
                     'mobile' => '5555',
                      'roll' => '102',
                     'image' => 'assets/img/3.jpg'
                 ],
                 2 => [
                     'id' => 3,
                     'name' => 'Ashik Islam',
                     'email' => 'Ashik@gmail.com',
                     'mobile' => '6666',
                     'roll' => '103',
                     'image' => 'assets/img/2.jpg'
                 ],
                 3 => [
                     'id' => 4,
                     'name' => 'Mezba Islam',
                     'email' => 'Mezba@gmail.com',
                     'mobile' => '7777',
                     'roll' => '104',
                     'image' => 'assets/img/3.jpg'
                 ],
                 4 => [
                     'id' => 5,
                     'name' => 'Mezba Islam',
                     'email' => 'Mezba@gmail.com',
                     'mobile' => '7777',
                     'roll' => '105',
                     'image' => 'assets/img/3.jpg'
                 ]
             ];
         }
         public function getAllStuddent()
         {
             return $this->students;
         }
}