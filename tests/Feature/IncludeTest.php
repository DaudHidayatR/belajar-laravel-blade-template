<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{

    public function testInclude()
    {
        $this->view('include',[])
            ->assertSeeText('Daud Hidayat Ramadhan')
            ->assertSeeText('Selamat Datang di website kami')
            ->assertSeeText('Selamat Datang di web');

        $this->view('include',['title' => 'Daud'])
            ->assertSeeText('Daud')
            ->assertSeeText('Selamat Datang di website kami')
            ->assertSeeText('Selamat Datang di web');
    }

}
