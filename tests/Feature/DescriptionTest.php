<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DescriptionTest extends TestCase
{
    public function test_description_screen_can_be_rendere()
    {
        $response = $this->get('/description');

        $response->assertStatus(200);
    }

    public function test_a_description_view_can_rendered_content()
    {
        $view = $this->view('description', ['name' => 'Esta es la description page']);
 
        $view->assertSee('Esta es la description page');
    }
}
