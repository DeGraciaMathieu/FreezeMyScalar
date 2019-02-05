<?php

namespace DeGraciaMathieu\FreezeMyScalar\Tests;

use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\FreezeMyScalar\FreezeString;
use DeGraciaMathieu\FreezeMyScalar\FreezeInteger;
use DeGraciaMathieu\FreezeMyScalar\Contracts\Scalar;
use DeGraciaMathieu\FreezeMyScalar\Exceptions\UnexpectedValueException;

class ScalarTests extends TestCase 
{
    /** 
     * @test
     */
    public function freeze_integer()
    {
        $scalar = new FreezeInteger(10);

        $this->isInstanceOf(FreezeInteger::class, $scalar);
        $this->isInstanceOf(Scalar::class, $scalar);
        $this->assertEquals($scalar->content(), 10);
    }

    /** 
     * @test
     */
    public function string_integer()
    {
        $scalar = new FreezeString('string');

        $this->isInstanceOf(FreezeString::class, $scalar);
        $this->isInstanceOf(Scalar::class, $scalar);
        $this->assertEquals($scalar->content(), 'string');
    }  

    /** 
     * @test
     */
    public function unexpected_value()
    {
        $this->expectException(UnexpectedValueException::class);

        new FreezeString(10);
    }   
}
