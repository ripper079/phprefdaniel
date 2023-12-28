<?php

declare(strict_types=1);

namespace AppRouteDaniel;

require('./RouteNotFoundException.php');

class Router
{
    private array $routes;

    public function register(string $route, callable $action): self
    {
        $this->routes[$route] = $action;

        return $this;
    }

    public function printRegistedRoutes(): void
    {
        //The keys are the routes
        echo "<br>Registrated routes<br/>";
        foreach ($this->routes as $aRoute => $theClosure) {
            echo $aRoute . "<br />";
        }
    }

    public function resolve(string $requestUri)
    {
        /*
        if the request URI iscon
            /invoices?foo=bar
        then get left part of ?
        */

        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$route] ?? null;

        echo "ROUTE is=" . $route . "<br />";


        if (! $action) {
            throw new RouteNotFoundException();
        }

        //Call the func
        return call_user_func($action);
    }
}
