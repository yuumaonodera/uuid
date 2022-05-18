<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    public function testHeloo()
    {
        User::factory()->create([
            'name'=>'aaa',
            'email'=>'bbb@cc.com',
            'password'=>'test12345'
        ]);
        $this->assertDataseHas('users',[
            'name'=>'aaa',
            'email'=>'bbb@ccc.com',
            'password'=>'test12345'
        ]);
    }
}