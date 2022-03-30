<?php
session_start();

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
    {
        switch ($uri) {
            case '':
                //http://localhost/
                require __DIR__ . '/views/home.php';
                break;
            case 'login':
                require __DIR__ . '/CMS/controller/usercontroller.php';
                $controller = new UserController();
                $controller->autorize();
                break;
            case 'homepage':
                require __DIR__ . '/CMS/views/homecms.php';
                break;
            case 'logout':
                require __DIR__ . '/CMS/controller/usercontroller.php';
                $controller = new UserController();
                $controller->logout();
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
                require __DIR__ . '/views/jazz/jazzevents.php'; 
                break;
              case 'register':
                require __DIR__ . '/CMS/controller/usercontroller.php';

                $controller = new UserController();
                if ($method === 'POST') {
                    $controller->createUser(json_decode($body, true));
                }
                if ($method === 'DELETE') {
                    $controller->deleteUser($path);
                }
                if ($method === 'GET') {
                    if ($path == null) {
                        $controller->index(); //gets all users
                    } else {
                        $controller->getOneUser($path);
                    }
                }
            case 'home':
                require __DIR__ . '/views/home.php'; 
                break;
            case 'historymainpage':
                require __DIR__ . '/views/history/historymainpage.php'; 
                break;
            case 'historyDateOverview':
                require __DIR__ . '/views/history/historyDateOverview.php'; 
                break;
            case 'historyPriceTime':
                require __DIR__ . '/views/history/historyPriceTime.php'; 
                break;
            case 'historyLanguageQuantity':
                require __DIR__ . '/views/history/historyLanguageQuantity.php'; 
                break;
            
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
