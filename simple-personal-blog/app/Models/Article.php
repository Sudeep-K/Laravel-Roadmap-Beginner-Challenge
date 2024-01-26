<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the user that owns the article
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the tags that the article uses
     */
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the category of the article
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'picture',
        'user_id',
        'category_id'
    ];
}
