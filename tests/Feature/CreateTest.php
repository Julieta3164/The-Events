<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    public function test_create_screen_can_be_rendered()
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    public function test_a_create_view_can_rendered_content()
    {
        $view = $this->view('create', ['name' => 'Esta es la create page']);
 
        $view->assertSee('Esta es la create page');
    }
}
