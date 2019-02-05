<?php

namespace DeGraciaMathieu\FreezeMyScalar\Contracts;

interface Rule
{
    /**
     * @param  mixed $content
     * @return boolean
     */ 	
    public function verify($content);
}
