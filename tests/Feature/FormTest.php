<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Farel",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Farel")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Farel",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Farel")
            ->assertSee("readonly");
    }
}
