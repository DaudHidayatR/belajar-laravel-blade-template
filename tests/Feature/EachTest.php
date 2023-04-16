<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', ['users' => [
            [
                'name' => 'Daud',
                'hobbies' => ['coding', 'gaming']
            ],
            [
                'name' => 'hidayat',
                'hobbies' => ['coding', 'gaming']
            ]
        ]])->assertSeeInOrder([
            '.red',
            'Daud',
            'coding',
            'gaming',
            'hidayat',
            'coding',
            'gaming'
        ]);
    }
}
