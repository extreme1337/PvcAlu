<?php
    require_once 'vendor/autoload.php';
    require_once 'Configuration.php';
    #session_start();

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Models\AdministratorModel;
    

    $databaseConfiguration = new DatabaseConfiguration(Configuration::DATABASE_HOST,
                                                       Configuration::DATABASE_USER,
                                                       Configuration::DATABASE_PASS,
                                                       Configuration::DATABASE_NAME);
    $databaseConnection = new DatabaseConnection($databaseConfiguration);
    #$adminModel = new AdministratorModel($databaseConnection);

    $url = strval(filter_input(INPUT_GET, 'URL'));
    $httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
    #echo $httpMethod . ' ' . $url;
    #exit;

    $router = new App\Core\Router();
    $routes = require_once 'routes.php';
    foreach($routes as $route){
        $router->add($route);
    }
    $route = $router->find($httpMethod, $url);
    $arguments = $route->extractArguments($url);

    #print_r($route);
    #print_r($arguments);
    #exit;
    $fullControllerName = '\\App\\Controllers\\' . $route->getControllerName() . 'Controller';
    $controller = new $fullControllerName($databaseConnection);
    call_user_func_array([$controller,$route->getMethodName()],$arguments);
    #$controller->home();
    $data = $controller->getData();
    #print_r($data);



    #foreach($data as $name => $value){
        #$$name =$value;
        #print_r($name);
    #}

    #require_once 'views/'.$route->getControllerName().'/'.$route->getMethodName().'.php';
    
    $loader = new Twig_Loader_Filesystem("./views");
    $twig = new Twig_Environment($loader, [
        "cache"       => "./twig-cache",
        "auto_reload" => true
    ]);
    echo $twig->render($route->getControllerName().'/'.$route->getMethodName().'.html', $data);

