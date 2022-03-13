<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CommentWidget extends Component
{
    public $comments;
    public $postId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $comments , $postId )
    {
        $this->comments = $comments;
        $this->postId = $postId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment-widget');
    }
}
