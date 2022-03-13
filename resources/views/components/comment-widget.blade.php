<div>
    <div class="comment-area">
        <div class="comment-section-title">
            <h2>{{ $comments->count() }} Comments</h2>
        </div>
        @if ( $comments->count() > 0 )

            @foreach( $comments as $comment)
                <div class="single-comment">
                    <div class="comment-inner">
                        <div class="comment-img">
                            <img src="{{ asset('images/blog/c1.png') }}" alt="comment">
                        </div>
                        <div class="comment-content">
                            <span class="comment-date"> {{ Illuminate\Support\Carbon::parse($comment->comment_date)->format('F d, Y') }} </span>
                            <h4 class="comment-title"> {{ $comment->comment_author }}</h4>
                            <div class="comment-text">
                                <p>{{ $comment->comment_content }}</p>
                            </div>
                            <div class="comment-reply">
                                <a href="#"></a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif


    </div>
    <div class="comment-form">
        <div class="comment-section-title">
            <h2>Post Comment</h2>
        </div>
        <form action="{{ route('comment.store') }}" method="post" >
            @csrf
            <input type="hidden" name="post_id" value="{{ $postId }}">
            <input type="hidden" name="author_ip" value="{{ request()->ip() }}">
            <input type="hidden" name="agent" value="{{ request()->userAgent() }}">
            <input type="hidden" name="parent_id" value="0">
            <div class="form-group comment">
                <i class="fa fa-pencil"></i>
                <textarea id="comment" name="comment" cols="45" rows="8" placeholder="Type your comments...." aria-required="true" ></textarea>
            </div>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input id="author" name="author" type="text" value="" size="30" placeholder="Type your name....">
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input id="email" name="author_email" type="text" value="" size="30" placeholder="Type your email....">
            </div>
            <div class="form-group">
                <i class="fa fa-globe"></i>
                <input id="website" name="author_url" type="text" value="" size="30" placeholder="Type your website....">
            </div>
            <div class="form-submit">
                <button type="submit" id="submit"> Post comment</button>
            </div>
        </form>
    </div>
</div>
