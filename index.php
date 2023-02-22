<?php
session_start();
//taoj class ProductController đặt namespace và cài đặt auto load để load các class ra index
require_once "env.php";
require_once "vendor/autoload.php";
require_once "common/route.php";
// use App\Controllers\ProductController;
// $productController=new ProductController();