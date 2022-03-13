<?php

namespace Tests\Feature;

use Corcel\Model\Taxonomy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     @test
     */
    public function a_user_can_view_posts_associated_to_a_category()
    {
        //get category
        $category = Taxonomy::category()->first();
        //visit category
        $this->get('/news/category/'.$category->slug)->assertStatus(200);

    }
}
