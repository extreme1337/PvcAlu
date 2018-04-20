<?php
    require_once 'vendor/autoload.php';
    require_once 'Configuration.php';


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

    print_r($route);
    print_r($arguments);
    exit;

    $controller = new \App\Controllers\MainController($databaseConnection);
    $controller->home();
    $data = $controller->getData();
    #print_r($data);

    foreach($data as $name => $value){
        $$name =$value;
        #print_r($name);
    }

    require_once 'views/Main/home.php';
    