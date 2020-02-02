<?php

/**
 * Authentication configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // Method of authentication to use
    // Options: standard, ldap
    'method' => env('AUTH_METHOD', 'standard'),

    // Authentication Defaults
    // This option controls the default authentication "guard" and password
    // reset options for your application.
    'defaults' => [
        'guard' => env('AUTH_METHOD', 'standard') === 'standard' ? 'web' : env('AUTH_METHOD'),
        'passwords' => 'users',
    ],

    // Authentication Guards
    // All authentication drivers have a user provider. This defines how the
    // users are actually retrieved out of your database or other storage
    // mechanisms used by this application to persist your user's data.
    // Supported drivers: "session", "api-token", "ldap-session"
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'ldap' => [
            'driver' => 'ldap-session',
            'provider' => 'external',
        ],
        'saml2' => [
            'driver' => 'saml2-session',
            'provider' => 'external',
        ],
        'api' => [
            'driver' => 'api-token',
        ],
    ],

    // User Providers
    // All authentication drivers have a user provider. This defines how the
    // users are actually retrieved out of your database or other storage
    // mechanisms used by this application to persist your user's data.
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \BookStack\Auth\User::class,
        ],
        'external' => [
            'driver' => 'external-users',
            'model' => \BookStack\Auth\User::class,
        ],
    ],

    // Resetting Passwords
    // The expire time is the number of minutes that the reset token should be
    // considered valid. This security feature keeps tokens short-lived so
    // they have less time to be guessed. You may change this as needed.
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'email' => 'emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
