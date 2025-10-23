<?php

declare(strict_types= 1);

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testTrueIsTrue(): void
    {
        $this->assertTrue(true); 
    }
    // public function testTrueIsTrue2(): void
    // {
    //     $this->assertTrue(false, "This assertion is supposed to fail."); 
    // }
    // public function testFalseIsFalse(): void
    // {
    //     $this->assertFalse(true); 
    // }
}