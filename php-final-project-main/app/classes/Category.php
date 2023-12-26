<?php


namespace App\classes;


class Category
{
 public $categories = [];
  public function __construct()
  {
      $this->categories = [
          0 => [
              'id' => 1,
              'name' => 'Electronices',
              'image' => 'assets/img/category/1.png'
          ],
          1 => [
              'id' => 2,
              'name' => 'Man Fashion',
              'image' => 'assets/img/category/2.jpg'
          ],
          2 => [
              'id' => 3,
              'name' => 'Sports Item',
              'image' => 'assets/img/category/3.jpg'
          ],
          3 => [
              'id' => 4,
              'name' => 'Women Fashion',
              'image' => 'assets/img/category/4.jpg'
          ],
      ];
  }
  public function getAllCategory()
  {
      return $this->categories;
  }
}