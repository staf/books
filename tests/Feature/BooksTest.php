<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BooksTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_book_can_be_created()
    {
        $response = $this->postJson('/book', [
            'name' => 'Book Title',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'name' => 'Book Title',
        ]);

        $this->assertDatabaseHas('books', [
            'name' => 'Book Title'
        ]);
    }
}
