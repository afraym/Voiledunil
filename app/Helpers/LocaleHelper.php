<?php

namespace App\Helpers;

class LocaleHelper
{
    /**
     * Get all available locales
     */
    public static function getLocales(): array
    {
        return ['en', 'fr', 'es', 'de', 'ru', 'ar'];
    }

    /**
     * Get the current locale
     */
    public static function getCurrentLocale(): string
    {
        return app()->getLocale();
    }

    /**
     * Get the locale name in the locale language
     */
    public static function getLocaleName(string $locale): string
    {
        return match($locale) {
            'en' => 'English',
            'fr' => 'Français',
            'es' => 'Español',
            'de' => 'Deutsch',
            'ru' => 'Русский',
            'ar' => 'العربية',
            default => $locale,
        };
    }

    /**
     * Get locale flag emoji
     */
    public static function getLocaleFlag(string $locale): string
    {
        return match($locale) {
            'en' => '🇬🇧',
            'fr' => '🇫🇷',
            'es' => '🇪🇸',
            'de' => '🇩🇪',
            'ru' => '🇷🇺',
            'ar' => '🇸🇦',
            default => '🌐',
        };
    }

    /**
     * Check if locale is RTL
     */
    public static function isRTL(string $locale = null): bool
    {
        $locale = $locale ?? self::getCurrentLocale();
        return in_array($locale, ['ar']);
    }

    /**
     * Get the direction attribute for HTML
     */
    public static function getDirection(string $locale = null): string
    {
        return self::isRTL($locale) ? 'rtl' : 'ltr';
    }
}
