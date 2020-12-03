<?php

namespace App\Http\Middleware;

use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;
use Closure;

class Permissions
{
    private $exceptNames = [
    ];

    private $exceptControllers = [
        'LoginController',
        'ForgotPasswordController',
        'ResetPasswordController',
        'RegisterController',
        'ConfirmPasswordController',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $permission = $request->route()->getName();

        if ($this->match($request->route()) && auth()->user()->canNot($permission))
            return redirect()->route('main');
            //throw new UnauthorizedException(403, 'User does not have the permission: ' . $permission);

        return $next($request);
    }

    private function match(Route $route)
    {
        if ($route->getName() == '' || $route->getName() === null) {
            return false;
        } else {
            if (in_array(class_basename($route->getController()), $this->exceptControllers))
                return false;
            foreach ($this->exceptNames as $except)
                if (Str::is($except, $route->getName()))
                    return false;
        }
        return true;
    }
}
