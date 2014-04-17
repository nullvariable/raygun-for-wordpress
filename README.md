raygun-for-wordpress
====================

[Raygun.io](http://raygun.io), for WordPress.


Usage
------

Add the following to your wp-config file:
```php
define('RAYGUN_KEY', ""); //Enter your Raygun key here.
require(dirname(__FILE__).'/wp-content/plugins/raygun-for-wordpress/raygun4php/src/Raygun4php/RaygunClient.php');
require(dirname(__FILE__).'/wp-content/plugins/raygun-for-wordpress/raygun-for-wp-boot.php');
```
