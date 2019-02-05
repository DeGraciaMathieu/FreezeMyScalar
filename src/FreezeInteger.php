<?php

namespace DeGraciaMathieu\FreezeMyScalar;

use DeGraciaMathieu\FreezeMyScalar\Contracts\Scalar;

class FreezeInteger extends AbstractScalar implements Scalar 
{
    protected $rule = Rules\IntegerRule::class;
}
