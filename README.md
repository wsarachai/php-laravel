# Installation — PHP
- PHP 8.1+
- Download PHP: https://windows.php.net/download#php-8.1
  - VS16 x64 Thread Safe
- Extract to C:\php
  - add `C:\php` to environment variable `PATH`.
- Copy file `C:\php\php.ini-development` to `C:\php\php.ini`.
- Open file `C:\php\php.ini` then edit the following configurations:
  - specify extensions directory
    ```extension_dir = "C:/php/ext"```
  - enable the following PHP extensions, remove `;` at the beginning of line.
    ```
    extension=fileinfo
    extension=mbstring
    extension=openssl
    extension=mysqli
    extension=pdo_mysql
    zend_extension=opcache
    ```

# Installation — Composer
- Download: https://getcomposer.org/download/
  - Composer-Setup.exe
- Test it by using the following command (windows command line)
  - `composer -v`

# Installation — Laravel
- Create your workspace directory, e.g. D:\632110xxx.
- Open command-line and change directory to D:\632110xxx.
  ```
  D:
  cd \632110xxx
  ```
  
- Install Laravel (version 9+)
  ```
  composer create-project laravel/laravel hello-world
  ```
- change `hello-world` to your project name.
- And we call `hello-world` is a project root directory

# Running Laravel development server
- In this course we use build-in PHP web server, development server, so it uses port 8000 by default.
- Change directory to project directory.
  ```
  D:
  cd \632110xxx\hello-world
  ```
  
- Then run web server.
  ```
  php artisan serve
  ```
  
- To view result open http://localhost:8000 in web browser.
- To stop web server hit `ctrl-c` on command-line windows that runs the web server.

# How to configure the project

1. `cd hello-world`
2. run `composer install`
3. copy `.env.example` to `.env`
4. run `php artisan key:generate`
5. run `php artisan serve`
6. Navigate to http://127.0.0.1:8000/hello-world
