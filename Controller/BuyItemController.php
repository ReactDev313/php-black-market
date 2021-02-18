<?php

namespace TestApp;

class BuyItemController
{
    static function  goback()
    {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }

   
    function getPurchases() {
        if (isset($_SESSION["user_id"])) {
          $items = array();
          $purchaseItemIDs = Purchase::get(['user_id' => $_SESSION["user_id"]]);
          foreach($purchaseItemIDs as $purchaseItemID) {
            $item = Item::getOne(['id' => $purchaseItemID->getItemID()]);
            array_push($items, $item);
          }
          $_SESSION['purchase_items'] = $items;  
          header("Location: /useritems");
        } else {
             
            require_once "Views/index.php";
        }
        return null;
    }
    function insertPurchase() {
      if (isset($_SESSION["user_id"])) {
        $purchase = new Purchase();
        $purchase->saveAttributes(['item_id' => $_GET["item_id"]]);
        $purchase->setUserID($_SESSION["user_id"]);
        $purchase->setItemID($_GET["item_id"]);
        $purchase->save();
        header("Location: /useritems");
      } else {
            
          require_once "Views/index.php";
      }
      return null;
    }
    
}