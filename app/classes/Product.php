<?php


namespace App\classes;


class Product
{
  public $products  = [],$data = [];
  public function __construct()
  {
      $this->products = [
          0 => [
              'id' => 1,
              'category_id' => 1,
              'name'        => 'New Sony Mobile',
              'price'       => 55000,
              'image'       => 'assets/img/product/1.jpg',
              'description' =>'lorem',
          ],
          1 => [
              'id' => 2,
              'category_id' => 1,
              'name'        => 'Samsung Note 11 pro',
              'price'       => 45000,
              'image'       => 'assets/img/product/2.jpg',
              'description' =>'lorem',
          ],
          2 => [
              'id' => 3,
              'category_id' => 1,
              'name'        => 'Sony LED TV 55 Inch',
              'price'       => 115000,
              'image'       => 'assets/img/product/3.jpg',
              'description' =>'lorem',
          ],
          3 => [
              'id' => 4,
              'category_id' => 3,
              'name'        => 'New cricket bat',
              'price'       => 5000,
              'image'       => 'assets/img/product/4.jpg',
              'description' =>'lorem',
          ],
          4 => [
              'id' => 5,
              'category_id' => 2,
              'name'        => 'New T shirt',
              'price'       => 12000,
              'image'       => 'assets/img/product/5.jpg',
              'description' =>'lorem',
          ],
          5 => [
              'id' => 6,
              'category_id' => 2,
              'name'        => 'New Jens Pant',
              'price'       => 1800,
              'image'       => 'assets/img/product/6.jpg',
              'description' =>'lorem',
          ],
      ];
  }
  public function getAllProduct()
  {
      return $this->products;
  }
  public function getProductByCategoryId($id)
  {
      $this->data = [];
      foreach($this->products as $product)
      {
          if($product['category_id'] == $id)
          {
              array_push( $this->data, $product);
          }
      }
      return $this->data;
  }
}