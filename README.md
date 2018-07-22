# A Laravel App backup package using UI.

This Laravel package can create a backup of your Database and dump into your public directory, which is just a click away.

## Installation and usage

This package requires PHP 5.6 or higher and Laravel 5.5 or higher.

Open your config/app.php and add the following line to aliases array.

``` bash
'Database' => Joydip\Laravel5_database_utilities\Facades\Database::class,
```

Open your config/app.php and add the following line to providers array.

``` bash
Joydip\Laravel5_database_utilities\DatabaseServiceProvider::class,
```
Now run the following command.

``` bash
php artisan vendor:publish
```
You will now see a database-manager.php file inside your config directory. This file allows you to set up your DB credentials and the name of the dump file generated when you wish to take the backup.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
