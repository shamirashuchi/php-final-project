<?php
require_once "vendor/autoload.php";
$welcome = new \App\classes\Welcome();
use App\classes\Auth;
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
    elseif($_GET['page'] == 'category')
    {
        $welcome->category($_GET['id']);
    }
    elseif($_GET['page'] == 'product-detail')
    {
        $welcome->productDetail($_GET['id']);
    }
    elseif($_GET['page'] == 'gallery')
    {
        $welcome->gallery();
    }
    elseif($_GET['page'] == 'login')
    {
        $welcome->login();
    }
    elseif($_GET['page'] == 'dashboard')
    {
        $welcome->dashboard();
    }
    elseif($_GET['page'] == 'logout')
    {
        $welcome->logout();
    }
}

elseif(isset($_POST['full_name_btn']))
{
$welcome->makeFullName();
}
elseif(isset($_POST['series-btn']))
{
    $welcome->makeSeries();
}

elseif(isset($_POST['login_btn']))
{
    $auth = new Auth();
$auth->loginCheck();
}