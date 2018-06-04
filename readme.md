## MusiCMS

### A CMS for an overhauled Electronic Press Kit


TODO:

* app/Type.php shouldn't be hardcoded
* Currently Seeded. They need to be managed content.
  * Rolls.
  * Gear Types.
  * ( I Think it will break if there is not at least one seeded - test this)
* Hardcoded Types ("app/Types.php")
* Hardcoded Gear list in
* Figure out what to do with Background Images:
    *  main.css
    *  style.css
* hardcoded gear types in resources/views/viewGear/list.blade.php
* resources/views/newHome.blade.php is hardcoded
* resources/views/layouts/newMain.blade.php is hardcoded
* create sample apache .conf file
* get example.env out of .gitignore

Installion for apache:
1. create.conf file
2. composer install
3. edit .env file
3. log in to mySQL, create DB you list in .env 'create database mcms;'
4. Dynamic link public directory for safety?: ln -s /var/www/MusiCMS/public /var/www/html/MusiCMS/public
5. php artisan key:generate
6. chmod 777 -R public/uploads/

<!-- sudo apt-get install composer
php composer.phar require intervention/image -->
php artisan optimize
composer require intervention/image

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
