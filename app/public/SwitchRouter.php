<?php

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
    {
        switch ($uri) {
            case '':
                //http://localhost/
                require __DIR__ . '/views/cms/login.php';
                break;
            case 'invoices':
                require __DIR__ . '/views/cms/invoices.php';
                break;
            case 'updateprogram':
                require __DIR__ . '/views/cms/updateprogram.php';
                break;
            case 'homecms':
                require __DIR__ . '/views/cms/homecms.php';
                break;
            case 'login':
                require __DIR__ . '/views/cms/login.php';
                break;
            case 'register':
                require __DIR__ . '/views/cms/register.php';
                break;
            case 'logout':
                require __DIR__ . '/views/cms/logout.php';
                break;
            case 'home':
                require __DIR__ . '/views/home.php';
                break;
            case 'food':
                require __DIR__ . '/views/food/food.php';
                break;
            case 'foodReservation':
                require __DIR__ . '/views/food/foodReservation.php';
                break;
            case 'festivalinfo':
                require __DIR__ . '/views/festivalInfo.php';
                break;
            case 'jazzevents':
                require __DIR__ . '/jazz/controller/jazzController.php';
                $controller =  new jazzController();
                $controller->allJazzEvents();
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
