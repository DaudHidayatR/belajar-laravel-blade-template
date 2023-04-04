<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/Hello')
            ->assertSeeText('laravel');
    }
    public function testWorld()
    {
        $this->get('world')
            ->assertSeeText('daud');
    }
    public function testViewWithoutRouting()
    {
        $this->view('Hello', ['name' => 'laravel'])
            ->assertSeeText('laravel');
    }
}
