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
            case 'homepage':
                require __DIR__ . '/homepage.php';
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
