<?php

namespace App\Models;

use Corcel\Model\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Corcel\Model\Post as Corcel;

class Page extends Corcel
{
    use HasFactory;

    public static function getPageData()
    {
        return Post::where('post_type', 'landing')->get();
    }
}
