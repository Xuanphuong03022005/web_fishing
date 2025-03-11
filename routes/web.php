<?php
    require_once('controller/HomeController.php');
    require_once('controller/ProductController.php');
    require_once('model/MasterModel.php');
    require_once('model/ProductModel.php');
    require_once('model/FactoryModel.php');
    require_once('model/CategoryModel.php');
    switch ($controller) {
        case 'homecontroller':
            $controller = new HomeController();
            break;
        case 'productcontroller':
            $controller = new ProductController();
            break;
        default:
            # code...
            break;
    }
    $controller->{$action}();
