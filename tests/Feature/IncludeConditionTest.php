<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{

    public function testIncludeConditon()
    {
        $this->view('include-condition', [
            'user' => [
                'name' => 'daud',
                'owner' => true
            ]
        ])->assertSeeText('Selamat Datang Owner')
            ->assertSeeText('Selamat Datang daud');
    }
}
