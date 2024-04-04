<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Farel",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Mercys",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])
            ->assertSeeInOrder([
                ".red",
                "Farel",
                "Coding",
                "Gaming",
                "Mercys",
                "Coding",
                "Gaming"
            ]);
    }
}
