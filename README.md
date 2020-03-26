# MVC
An extremely simple and easy to understand MVC skeleton application, reduced to the max.

### Goals of this project:

- Anonymous user is allowed to enter data using the form field
- User data is shown in preview page before inserting into database
- Upon confirmation from preview page data is inserted into database
- unique token is generated for every form submit to prevent CSRF attack
- PDO is used to prevent sql injection

## error logs

 - application or database errors are captured into public/logs/logs.txt file 

## Installation

1. Run the SQL statements in the *application/_install* folder.

2. Change the .htaccess file from
```
RewriteBase /mvc/
```
to where you put this project, relative to the web root folder (usually /var/www). So when you put this project into
the web root, like directly in /var/www, then the line should look like or can be commented out:
```
RewriteBase /
```
If you have put the project into a sub-folder, then put the name of the sub-folder here:
```
RewriteBase /sub-folder/
```

4. Edit the *application/config/config.php*, change this line
```php
define('URL', 'http://localhost/mvc/');
```
to where your project is. Real domain, IP or 127.0.0.1 when developing locally. Make sure you put the sub-folder
in here (when installing in a sub-folder) too, also don't forget the trailing slash !

5. Edit the *application/config/config.php*, change these lines
```php
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'php-assignment');
define('DB_USER', 'root');
define('DB_PASS', '');
```
to your database credentials. If you don't have an empty database, create one. Only change the type `mysql` if you
know what you are doing.
