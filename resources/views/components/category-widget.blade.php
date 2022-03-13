<div class="single-widget categories_widget">
    <div class="widget-title">
        <h2><span>Categories</span></h2>
    </div>
    <div class="categories-list ">
        <ul>
            @if( !empty($categories) && count($categories) > 0 )
                @foreach( $categories as $category)
                    <li><a href="{{ route('news.category.posts', $category->slug) }}"> {{ $category->name }}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
