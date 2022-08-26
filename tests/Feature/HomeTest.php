<?php

namespace Tests\Feature;
use Tests\TestCase;

class HomeTest extends TestCase
{
    
    public function test_home_screen_can_be_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_home_view_can_rendered_content()
    {
        $view = $this->view('home', ['name' => 'Esta es la home page']);
 
        $view->assertSee('Esta es la home page');
    }
}
