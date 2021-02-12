<?php

namespace Illuminate\Routing\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SubstituteBindings
{
    /**
     * The router instance.
     *
     * @var Registrar
     */
    protected $router;

    /**
     * Create a new bindings substitutor.
     *
     * @param  Registrar  $router
     *
     * @return void
     */
    public function __construct(Registrar $router)
    {
        $this->router = $router;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure                   $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $this->router->substituteBindings($route = $request->route());

            $this->router->substituteImplicitBindings($route);
        } catch (ModelNotFoundException $exception) {
            if ($route->getMissing()) {
                return $route->getMissing()($request);
            }

            throw $exception;
        }

        return $next($request);
    }
}
