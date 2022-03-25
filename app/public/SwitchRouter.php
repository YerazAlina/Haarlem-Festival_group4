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
            case 'historymainpage':
                require __DIR__ . '/views/cms/history/historymainpage.php'; 
                break;
            case 'historyDateOverview':
                require __DIR__ . '/views/cms/history/historyDateOverview.php'; 
                break;
            case 'historyPriceTime':
                require __DIR__ . '/views/cms/history/historyPriceTime.php'; 
                break;
            case 'historyLanguageQuantity':
                require __DIR__ . '/views/cms/history/historyLanguageQuantity.php'; 
                break;
             case 'historydraft':
                require __DIR__ . '/views/cms/history/historydraft.php'; 
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
