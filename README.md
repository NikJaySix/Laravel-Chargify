Chargify Wrapper for Laravel 5.+
=====================================

This is a wrapper using the chargley chargify SDK v0.1.3. It creates a service provider and facade for autoloading into laravel.

How to Install
---------------

### Laravel 5.+

1.  Install the `nikjaysix/chargify-laravel` package

    ```shell
    $ composer require nikjaysix/laravel-chargify
    ```

2. Update `config/app.php` to activate the LaravelChargify package

    ```php
    # Add `LaravelChargifyServiceProvider` to the `providers` array
    'providers' => array(
        ...
        NikJaySix\LaravelChargify\LaravelChargifyServiceProvider::class,
    )

    # Add the `LaravelChargifyFacade` to the `aliases` array
    'aliases' => array(
        ...
        'Chargify' => NikJaySix\LaravelChargify\LaravelChargifyFacade::class
    )
    ```

3.  Generate a Chargify config file

    ```shell
    $ php artisan vendor:publish
    ```

4.  Update `app/config/chargify.php` with your chargify API credentials

    ```php
    return array(
        'hostname' => '****.chargify.com',
        'api_key' => 'chargify api key',
        'shared_key' => 'chargify shared key'
    );
    ```
