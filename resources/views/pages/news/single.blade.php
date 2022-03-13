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
                            <li><a  href="{{ route('news') }}">News</a></li>
                            <li> {{ $post->post_title }}</li>
                        </ul>
                    </div>
                    <div class="page-title">
                        <h2>News Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area area end here -->
    <!-- blog-page-area start here -->
    <div class="blog-datails-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="single-blog">
                        <div class="blog-img">
                            <img src="{{ $post->image ? $post->image : asset('images/blog/1.jpg') }}" alt="blog">
                        </div>
                        <x-single-post-meta-widget :post="$post" />
                        <div class="blog-title">
                            <h2> {{ $post->title }}</h2>
                        </div>
                        <div class="blog-content">
                            {!! $post->content  !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-4 offset-md-2">
                                <div class="social-share ss-padding">
                                    <h4>Social Share</h4>
                                    <div class="share-list">
                                        {!!  Share::page( Request::url(), null, [], '<ul>', '</ul>')->facebook()
                                     ->twitter()
                                     ->linkedin('Extra linkedin summary can be passed here')
                                     ->whatsapp() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-comment-widget :comments="$post->comments" :postId="$post->ID"/>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="sidebar-widgets">
                        <x-search-widget/>
                        <x-social-follow-widget />
                        <x-category-widget :categories="$categories"/>
                        <x-recent-posts-widget :posts="$recentPosts"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-page-area end here -->
@endsection
