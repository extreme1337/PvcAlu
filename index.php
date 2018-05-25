<?php
    require_once 'vendor/autoload.php';
    require_once 'Configuration.php';

    ob_start();

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Models\AdministratorModel;
    

    $databaseConfiguration = new DatabaseConfiguration(Configuration::DATABASE_HOST,
                                                       Configuration::DATABASE_USER,
                                                       Configuration::DATABASE_PASS,
                                                       Configuration::DATABASE_NAME);
    $databaseConnection = new DatabaseConnection($databaseConfiguration);

    $url = strval(filter_input(INPUT_GET, 'URL'));
    $httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
    

    $router = new App\Core\Router();
    $routes = require_once 'routes.php';
    foreach($routes as $route){
        $router->add($route);
    }
    $route = $router->find($httpMethod, $url);
    $arguments = $route->extractArguments($url);

    
    $fullControllerName = '\\App\\Controllers\\' . $route->getControllerName() . 'Controller';
    $controller = new $fullControllerName($databaseConnection);


    
	$fingerprintProviderFactoryClass  = Configuration::FINGERPRINT_PROVIDER_FACTORY;
	$fingerprintProviderFactoryMethod = Configuration::FINGERPRINT_PROVIDER_METHOD;
	$fingerprintProviderFactoryArgs   = Configuration::FINGERPRINT_PROVIDER_ARGS;
	$fingerprintProviderFactory = new $fingerprintProviderFactoryClass;
	$fingerprintProvider = $fingerprintProviderFactory->$fingerprintProviderFactoryMethod(...$fingerprintProviderFactoryArgs);

    $sessionStorageClassName = Configuration::SESSION_STORAGE;
	$sessionStorageConstructorArguments = Configuration::SESSION_STORAGE_DATA;
    $sessionStorage = new $sessionStorageClassName(...$sessionStorageConstructorArguments);    
    

    $session = new \App\core\Session\Session($sessionStorage, Configuration::SESSION_LIFETIME);
    $session->setFingerprintProvider($fingerprintProvider);

    
    $controller->setSession($session);
    $controller->getSession()->reload();


    call_user_func_array([$controller,$route->getMethodName()],$arguments);
    $controller->getSession()->save();
    $data = $controller->getData();



   
    $loader = new Twig_Loader_Filesystem("./views");
    $twig = new Twig_Environment($loader, [
        "cache"       => "./twig-cache",
        "auto_reload" => true
    ]);
    echo $twig->render($route->getControllerName().'/'.$route->getMethodName().'.html', $data);

