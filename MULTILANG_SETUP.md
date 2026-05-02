# Multi-Language Setup Guide

This Laravel application now supports 6 languages:
- **English** (en)
- **French** (fr)
- **Spanish** (es)
- **German** (de)
- **Russian** (ru)
- **Arabic** (ar)

## URL Structure

Access different languages using the locale prefix in the URL:

- English: `http://localhost/en`
- French: `http://localhost/fr`
- Spanish: `http://localhost/es`
- German: `http://localhost/de`
- Russian: `http://localhost/ru`
- Arabic: `http://localhost/ar` (Right-to-Left layout)

The home URL `/` redirects to the default locale (`/en`).

## Project Structure

### Language Files

Translation files are located in `resources/lang/` with the following structure:

```
resources/lang/
├── en/
│   ├── home.php          # Homepage translations
│   ├── navigation.php    # Navigation & header translations
│   └── footer.php        # Footer translations
├── fr/
├── es/
├── de/
├── ru/
└── ar/
```

### Key Files

1. **Middleware**: `app/Http/Middleware/SetLocale.php`
   - Handles locale detection and setting
   - Shares locale information with views

2. **Controller**: `app/Http/Controllers/LocaleController.php`
   - Manages locale operations

3. **Routes**: `routes/web.php`
   - All routes are prefixed with `{locale}`

4. **Blade Templates**:
   - `resources/views/front/header.blade.php` - Language switcher added
   - `resources/views/welcome.blade.php` - Uses translation helpers

## Using Translations in Blade Templates

Use the `__()` helper function to retrieve translations:

```blade
{{ __('home.title') }}
{{ __('navigation.login') }}
{{ __('footer.description') }}
```

### File-based translations:
- `__('home.title')` → `resources/lang/{locale}/home.php` → `'title'` key
- `__('navigation.login')` → `resources/lang/{locale}/navigation.php` → `'login'` key

## Adding New Translations

1. Add a new key to the translation arrays in each language file
2. The translation will automatically be available via the `__()` helper

Example:
```php
// resources/lang/en/home.php
'new_feature' => 'New Feature Title',

// resources/lang/fr/home.php
'new_feature' => 'Titre de la nouvelle fonctionnalité',
```

Then use in blade:
```blade
{{ __('home.new_feature') }}
```

## Language Switcher

The language switcher dropdown is located in the navigation bar with:
- Flag emojis for visual identification
- Active language highlighting
- Smooth navigation between languages

## RTL Support for Arabic

The Arabic locale (`ar`) automatically:
- Sets HTML `dir="rtl"` attribute
- Reverses layout direction for all elements
- Maintains responsive design

## Default Locale

The default locale is set in `config/app.php`:
```php
'locale' => env('APP_LOCALE', 'en'),
'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
```

## Environment Variables

In your `.env` file, you can optionally set:
```
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
```

## API Usage in Controllers

Get current locale:
```php
$locale = app()->getLocale();
```

Set locale:
```php
app()->setLocale('fr');
```

## Future Enhancements

- Add translation management admin panel
- Implement database-driven translations
- Add SEO-friendly multi-language URLs
- Add language-specific content management
