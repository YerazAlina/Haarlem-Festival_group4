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
