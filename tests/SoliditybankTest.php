<?php
/**
 * Tests for SolidityBank
 */

use PHPUnit\Framework\TestCase;
use Soliditybank\Soliditybank;

class SoliditybankTest extends TestCase {
    private Soliditybank $instance;

    protected function setUp(): void {
        $this->instance = new Soliditybank(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditybank::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
