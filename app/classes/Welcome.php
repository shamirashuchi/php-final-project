<?php


namespace App\classes;
use App\classes\students;
//composer resource khujbe namespace diye
//namespace is a syntax of oop  which is used for directory
// variable is memory location address
//variable major rules
//start with $
//a-z,A-Z,0-9
//no number in first
//standard rules
//small letter
//meaning full
//readable
class Welcome
{
    public $student, $students ,$singletudent,$fullName,$message,$i, $data = [], $firstName,$lastName,$firstNumber,$secondNumber,$result; //property declare
    //nijossho method
    public function  __construct()
    {
        // this is a own class object
        $this->message ="Welcome PHP"; //value assign
    }
    //created method of our own
    public function index()
    {
        //composer update after writting somthing in composer
        $this->student = new student();
        $this->students = $this->student->getAllStuddent();
        return view('home', ['students' => $this->students]);
//        include "views/home.php";


        //Conditional statement
        //Conditional
        //1.if
        //2.if else
        //3.if else if
        //4.switch
        //Repeated
        //1.for
        //2.while
        //3.do while
        //4.for each



        //for
//        for($this->i = 70; $this->i <= 100; $this->i++)
//        {
//            echo $this->i . " ";
//        }


//        for($this->i = 30; $this->i >= 20; $this->i--)
//        {
//            echo $this->i . " ";
//        }



        //while
//        $this->i = 100;
//        while($this->i < 105)
//        {
//             echo "Hello BITM <br/> ";
//             $this->i++;
//        }


          //do while
//        $this->i = 50;
//        do
//        {
//            echo "Hello PHP <br/> ";
//            $this->i++;
//        }
//        while($this->i > 60);



        //For each -> array
        //Array -> special variable or property
        //numeric array because index 0,1
//         $this->data =[10,20,30,"BITM","PHP",100.25,true];
////         echo $this->data[7];//undefined array key
//        foreach ($this->data as $value)
//        {
//            echo "<br/>";
//            echo $value;
//        }

//Assosiative array because index is string
//$this->data = ['name'=>'Sagor', 'email'=>'sagor@gmail.com', 'mobile'=>'123456'];//array object sign(=>). name index e sagor thakbe
        // -> php object sign
//        echo $this->data['name'];


        //multidimentional array
        $this->data = [
            0 => [
                'name'=>'Sagor',
                'email'=>'sagor@gmail.com',
                'mobile'=>[
                    'personal' =>'123456',
                    'gardian' =>'75634896'
                ],
                'blood-group' => 'A+'
            ],
            1 => [
                'name'=>'Jahid',
                'email'=>'jahid@gmail.com',
                'mobile'=>[
                    'personal' =>'123456',
                    'gardian' =>'75634896'
                ],
                'blood-group' => 'B+'
            ],
            2 => [
                'name'=>'Makbul',
                'email'=>'mokbul@gmail.com',
                'mobile'=>[
                    'personal' =>'123456',
                    'gardian' =>'75634896'
                ],
                'blood-group' => '0+'
            ]
        ];

        echo '<pre>';
//        print_r($this->data);

        //var_dump($this->data);//full information of array with datatype


//        echo $this->data[2]['email'];
//        foreach ($this->data as $item){
//            foreach($item  as $value){
//               if(is_array($value)){
//                   foreach ($value as $v_value)
//                   {
//                       echo $v_value. ' ';
//                   }
//               }
//               else
//               {
//                   echo $value. ' ';
//               }
//            }
//            echo '<br/>';
//
////            echo $item['name'].'  '.$item['email'].'  '.$item['mobile'].$item['blood-group'].'<br/>';
//    }




        //echo $this->message;// property print
//        $this->firstName = "BASIS";
//        $this->firstName = true;
//        $this->lastName = 123;
//        $this->lastName = 123.25;
//        echo gettype($this->firstName);
//        echo gettype($this->lastName);
        //&nbsp for space
//        echo $this->firstName . " " . $this->lastName;
//        echo $this->firstName . "&nbsp" . $this->lastName;
//        echo $this->firstName . "&nbsp &nbsp" . $this->lastName;


        //Operator
        //a syntax for doing many task
        $this->firstNumber =100;
        $this->secondNumber =20;
        $this->result      = 30;



        $this->top = $this->firstNumber + $this->secondNumber;



        //if
//        if($this->firstNumber < $this->secondNumber)
//        {
//            echo $this->top;
//        }
//        else{
//            echo "Hello World";
//        }


        //elseif
//        if($this->firstNumber > $this->secondNumber)
//        {
//            echo "Hello world";
//        }
//        elseif($this->secondNumber > $this->result)
//        {
//            echo "Hello Bangladesh";
//        }
//        elseif($this->result < $this->firstNumber)//output
//        {
//            echo "Hello PHP";
//        }
//        else{
//            echo "Hello Laravel";
//        }




        //switch
//        switch($this->firstNumber)
//        {
//            case 10:
//                echo "Hello world";
//                break;
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Hello BITM";
//                break;
//        }
//

















        //nor operator
//        $this->r = true;
//        $this->y = false;
//        echo $this->r ;//1
//        echo '<br/>============================<br/>';
//        echo !$this->r ;//blank
//        echo '<br/>============================<br/>';
//        echo $this->y ;//blank
//        echo '<br/>============================<br/>';
//        echo !$this->y ;//1
//        echo '<br/>============================<br/>';




        //logical operator
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  && $this->firstNumber < $this->result;//1
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  && $this->firstNumber > $this->result;//blank
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  && $this->firstNumber > $this->result;//blank
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  && $this->firstNumber < $this->result;//blank




//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  || $this->firstNumber < $this->result;//1
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  || $this->firstNumber > $this->result;//blank
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber < $this->secondNumber  || $this->firstNumber > $this->result;//1
//
//        echo '<br/>=========================<br/>';
//        echo $this->firstNumber > $this->secondNumber  || $this->firstNumber < $this->result;//1








        //conditional operator
        //true hole 1
        //false hole kisu ase na ba blank
//        echo '<br/>';
//        echo $this->firstNumber > $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber >= $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber < $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber <= $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber == $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber != $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber === $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber !== $this->secondNumber;













        //Assignable operator
//        echo '<br/>';
//        echo $this->firstNumber += $this->secondNumber;//30//$this->firstNumber = $this->firstNumber + $this->secondNumber
//
//        echo '<br/>';
//        echo $this->firstNumber -= $this->secondNumber;//10//$this->firstNumber = $this->firstNumber - $this->secondNumber
//
//        echo '<br/>';
//        echo $this->firstNumber *= $this->secondNumber;//200
//
//        echo '<br/>';
//        echo $this->firstNumber /= $this->secondNumber;//10
//
//        echo '<br/>';
//        echo $this->firstNumber %= $this->secondNumber;//10
//
//        echo '<br/>';
//        echo $this->firstNumber .= $this->secondNumber;//1020  // . mane concate






//arithmatic operator
//        echo - $this->firstNumber;//negative to positive and positive to negative
//        echo '<br/>';
//        echo $this->firstNumber + $this->secondNumber;
//
//
//        echo '<br/>';
//        echo $this->firstNumber - $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber * $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber / $this->secondNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber % $this->secondNumber;


        //php do  interprate
        //echo part,$this->firstNumber part ,++ part
        //part part execute kore tai   echo $this->firstNumber++; give 20 then updated to 21
//        echo '<br/>';
//        echo $this->firstNumber++;//post increment 20
//        echo '<br/>';
//        echo $this->firstNumber;//21
//        echo '<br/>';
//        echo ++$this->firstNumber;//pre increment 22
//        echo '<br/>';
//        echo $this->firstNumber;
//
//
//        echo '<br/>';
//        echo --$this->firstNumber;//pre deccrement 21
//        echo '<br/>';
//        echo $this->firstNumber--;//21
//        echo '<br/>';
//        echo $this->firstNumber--;//post decrement 20
//        echo '<br/>';
//        echo --$this->firstNumber;//18
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->student = new student();
        $this->singletudent =  $this->student->getStudentById($id);
        return view('detail',['student' =>  $this->singletudent]);
    }
    public function makeFullName()
    {
//        echo '<pre>';
//        print_r($_POST);
        $this->fullName = $_POST['first_name'].' '.$_POST['last_name'];
        header("location: web.php?page=about&&result= $this->fullName");
    }


}