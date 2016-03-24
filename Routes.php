<?php
use simpleRoutingSystem\lib\router;


$_SESSION['url'] = $_SERVER['REQUEST_URI'];
/*
|--------------------------------------------------------------------------
| router
|--------------------------------------------------------------------------
|you can bind the simple rout the following way -> router::add('method[GET or POST]','url','name+Controller','ControllerMethod');
|or you can bind it like this -> router::restfulResource('url','name+Controller');
|
*/


router::add('GET','/','baseController','index'); // it make base url for all application;
router::restfulResource('/customers','customersController');
router::restfulResource('/employees','employeesController');
router::restfulResource('/offices','officesController');
router::restfulResource('/orders','ordersController');
router::restfulResource('/payments','paymentsController');
router::restfulResource('/productlines','productlinesController');
router::restfulResource('/products','productsController');
/*
|--------------------------------------------------------------------------
| watcher
|--------------------------------------------------------------------------
|This method is watching the address bar:
|1: If the requested address exists, it calls binding to this url Comptroller and Comptroller method
|2: If not it returns exception;
|
|
*/
router::watcher();


