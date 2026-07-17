<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * The available locales for the application.
     */
    protected array $locales = ['en', 'fr', 'es', 'de', 'ru', 'ar'];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from URL or use default
        $locale = $request->segment(1);

        if (!in_array($locale, $this->locales)) {
            $locale = config('app.locale');
        }

        // Set the application locale
        app()->setLocale($locale);

        // Make locale-aware named routes resolve without passing locale everywhere
        URL::defaults(['locale' => $locale]);

        // Share locale with views
        view()->share('locale', $locale);
        view()->share('locales', $this->locales);

        return $next($request);
    }
}
