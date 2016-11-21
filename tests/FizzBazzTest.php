<?php

use PHPUnit\Framework\TestCase;
use App\FizzBazz;

class FizzBazzTest extends TestCase
{
    protected $fizzbazz;

    public function setUp() {
        $this->fizzbazz = new FizzBazz();
    }

    /**
    * @test
    */
    public function retrieveFizzBazz()
    {
        $this->assertEquals('fizzbazz', $this->fizzbazz->getNumber(15));
    }

    /**
    * @test
    */
    public function retrieveFizz()
    {
        $this->assertEquals('fizz', $this->fizzbazz->getNumber(3));
    }

    /**
    * @test
    */
    public function retrieveBazz()
    {
        $this->assertEquals('bazz', $this->fizzbazz->getNumber(5));
    }

    /**
    * @test
    */
    public function retrieveNumber()
    {
        $this->assertEquals(1, $this->fizzbazz->getNumber(1));
    }
}
