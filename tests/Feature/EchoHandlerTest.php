<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoHandlerTest extends TestCase
{

    public function testEcho()
    {
        $person = new Person();
        $person->name = 'Daud';
        $person->address = 'Indonesia';

        $this->view('echo', ["person" => $person])
            ->assertSeeText('Daud Indonesia');
    }
}
