<?php
/**
 * Tests for SupabaseAuth
 */

use PHPUnit\Framework\TestCase;
use Supabaseauth\Supabaseauth;

class SupabaseauthTest extends TestCase {
    private Supabaseauth $instance;

    protected function setUp(): void {
        $this->instance = new Supabaseauth(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Supabaseauth::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
