<?php

namespace Tests\Feature;

use Tests\TestCase;

class ErrorPagesTest extends TestCase
{
    /**
     * Test if 404 page is displayed for non-existent routes.
     */
    public function test_404_page_is_displayed_for_non_existent_route(): void
    {
        $response = $this->get('/non-existent-page');

        $response->assertStatus(404);
        $response->assertViewIs('errors.404');
    }

    /**
     * Test if 404 page contains the correct content.
     */
    public function test_404_page_contains_correct_content(): void
    {
        $response = $this->get('/non-existent-page');

        $response->assertSee('404');
        $response->assertSee('Page Not Found');
        $response->assertSee('The page you\'re looking for doesn\'t exist or has been moved');
    }
} 