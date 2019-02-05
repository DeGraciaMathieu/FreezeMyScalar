<?php

namespace DeGraciaMathieu\FreezeMyScalar\Rules;

use DeGraciaMathieu\FreezeMyScalar\Contracts\Rule;

class StringRule implements Rule
{
    /**
     * @param  mixed $content
     * @return boolean
     */
    public function verify($content)
    {
        return is_string($content);
    }
}
