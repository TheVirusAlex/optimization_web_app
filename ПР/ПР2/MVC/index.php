

<?php

    //uri

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = rtrim($uri, '/') ?: '/';

    echo "<pre>";
    echo "URL: {$_SERVER['REQUEST_URI']} \n"; 
    echo "Путь: $uri";
    echo "Метод: {$_SERVER['REQUEST_METHOD']} \n";
    echo "</pre>";





    //Автозагрузчик классов
    spl_autoload_register(function (string $class){

        $prefix = "App\\";
        $baseDir = __DIR__ .'/app/';

        if(!str_starts_with($class, $prefix))
            return;

        $file = $baseDir.str_replace('\\','/', substr($class, strlen($prefix))).'.php';

        if(file_exists($file)) 
            require $file;
    });
    //Простой маршрутизатор

    use App\Core\Router;
    use App\Controllers\ArticleController;

    $router = new Router();

    $router->get('/', [ArticleController::class, 'index']);
    $router->get('/about', fn()=>print '<h1>О нас: Нам можно доверять</h1>');
    $router->get('/article/{id}', [ArticleController::class, 'show']);
    $router->dispatch($_SERVER['REQUEST_METHOD'], $uri);


 /*   switch($uri){
        case '/':
            echo "<h1>Главная страница</h1>";
        break;
        case '/about':
            echo "<h1>О проекте</h1>";
        break;
        default:
        if(preg_match('#^/article/(\d+)$#', $uri, $m)){
            echo "<h1>Статья №{$m[1]}</h1>";
        } else{
            http_response_code(404);
            echo "404 - дурачок";
        }
    }*/
?>
