<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{

    public function testSwitch()
    {
        $this->view('switch', ['value' => 'A'])
            ->assertSeeText('memuaskan');
        $this->view('switch', ['value' => 'B'])
            ->assertSeeText('bagus');
        $this->view('switch', ['value' => 'C'])
            ->assertSeeText('cukup');
        $this->view('switch', ['value' => []])
            ->assertSeeText('tidak lulus');
    }
}
