<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Image;
use App\Models\User;
use App\Models\Category;

class Product extends Model
{
    use HasFactory, HasSlug;


     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'content',
        'description',
        'status',
        'user_id',
        'image',
    ];
     /**
     * @return BelongsToMany
     */
    public function images()
    {
        return $this->hasMany(image::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeFilter(Builder $query, array $filter = []): Builder
    {
        if (!empty($filter['search'])) {
            return $query
                ->where('title', 'LIKE', "%{$filter['search']}%")
                ->orWhere('descripton', 'LIKE', "%{$filter['search']}%");
        }

        if (!empty($filter['user_id'])) {
            return $query
                ->where('user_id', $filter['user_id']);
        }

        return $query;
    }

}
