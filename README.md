> IMPORTANT: I found a better repo for a base bootstrap for PHP katas:

https://github.com/CodiumTeam/php-kata-bootstrap

# PHP Kata skeleton

Base project for katas. In order to perform a kata, first of all you will need to install all of the dependencies. This can be done using
composer.

## phpunit

Next, to execute the unit tests you need run this from the *php* directory

```shell
    .\bin\phpunit
```    
    
Coverage:

If your IDE doesn't handle it you can launch and visualize it from the command line. Given you are in  the *php* folder
just run

```shell
    .\bin\phpunit --coverage-text
```

If you want to visualize it from the browser you have to run PHPUnit with this parameters

```shell
    .\bin\phpunit --coverage-html report/
```

Then visualize

```shell
    .\report\index.html
```

in a browser

## phpspec

```shell
.\bin\phpspec desc Kata\Sut
.\bin\phpspec run 
```

## behat

```shell
.\bin\behat --init
.\bin\behat
```


