<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = Post::getPosts();
        $categories = Category::getCategories();
        return view('pages.news.index', compact(['news', 'categories']));
    }

    public function single($slug)
    {
        $post = Post::getPostFromSlug($slug);
        $categories = Category::getCategories();
        $recentPosts = Post::getRecentPosts($slug);
        return view('pages.news.single', compact(['post','categories', 'recentPosts']));
    }

    public function categoryPosts( $categorySlug )
    {
        $category = Category::getCategoryPosts( $categorySlug );
        $news = $category->posts()->paginate(10);
        $categories = Category::getCategories();

        $categoryName = $category->name;

        return view('pages.news.index', compact(['news','categoryName', 'categories']));
    }



    public function search(SearchRequest $request)
    {
        try{
            $request->validated();
            $safeTerm = strip_tags($request->input('term'));
            $results = Post::searchPosts($safeTerm)->paginate(10);

            return view('pages.news.search', compact('results'));
        }catch(\Exception $ex)
        {
            Log::error( $ex->getMessage());
            return redirect()->route('news')->with('error', 'Post was not found');
        }
    }
}
