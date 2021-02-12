<?php

namespace Illuminate\Support\Facades;

use Closure;
use Illuminate\Routing\Router;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Routing\ResourceRegistrar;
use Illuminate\Routing\RouteCollectionInterface;
use Illuminate\Routing\PendingResourceRegistration;

/**
 * @method static PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \Illuminate\Routing\Route any(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route|null current()
 * @method static \Illuminate\Routing\Route delete(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route fallback(array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route get(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route|null getCurrentRoute()
 * @method static RouteCollectionInterface getRoutes()
 * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route options(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route patch(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
 * @method static \Illuminate\Routing\Route post(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route put(string $uri, array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
 * @method static \Illuminate\Routing\Route substituteBindings(Route $route)
 * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [], int $status = 200, array $headers = [])
 * @method static RouteRegistrar as(string $value)
 * @method static RouteRegistrar domain(string $value)
 * @method static RouteRegistrar middleware(array|string|null $middleware)
 * @method static RouteRegistrar name(string $value)
 * @method static RouteRegistrar namespace(string|null $value)
 * @method static RouteRegistrar prefix(string  $prefix)
 * @method static RouteRegistrar where(array  $where)
 * @method static Router|RouteRegistrar group(Closure|string|array $attributes, Closure|string $routes)
 * @method static ResourceRegistrar resourceVerbs(array $verbs = [])
 * @method static string|null currentRouteAction()
 * @method static string|null currentRouteName()
 * @method static void apiResources(array $resources, array $options = [])
 * @method static void bind(string $key, string|callable $binder)
 * @method static void model(string $key, string $class, Closure|null $callback = null)
 * @method static void pattern(string $key, string $pattern)
 * @method static void resources(array $resources, array $options = [])
 * @method static void substituteImplicitBindings(Route $route)
 * @method static boolean uses(...$patterns)
 * @method static boolean is(...$patterns)
 * @method static boolean has(string $name)
 * @method static mixed input(string $key, string|null $default = null)
 *
 * @see \Illuminate\Routing\Router
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
