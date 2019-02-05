<?php

namespace DeGraciaMathieu\FreezeMyScalar;

use DeGraciaMathieu\FreezeMyScalar\Exceptions;

class Checker 
{
    /**
     * @param  string $rule
     * @param  mixed $content
     * @throws \DeGraciaMathieu\FreezeMyScalar\Exceptions\CheckerException
     * @return void
     */
    public static function passes($rule, $content)
    {
        $rule = new $rule;

        if (! $rule->verify($content)) {
            throw new Exceptions\CheckerException();
        }
    }
}
