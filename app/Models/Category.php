<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory, HasSlug;

   /* The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
       'name',
       'slug',
       'user_id',
   ];


   public function children()
   {
       return $this->hasMany(Category::class, 'parent_id', 'id');
   }

    


}
