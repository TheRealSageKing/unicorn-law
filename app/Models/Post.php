<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Corcel\Model\Post as Corcel;

class Post extends Corcel
{
    use HasFactory;

    public static function getPosts()
    {
        return Post::where('post_type', 'post')->latest()->published()->paginate(5);
    }

    public static function getPostFromSlug($slug)
    {
        return Post::where('post_type', 'post')->slug($slug)->firstOrFail();
    }

    public static function getRecentPosts($slug)
    {
        return Post::where('post_type', 'post')->where('post_name','!=', $slug)->latest()->published()->limit(5)->get();
    }

    public static function getPostFromId($id)
    {
        return Post::where('post_type', 'post')->find($id);
    }

    public static function searchPosts($term)
    {
        return Post::published()->with('taxonomies')->where('post_title','like' ,'%'.$term.'%');
    }

    public function getPostThumbnail()
    {
        try{

            if ( $this->image !== null )
            {
                return $this->image;
            }
            return asset('images/blog/1.jpg');
        }catch(\Exception $ex)
        {
            return asset('images/blog/1.jpg');
        }
    }
}
