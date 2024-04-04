<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Farel");
    }

    public function testHelloWorld()
    {
        $this->get("/world")
            ->assertSeeText("Farel");
    }

    public function testHelloView()
    {
        $this->view("/hello", ["name" => "Farel"])
            ->assertSeeText("Farel");
    }

    public function testHelloWorldView()
    {
        $this->view("/hello.world", ["name" => "Farel"])
            ->assertSeeText("Farel");
    }
}