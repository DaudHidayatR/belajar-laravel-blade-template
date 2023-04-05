<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{

    public function testIssetEmpty()
    {
        $this->view('isset-empty', [

        ])->assertDontSeeText('Hello,')
            ->assertSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', [
            'name'=> 'daud'
        ])->assertSeeText('Hello, my name is daud')
            ->assertSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', [
            'hobbies' => ['Coding']
        ])->assertDontSeeText('Hello,')
            ->assertDontSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', [
            'name'=> 'daud',
            'hobbies' => ['Coding']
        ])->assertSeeText('Hello, my name is daud')
            ->assertDontSeeText("I don't have any hobbies", false);
    }
}
