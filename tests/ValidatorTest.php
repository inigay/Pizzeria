<?php

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:15 PM
 */
class ValidatorTest extends PHPUnit_Framework_TestCase
{
    private $validator;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->validator = new \Pizzaria\Validation\Validator();
    }

    public function testNoBaseProvidedThrowsException()
    {

    }

}