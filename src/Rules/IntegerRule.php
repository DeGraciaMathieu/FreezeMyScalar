<?php

namespace DeGraciaMathieu\FreezeMyScalar\Rules;

use DeGraciaMathieu\FreezeMyScalar\Contracts\Rule;

class IntegerRule implements Rule
{
    /**
     * @param  mixed $content
     * @return boolean
     */    
    public function verify($content)
    {
        return is_int($content);
    }
}
