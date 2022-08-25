<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddTest extends TestCase
{
    public function test_home_screen_can_be_rendere()
    {
        $response = $this->get('/add');

        $response->assertStatus(200);
    }
}
