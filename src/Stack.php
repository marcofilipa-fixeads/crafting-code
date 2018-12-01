<?php
/**
 * Stack
 *
 * PHP version 7
 *
 * @author Marco Filipa <marco.filipa@olx.com>
 * @copyright 2018 Olx@lisbonTechHub
 */


/**
 * Stack
 *
 *
 */
class Stack
{
    private $objects;
    /**
     * Stack constructor.
     */
    public function __construct()
    {
        $this->objects = [];
    }

    public function pop()
    {
        if(empty($this->objects))
            throw new Exception();

        return array_pop($this->objects);
    }

    public function push($stackElement1)
    {
        array_push($this->objects, $stackElement1);
    }
}