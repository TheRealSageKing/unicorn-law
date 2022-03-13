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
                            <li>search</li>
                            <li>{{ request()->input('term') }}</li>
                        </ul>
                    </div>
                    <div class="page-title">

                            <h2>Search Result</h2>

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
                <div class="col-md-12 col-lg-12">
                    <div class="sidebar-widgets">
                        <x-search-widget/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    @if( !empty($results) && count($results) > 0 )
                        @foreach( $results as $post )
                            <div class="single-blog">
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
                                {{ $results->links() }}
                            </div>
                        </div>
                    @else
                        <div class="single-blog">
                            <div class="blog-info">
                                <div class="blog-inner">
                                    <div class="blog-content">
                                        <p>No result found</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- blog-page-area end here -->
@endsection
