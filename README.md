# MinMinCare

MinMinCare is a Laravel 13 application. The project keeps its existing Laravel application structure and is configured for local development on Ubuntu, including Ubuntu on WSL.

## Requirements

- PHP 8.3 or newer
- Composer 2
- Required PHP extensions: Ctype, cURL, Fileinfo, JSON, Mbstring, OpenSSL, PDO, SQLite (for the default local database), Tokenizer, XML, and GD

## Installation

- Clone the repo and `cd` into it
- Run `composer install`
- Rename or copy `.env.example` file to `.env`
- Run `php artisan key:generate`
- Set your database credentials in your `.env` file

## Ubuntu on WSL

From the project directory in Ubuntu:

```bash
composer install
cp .env.example .env
touch database/database.sqlite
php artisan key:generate
php artisan migrate --force
php artisan serve
```

The example environment uses SQLite so the app can be started without a separate database server. To use MySQL, set `DB_CONNECTION=mysql` and configure its connection values in `.env`.

## Note

Recommend to install this preset on a project that you are starting from scratch, otherwise your project's design might break.

If you found this project useful, then please consider giving it a :star:

## Credits

Laravel SB Admin 2 uses some open-source third-party libraries/packages, many thanks to the web community.

- Laravel - Open source framework.
- SB Admin 2 - Thanks to Start Bootstrap.

## Preview

`login`

<img src="https://imgur.com/YjGp6Sbl.png">

***

`register`

<img src="https://imgur.com/Wj09cu4l.png">

***

`dashboard`

<img src="https://imgur.com/CrmOfT5l.png">

***

`profile`

<img src="https://imgur.com/5t4eS1rl.png">

***

`logout`

<img src="https://imgur.com/d9JclOYl.png">

## License

Licensed under the [MIT](LICENSE) license.
