<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisableTest extends TestCase
{
    public function testDisabled()
    {
        $this->view('disabled', ['name' => 'daud'])
            ->assertDontSeeText('daud')
            ->assertSeeText('Hello {{$name}}');
    }
}
