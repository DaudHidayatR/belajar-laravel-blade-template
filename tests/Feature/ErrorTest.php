<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{

    public function testError()
    {
        $error = [
            'name' => 'Name is required',
            'password' => 'password is required'
        ];
        $this->withViewErrors($error)
            ->view('error', [])
            ->assertSeeText('Name is required')
            ->assertSeeText('password is required');
    }
}
