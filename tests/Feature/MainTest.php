<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MainTest extends TestCase
{
    /** @test */
    public function it_show_main_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
