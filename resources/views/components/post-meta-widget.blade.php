<div class="blog-meta">
<ul>
    @php $postCategories = $post->taxonomies; @endphp

    @if ( !empty($postCategories) )
        @foreach( $postCategories as $cat)
            <li><i class="fa fa-tag"></i><span>{{ $cat->term->name }}</span></li>
        @endforeach
    @endif
</ul>
</div>
