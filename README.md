Welcome to PIMF Blog bundle
===========================
This Blog is a run ready bundle, which uses PIMF framework including a blog application based on SQLite database.
Here you can learn how to work with Pimf_EntityManager, Pimf_Util_Validator and Pimf_View.

System Requirements
-------------------
This bundle has system requirements to PHP's extensions: "PDO" and "pdo_sqlite". The extentions
have to be compiled within your PHP. Please check by executing **php -m** on you command interface - and
take a look for them. If they are there than everything will be fine - otherwise please navigate
to http://www.php.net/manual/pdo.setup.php and find out how to recompile them to your PHP version.

Installation & Configuration
----------------------------

1. git clone --recursive https://github.com/gjerokrsteski/pimf-blog.git

2. cd pimf-blog/

3. update submodules
```php  
  git submodule --quiet sync
  git submodule --quiet update --force --init --recursive
    git submodule foreach git pull --force origin v1.9.0
```
4. php pimf core:init

5. Navigate to your application in a web browser. If all is well, you should see a pretty PIMF splash page. Get ready - there is lot more to learn!
       
Alternatively you can run the PHP's built-in web server that is provided since PHP 5.4.0
  
```php   
  php -S localhost:8000
```

Please notice: this web server was designed to aid application development. It may also be useful for testing purposes or for 
application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server. 
It should not be used on a public network.

Learning PIMF
-------------
One of the best ways to learn PIMF is to read through the entirety of its documentation. This guide details all aspects of the framework and how to apply them to your application. https://github.com/gjerokrsteski/pimf/wiki

Read the PIMF book almost anywhere. Available as a PDF, EPUB and MOBI. You can now read it on all devices, as well as offline: https://leanpub.com/pimf-starter/
