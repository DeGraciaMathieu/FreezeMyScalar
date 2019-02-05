<p align="center">
<img src="https://nsa40.casimages.com/img/2019/02/05//190205101808386466.png" width="300">
</p>
<p align="center">
<a href="https://www.codacy.com/app/DeGraciaMathieu/FreezeMyScalar?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/FreezeMyScalar&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/d662a4fa526a4a709d3ad1991cba2533" alt="Codacy Badge"></a>
<a href="https://scrutinizer-ci.com/g/degraciamathieu/riddler/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://travis-ci.org/DeGraciaMathieu/Riddler"><img src="https://travis-ci.org/DeGraciaMathieu/Riddler.svg?branch=master" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/coverage.png?b=master" alt="Code Coverage"></a>
<a href="https://packagist.org/packages/degraciamathieu/riddler"><img src="https://img.shields.io/packagist/v/degraciamathieu/riddler.svg?style=flat-square" alt="Latest Version on Packagist"></a>
<a href='https://packagist.org/packages/degraciamathieu/riddler'><img src='https://img.shields.io/packagist/dt/degraciamathieu/riddler.svg?style=flat-square' /></a>
</p>


# DeGraciaMathieu/FreezeMyScalar

If you can not use php7... you can still use this.

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

$scalar = new FreezeString(10); 
// throws \DeGraciaMathieu\FreezeMyScalar\Exceptions\CheckerException
```
