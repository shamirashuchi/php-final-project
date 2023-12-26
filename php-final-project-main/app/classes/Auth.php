<?php


namespace App\classes;
use App\classes\user;

class Auth
{
    public $user, $users, $check;
  public function loginCheck()
  {
//  echo '<pre>';
//  print_r($_POST);
      $this->user = new User();
      $this->users = $this->user->getAllUsers();
      $this->check = false;
      foreach($this->users as $user)
      {
          if($user['user_name'] == $_POST['user_name'] && $user['password'] == $_POST['password'])
          {
              session_start();
              $_SESSION['user_id'] = $user['id'];
              $_SESSION['user_name'] = $user['name'];
              $this->check = true;
          }
      }

      if($this->check)
      {
          header('Location: web.php?page=dashboard');
      }
      else{
          header('Location: web.php?page=login&&message=Sorry invalid credential.');
      }
  }
}