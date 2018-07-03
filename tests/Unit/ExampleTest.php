<?php

namespace Tests\Unit;

use App\Http\Controllers\PostController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);

        $controller = new PostController();
        $result = $controller->index();
        $this->assertNotEmpty($result);
    }
}
