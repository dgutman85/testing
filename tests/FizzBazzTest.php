<?php

use PHPUnit\Framework\TestCase;
use App\FizzBazz;

class FizzBazzTest extends TestCase
{
    /**
    * @test
    */
    public function retrieveFizzBazz()
    {
        $fizzbazz = new FizzBazz();
        $this->assertEquals('fizzbazz', $fizzbazz->getNumber(15));
    }

    /**
    * @test
    */
    public function retrieveFizz()
    {
        $fizzbazz = new FizzBazz();
        $this->assertEquals('fizz', $fizzbazz->getNumber(3));
    }

    /**
    * @test
    */
    public function retrieveBazz()
    {
        $fizzbazz = new FizzBazz();
        $this->assertEquals('bazz', $fizzbazz->getNumber(5));
    }

    /**
    * @test
    */
    public function retrieveNumber()
    {
        $fizzbazz = new FizzBazz();
        $this->assertEquals(1, $fizzbazz->getNumber(1));
    }
}
