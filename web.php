<?php
require_once "vendor/autoload.php";
$welcome = new \App\classes\Welcome();
//echo '<pre>';
//print_r($POST);
//echo '</pre>';
if (isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $welcome->index();
    }
    elseif($_GET['page'] == 'about')
    {
        $welcome->about();
    }
    elseif($_GET['page'] == 'contact')
    {
        $welcome->contact();
    }
    elseif($_GET['page'] == 'detail')
    {
        $welcome->detail($_GET['id']);
    }
}

elseif(isset($_POST['full_name_btn']))
{
$welcome->makeFullName();
}