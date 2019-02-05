<?php

namespace DeGraciaMathieu\FreezeMyScalar;

use DeGraciaMathieu\FreezeMyScalar\Contracts\Scalar;

class FreezeString extends AbstractScalar implements Scalar 
{
    protected $rule = Rules\StringRule::class;
}
