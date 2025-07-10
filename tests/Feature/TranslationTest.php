<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;  
class TranslationTest extends TestCase
{
    
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_export_translations()
    {
        $this->withoutExceptionHandling(); 
        $response = $this->actingAs(User::factory()->create(), 'sanctum')
            ->getJson('/api/export/en');

        $response->assertStatus(200);
    }

}
