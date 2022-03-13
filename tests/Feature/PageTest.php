<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    /** @test */
    public function a_user_can_vist_the_homepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_navigate_to_about_page()
    {
        $response = $this->get('/about-us');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_navigate_to_practice_area_page(){
        $response = $this->get('/practice-areas');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_view_a_single_practice_area()
    {
        $response = $this->get('/practice-areas/practice-area-slug');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_navigate_to_careers_page()
    {
        $response = $this->get('/careers');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_view_a_single_career_detail()
    {
        $response = $this->get('/careers/career-slug');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_navigate_to_news_page()
    {
        $this->get('/news')->assertStatus(200);
    }

    /** @test */
    public function a_user_can_read_a_single_news_item()
    {
        $this->get('/news/hello-world')->assertStatus(200);
    }

    /** @test */
    public function a_user_can_search_for_news_on_search_bar()
    {
        $term = 'random%20test';
        $this->get('/news/search?term='.$term)->assertStatus(200);
            //->assertRedirect('news/search');
    }
}
