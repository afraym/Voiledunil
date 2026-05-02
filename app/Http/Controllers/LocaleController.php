<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Get the available locales.
     */
    public function getLocales()
    {
        return ['en', 'fr', 'es', 'de', 'ru', 'ar'];
    }

    /**
     * Get the current locale.
     */
    public function getLocale()
    {
        return app()->getLocale();
    }
}
