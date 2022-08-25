<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DescriptionTest extends TestCase
{
    public function test_home_screen_can_be_rendere()
    {
        $response = $this->get('/description');

        $response->assertStatus(200);
    }
}
