<?php

namespace Tests\Feature;

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
        \Auth::loginUsingId(1);
        $response = $this->get('/posts/');
        $response->assertStatus(200);

        $response = $this->get('/posts/create');
        $response->assertStatus(200);

        $response = $this->post('/posts/store', [
            'title' => 'testdata',
            'content' => 'testdata'
        ]);
        $response->assertStatus(302);

    }
}
