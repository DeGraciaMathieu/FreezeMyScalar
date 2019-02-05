<p align="center">
<img src="https://nsa40.casimages.com/img/2019/02/05//190205101808386466.png" width="300">
</p>
<p align="center">
 <a href="https://www.codacy.com/app/DeGraciaMathieu/FreezeMyScalar?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/FreezeMyScalar&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/6b3de0e48bf143ae8690b53fdf2a8865"/></a>
<a href="https://scrutinizer-ci.com/g/degraciamathieu/freezemyscalar/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/FreezeMyScalar/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://travis-ci.org/DeGraciaMathieu/FreezeMyScalar"><img src="https://travis-ci.org/DeGraciaMathieu/FreezeMyScalar.svg?branch=master" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/DeGraciaMathieu/FreezeMyScalar/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/FreezeMyScalar/badges/coverage.png?b=master" alt="Code Coverage"></a>
<a href="https://packagist.org/packages/degraciamathieu/freezemyscalar"><img src="https://img.shields.io/packagist/v/degraciamathieu/freezemyscalar.svg?style=flat-square" alt="Latest Version on Packagist"></a>
<a href='https://packagist.org/packages/degraciamathieu/freezemyscalar'><img src='https://img.shields.io/packagist/dt/degraciamathieu/freezemyscalar.svg?style=flat-square' /></a>
</p>

# DeGraciaMathieu/FreezeMyScalar

If you can not use php7... you can still use this.
```php
class Object {
    public function foo(FreezeString $string) {}
}

(new $object)->foo(new FreezeString('string'));
```
Instead of this
```php
class Object {
    public function foo($string) {}
}

(new $object)->foo('string');
```
It's better than nothing ¯\\_(ツ)_/¯
 
## Installation
 
Run in console below command to download package to your project:

```
composer require degraciamathieu/freezemyscalar

```
## Usage

```php
require 'vendor\autoload.php';

use DeGraciaMathieu\FreezeMyScalar\FreezeString;

$scalar = new FreezeString('qsdqsdq');
$scalar->content(); // 'qsdqsdq'
```

```php
require 'vendor\autoload.php';

use DeGraciaMathieu\FreezeMyScalar\FreezeInteger;

$scalar = new FreezeInteger(10);
$scalar->content(); // 10
```

```php
require 'vendor\autoload.php';

use DeGraciaMathieu\FreezeMyScalar\FreezeString;

new FreezeString(10); 
// throws \DeGraciaMathieu\FreezeMyScalar\Exceptions\UnexpectedValueException
```
