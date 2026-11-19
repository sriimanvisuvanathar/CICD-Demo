<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Greeting.php';
class GreetingTest extends TestCase
{
    // Test Case 1
    public function testGreetingForJohn(): void
    {
        $result = greet("John");
        $this->assertSame(
            "Welcome to our CI/CD demonstration, John!",
            $result
        );
    }

    // Test Case 2
    public function testGreetingForMary(): void
    {
        $result = greet("Mary");

        $this->assertSame(
            "Welcome to our CI/CD demonstration, Mary!",
            $result
        );
    }
}
