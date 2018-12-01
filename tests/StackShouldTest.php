<?php
/**
 * StackShould
 *
 * PHP version 7
 *
 * @author Marco Filipa <marco.filipa@olx.com>
 * @copyright 2018 Olx@lisbonTechHub
 */

use \PHPUnit\Framework\TestCase;

/**
 * StackShould
 *
 *
 */
class StackShouldTest extends TestCase
{
    private $stack;
    private $stackElement1;
    private $stackElement2;

    public function setUp()
    {
        $this->stack = new Stack();
        $this->stackElement1 = 'element1';
        $this->stackElement2 = 'element2';
    }

//    /**
//     * @test
//     */
//    public function throw_exception_if_popped_when_empty()
//    {
//        $this->expectException(Exception::class);
//        $this->stack->pop();
//    }
//
//    /**
//     * @test
//     */
//    public function pop_the_last_object_pushed()
//    {
//        $this->stack->push($this->stackElement1);
//
//        $this->assertEquals($this->stackElement1, $this->stack->pop());
//    }
//
//    /**
//     * @test
//     */
//    public function pop_objects_in_the_reverse_order_they_were_pushed()
//    {
//        $this->stack->push($this->stackElement1);
//        $this->stack->push($this->stackElement2);
//
//        $this->assertEquals($this->stackElement2, $this->stack->pop());
//        $this->assertEquals($this->stackElement1, $this->stack->pop());
//    }


}