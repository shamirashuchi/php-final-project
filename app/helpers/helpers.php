<?php
//helper method---> a function which can be called from everywhere

function view($view,$data = [], $print = true)
{
    $output = "View not found";
    $filePath = "views/".$view.".php";//views/home.php
    if(file_exists($filePath))//file exist kore kina
    {
        extract($data);//convert array index to variable.$data =['name' => 'BITM','campus' =>'Dhaka'];extract($data);echo $name;-->BITM
        ob_start();//program e prottekta request korle(browser e output dekha) header file information notun kore create kore
        include $filePath;
        $output = ob_get_clean();//ob_get_clean() method er maddhome $filePath er sob chole asbe. program e prottekta request korle(browser e output dekha) gurbase clean kore
    }
    if($print)
    {
        print $output;
    }
}