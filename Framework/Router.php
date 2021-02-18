<?php

namespace TestApp;

class Router
{
    public static function routeTo($path)
    {
        $controller = new UserController();
        $adminController = new AdminController();
        $buyItemController = new BuyItemController();
        if (strpos($path, '/register') === 0) {
            $controller->register();
            return;
        } elseif (strpos($path, '/login') === 0) {
            $controller->login();
            return;
        } elseif (strpos($path, '/logout') === 0) {
            $controller->logout();
            return;
        } elseif (strpos($path, '/useritems') === 0) {
            $controller->items();
            return;
        } elseif (strpos($path, '/admin') === 0) {
            $adminController->index();
            return;
        } elseif (strpos($path, '/additem') === 0) {
            $adminController->additem();
            return;
        } elseif (strpos($path, '/updateItem') === 0) {
            $adminController->updateItem();
            return;
        } elseif (strpos($path, '/deleteItem') === 0) {
            $adminController->deleteItem();
            return;
        } elseif (strpos($path, '/getPurchases') === 0) {
            $buyItemController->getPurchases();
            return;
        } elseif (strpos($path, '/buyItem') === 0) {
            $buyItemController->insertPurchase();
            return;
        }
        
        //default redirect
        if (empty($_SESSION["user_id"])) {
            $controller->login();
        } else {
            $controller->index();
        }

    }
}