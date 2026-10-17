<?php
/**
 * Tests for RoughRipple
 */

use PHPUnit\Framework\TestCase;
use Roughripple\Roughripple;

class RoughrippleTest extends TestCase {
    private Roughripple $instance;

    protected function setUp(): void {
        $this->instance = new Roughripple(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughripple::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
