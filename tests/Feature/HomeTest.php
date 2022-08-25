<?php

namespace Tests\Feature;
use Tests\TestCase;

class HomeTest extends TestCase
{
    
    public function test_home_screen_can_be_rendere()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
