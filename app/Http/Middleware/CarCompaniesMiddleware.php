<?php

namespace App\Http\Middleware;
use App\Models\CarCompanies;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CarCompaniesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $carCompanies = CarCompanies::all(); // Assuming you have a CarCompany model

        // Share the $carCompanies data with all views
        view()->share('carCompanies', $carCompanies);

        return $next($request);
    }
}
