<?php


namespace App\classes;


class Car
{
   public $carName = "Toyota Axio - 2015";
   protected $carColor = "Gray";
   private $carPrice = "1200,00";

   public function start()
   {
       echo 'in start';
   }

    protected function stop()
    {
        echo 'in stop';
    }
    private function move()
    {
        echo 'in move';
    }
}
//php 8.1
//composer
//7zip
//git
//winrar
//node js