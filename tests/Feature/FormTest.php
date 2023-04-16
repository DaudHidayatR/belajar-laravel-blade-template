<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{

    public function testForm()
    {
        $this->view('form', [ 'user' =>[
            'premium' => true,
            'name' => 'daud',
            'admin' => true
        ]])->assertSee('checked')
            ->assertSee('daud')
            ->assertDontSee('readonly');

        $this->view('form', [ 'user' =>[
            'premium' => false,
            'name' => 'daud',
            'admin' => false
        ]])->assertDontSee('checked')
            ->assertSee('daud')
            ->assertSee('readonly');
    }
}
