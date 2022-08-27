<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddTest extends TestCase
{
    public function test_add_screen_can_be_rendered()
    {
        $response = $this->get('/add');

        $response->assertStatus(200);
    }

    public function test_a_add_view_can_rendered_content()
    {
        $view = $this->view('add', ['name' => 'Esta es la add page']);
 
        $view->assertSee('Esta es la add page');
    }
}
