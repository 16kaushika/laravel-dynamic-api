<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\VerifyCsrfToken;
// use App\Http\Middleware\CustomCors;

return Application::configure(basePath: dirname(__DIR__))
->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
)
->withMiddleware(function (Middleware $middleware) {
    $middleware->validateCsrfTokens(
        except: ['api/*'],  // Exclude API routes from CSRF protection
    );
    
    // Add the custom CORS middleware
    // $middleware->add(CustomCors::class);
})
->withExceptions(function (Exceptions $exceptions) {
        //
})->create();
