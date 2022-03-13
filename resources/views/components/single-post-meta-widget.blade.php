<div class="blog-meta">
    <ul>
        @php $postCategories = $post->taxonomies; @endphp

        @if ( !empty($postCategories) )
            @foreach( $postCategories as $cat)
                <span><i class="fa fa-tag"></i><span>{{ $cat->term->name }}</span> | </span>
            @endforeach
        @endif
    </ul>
</div>
