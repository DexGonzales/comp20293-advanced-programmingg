<?php
require_once __DIR__ . '/../src/Program2.php';

class Program2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $program2 = new Program2();
        $program2->setName('Dexter');
        $this->assertEquals($program2->getName(), 'Dexter');
    }

    public function testGetAge()
    {
        $program2 = new Program2();
        $program2->setAge(21);
        $this->assertEquals($program2->getAge(), 21);
    }

    public function testFaveColor()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Green');
        $this->assertEquals($program2->getFaveColor(), 'Green');
    }

    public function testGetNameCheckString()
    {
        $program2 = new Program2();
        $program2 ->setName('Dexter');
        $this->assertIsString($program2->getName(), 'Dexter');
    }

    public function testGetAgeCheckInt()
    {
        $program2 = new Program2();
        $program2->setAge(21);
        $this->assertIsInt($program2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $program2 = new Program2();
        $program2->setAge(21);
        $this->assertIsNumeric($program2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Green');
        $this->assertIsString($program2->getFaveColor(), 'Green');
    }

    public function testGetTogetherInput()
    {
        $program2 = new Program2();
        $program2->setTogetherInput('Dexter', 20, 'Green');
        $this->assertEquals($program2->getTogetherInput(), 'Dexter', 20, 'Green');
    }
}