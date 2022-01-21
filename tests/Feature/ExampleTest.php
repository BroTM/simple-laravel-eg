<?php

namespace Tests\Feature;

use App\Models\Box;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBoxContents()
 {
    $response = $this->get('/test');

    $response->assertStatus(200);
    $response->assertDontSee('Test');
 }
}
