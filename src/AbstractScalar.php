<?php

namespace DeGraciaMathieu\FreezeMyScalar;

abstract class AbstractScalar
{
    /**
     * @var mixed
     */
    protected $content = null;

    /**
     * @param mixed $content
     * @throws \DeGraciaMathieu\FreezeMyScalar\Exceptions\CheckerException
     */
    public function __construct($content)
    {
        Checker::passes($this->rule, $content);

        $this->content = $content;
    }

    /**
     * @return return mixed
     */
    public function content()
    {
        return $this->content;
    }
}
