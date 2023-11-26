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
                     'image' => 'assets/img/2.jpg',
                     'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
                 ],
                 1 => [
                     'id' => 2,
                     'name' => 'Kalam Islam',
                     'email' => 'Rahim@gmail.com',
                     'mobile' => '5555',
                      'roll' => '102',
                     'image' => 'assets/img/3.jpg',
                     'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
                 ],
                 2 => [
                     'id' => 3,
                     'name' => 'Ashik Islam',
                     'email' => 'Ashik@gmail.com',
                     'mobile' => '6666',
                     'roll' => '103',
                     'image' => 'assets/img/2.jpg',
                     'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
                 ],
                 3 => [
                     'id' => 4,
                     'name' => 'Mezba Islam',
                     'email' => 'Mezba@gmail.com',
                     'mobile' => '7777',
                     'roll' => '104',
                     'image' => 'assets/img/3.jpg',
                     'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
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
         public function getStudentById($id)
         {
                foreach($this->students as $student)
            {
                if($student['id'] == $id)
                {
                    return $student;
                }
            }
         }
}