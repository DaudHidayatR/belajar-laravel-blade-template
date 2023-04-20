<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{

    public function testInheritance()
    {
        $this->view('child', [])
            ->assertSeeText('Nama Aplikasi - Halaman Utama')
            ->assertSeeText('Default Header')
            ->assertSeeText('Deskripsi Header')
            ->assertDontSeeText('Default Content')
            ->assertSeeText('Ini Halaman Utama');
    }
    public function testInheritanceDefault()
    {
        $this->view('child-default', [])
            ->assertSeeText('Nama Aplikasi - Halaman Utama')
            ->assertDontSeeText('Deskripsi Header')
            ->assertDontSeeText('Ini Halaman Utama')
            ->assertSeeText('Default Header')
            ->assertSeeText('Default Content');
    }
}
