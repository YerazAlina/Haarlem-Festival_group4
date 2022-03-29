<?php
session_start();

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
    {
        switch ($uri) {
            case '':
                //http://localhost/
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
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
