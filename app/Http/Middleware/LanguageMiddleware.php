<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->route('lang') ?: Session::get('locale', config('app.locale'));

        if (!in_array($locale, ['en', 'vi'])) {
            $locale = config('app.locale');
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        //dd(App::getLocale());

        return $next($request);
    }
}
