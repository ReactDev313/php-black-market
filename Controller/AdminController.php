<?php

namespace TestApp;

class AdminController
{
  static function  goback()
  {
    header("Location: /");
  }

  function index() {
    //  check admin role
    if ( $_SESSION["user_id"] && $this->checkAdmin($_SESSION["user_id"])) {
      $items = Item::get();
      $_SESSION['items'] = $items;     
      require_once "Views/admin.php";
    } else {
      $this->goback();
    }
     return null;
  }

  function checkAdmin($user_id) {
    $user = User::getOne(['id' => $user_id]);
    return !$user->getUserRole();
  }

  function additem() {
    //  echo($_POST["items_len"]);
    if (isset($_POST["items_len"])) {
      for($i = 0; $i < $_POST["items_len"]; $i++ ) {
          $ip = $_POST["IP_".$i];
          $user_name = $_POST["user_name_".$i];
          $pwd = $_POST["pwd_".$i];
          $price = $_POST["price"];

          $insertArr = [
            'IP' => $ip,
            'user_name' => $user_name,
            'pwd' => $pwd,
            'price' => $price
          ];
          $item = new Item();
          $item->saveAttributes($insertArr);
          $item->setIP($ip);
          $item->setUsername($user_name);
          $item->setPwd($pwd);
          $item->setPrice($price);
          $item->save();
          header("Location: /admin");
      }
      // $item = new Item();
      // $item->saveAttributes($_POST["additem"]);
      // $item->setIP(($_POST["additem"]['IP']));
      // $item->setUsername(($_POST["additem"]['user_name']));
      // $item->setPwd(($_POST["additem"]['pwd']));
      // $item->setPrice(($_POST["additem"]['price']));
      // $item->save();
      // header("Location: /admin");
    } else {
        require_once "Views/admin.php";
    }
      return null;   
  }

  function updateItem() {
    // echo($_POST["updateItem"]["ID"]);
    if (isset($_POST["updateItem"])) {

      $item = new Item();
      $item->saveAttributes($_POST["updateItem"]);
      $item->setIP(($_POST["updateItem"]['IP']));
      $item->setUsername(($_POST["updateItem"]['user_name']));
      $item->setPwd(($_POST["updateItem"]['pwd']));
      $item->setPrice(($_POST["updateItem"]['price']));
      $item->save();
      header("Location: /admin");
    } else {
        require_once "Views/admin.php";
    }
      return null;   
  }
  function deleteItem($id) {
    if ($id) {
      // echo($_GET["id"]);
      $item = new Item();
      $item->saveAttributes(['id'=>$id]);
      $item->remove();
      header("Location: /admin");
    } else {
        require_once "Views/admin.php";
    }
      return null;
  }
 
}