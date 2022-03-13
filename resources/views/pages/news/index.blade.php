@extends('layouts.base')
@section('content')

    <!-- breadcumb-area area start here -->
    <div class="breadcumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="breadcumb-page">
                        <ul>
                            <li><a  href="{{ url('/') }}">Home</a></li>
                            <li>blog</li>
                        </ul>
                    </div>
                    <div class="page-title">
                        @if ( isset($categoryName) )
                            <h2>{{ $categoryName }}</h2>
                        @else
                            <h2>News Feeds</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area area end here -->
    <!-- blog-page-area start here -->
    <div class="blog-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    @if( !empty($news) && count($news) > 0 )
                        @foreach( $news as $post )
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href={{ route('news.single', $post->slug) }}><img src="{{ $post->image ? $post->image : asset('images/blog/1.jpg') }}" alt="blog"></a>
                        </div>
                        <div class="blog-info">
                            <div class="blog-inner">
                                <x-post-meta-widget :post="$post" />
                                <div class="blog-title">
                                    <h3><a href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a></h3>
                                </div>
                                <div class="blog-content">
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                                <a href="{{ route('news.single', $post->slug) }}" class="readmore-btn mt-17 mb-10">Read More</a>
                            </div>
                        </div>
                    </div>
                        @endforeach

                    <div class="row">
                        <div class="col-sm-12">
                            {{ $news->links() }}
                        </div>
                    </div>
                    @else
                        <div class="single-blog">
                            <div class="blog-info">
                                <div class="blog-inner">
                                    <div class="blog-content">
                                        <p>No content available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="sidebar-widgets">
                        <x-search-widget />
                        <x-social-follow-widget />
                        <x-category-widget :categories="$categories" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-page-area end here -->
@endsection
