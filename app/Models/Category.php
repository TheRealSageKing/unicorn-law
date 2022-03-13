<?php

namespace App\Models;

use Corcel\Model\Taxonomy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Taxonomy
{
    use HasFactory;

    public static function getCategories()
    {
        return Taxonomy::category()->get();
    }

    public static function getCategoryPosts( $categorySlug )
    {
        return Category::slug($categorySlug)->first();
    }

}
