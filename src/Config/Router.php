<?php


namespace App\Config;

use App\Controller\Home;
use BlackFramework\Routing\Factory\DefaultFactory;
use BlackFramework\Routing\Parser\WebParser;
use BlackFramework\Routing\Router\DefaultRouter;

class Router
{
    private $routeArray = [
        //Controller constructor params
        'controller-params' => [
            Home::class => [],
        ],
        //Route definition
        'route-definition' => [
            //method
            'GET' => [
                //route pattern
                '^/$' => [
                    'controller' => Home::class,
                    'action' => 'index',
                ], #
            ],
        ],
        'default-route' => [
            'controller' => Home::class,
            'action' => 'index',
            'parameters' => [],
        ]
    ];

    public function getRouteArray()
    {
        return $this->routeArray;
    }

    public function getRouterClassName()
    {
        return DefaultRouter::class;
    }

    public function getControllerFactoryName()
    {
        return DefaultFactory::class;
    }

    public function getParserName()
    {
        return WebParser::class;
    }
}