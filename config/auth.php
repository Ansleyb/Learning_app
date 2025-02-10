<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Guard
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication guard that will be used
    | by Laravel's authentication services. You may change this to any of the
    | guards defined in the "guards" array.
    |
    */

    'default' => env('AUTH_GUARD', 'web'),

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the authentication guards for your application.
    | Of course, a great default configuration has been defined for you here
    | which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider.
    |
    */

    'guards' => [

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',  // Use the admins provider for the admin guard
        ],

       
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers use a user provider. The provider defines how
    | the users are retrieved from your database or other storage mechanisms.
    |
    | If you have multiple tables or models, you can configure multiple providers.
    |
    */

    'providers' => [

        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,  // Use the Admin model here
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Password Reset Settings
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the password reset options for your application.
    |
    */

    'passwords' => [

        'users' => [
            'provider' => 'users',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Encryption Configuration
    |--------------------------------------------------------------------------
    |
    | This key is used by the encrypter service and should be set to a random,
    | 32 character string, otherwise these encrypted strings will not be safe.
    |
    */

    'encryption' => [
        'key' => env('APP_KEY'),
    ],

];
