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
            case 'logout':
                require __DIR__ . '/CMS/controller/usercontroller.php';
                $controller = new UserController();
                $controller->logout();
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
