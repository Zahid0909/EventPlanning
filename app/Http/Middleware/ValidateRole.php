<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
        //Validating the type to see if this exists as a role in the UserRole enum
        //If not, throw an exception
        $roles = [];
        foreach (\App\Enum\UserRole::cases() as $role) {

            $roles[] = strtolower($role->name);

        }
        if (!in_array(strtolower($type), $roles)) {
            throw new \Exception('Invalid role type');
        }

        //if the user is authenticated
        //if not, redirect to login page
        if (!$request->user()) {
            return redirect()->route('login');
        }

        //check if the user has the role
        if (strtolower(!$request->user()->role->name) ==$type) {
            return $next($request);
        }else{
            //if not throw an exception 404
            throw new \Exception('Sorry you cannot access this page.', 404);
        }
    }
}
