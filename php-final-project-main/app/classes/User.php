<?php


namespace App\classes;


class User
{
   public $users = [];

   public function __construct()
   {
       $this->users = [
           0 => [
               'id' => 1,
               'name' => 'Rakib Hasan',
               'user_name' => 'admin',
               'password' => '123456',
           ],
       1 => [
           'id' => 2,
               'name' => 'Moshiur Rahman',
               'user_name' => 'mosiur',
               'password' => '123123',
       ],
       2  => [
           'id' => 3,
               'name' => 'Md salauddin',
               'user_name' => 'user',
               'password' => '111111',
       ],
   ];
   }
   public function getAllUsers()
   {
       return $this->users;
   }
}