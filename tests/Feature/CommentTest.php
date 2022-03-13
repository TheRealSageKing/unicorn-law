<?php

namespace Tests\Feature;

use Corcel\Model\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /** @test */
    public function a_user_can_add_comment_to_a_post()
    {
        //given we have a post
        $post = Post::where('post_type', 'post')->find(35);;
        //and we have created a comment
        $comment = [
            'author' => 'Dammy',
            'author_url' => 'somewebsite@gmail.com',
            'author_ip' => '10.2.2.1',
            'author_email' => 'admin@admin.com',
            'comment' => 'A demo comment',
            'agent' => 'Mozilla',
            'post_id' => $post->ID,
            'parent_id' => 0
        ];
        //dd($comment);
        //on submit the comment
        $this->post('/comment', $comment)
            ->assertStatus(302)
            ->assertRedirect(route('news.single', $post->slug));

    }
}
