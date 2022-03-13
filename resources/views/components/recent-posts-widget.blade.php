<div class="single-widget recentpost_widget">
    <div class="widget-title">
        <h2><span>Feeds</span></h2>
    </div>
    <div class="recentpost-list ">
        @if ( !empty( $posts ) && count($posts) > 0 )
            @foreach( $posts as $recent)
                <div class="single-post">
                    <div class="media">
                        <div class="post-img mr-3">
                            <a href="#"><img src="{{ $recent->image? $recent->image :  asset('images/blog/r1.png') }}" class="post-img-thumbnail" alt="recent post"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="mt-0"><a href="#">{{ $recent->post_title }}</a></h4>
                            <div class="time">
                                <p><i class="fa fa-clock-o"></i> <span> {{ Illuminate\Support\Carbon::parse($recent->post_date)->diffForHumans() }}  </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
