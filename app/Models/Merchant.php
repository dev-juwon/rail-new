<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;


class Merchant extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'logo', 'name', 'description', 'auto_approve_affiliates'];

    protected $appends = ['logoImageUrl'];

    protected $casts = ['user_is_subscribed' => 'boolean', 'auto_approve_affiliates' => 'boolean'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }

    public function getLogoImageUrlAttribute()
    {
        if($this->logo){
            return $this->logo;
            return Storage::url($this->logo);
        }
        return null;
    }

    public function category()
    {
        return $this->belongsTo(PCategory::class);
    }

    public function getClicksAttribute()
    {
        if (!$this->programs->count()){
            return 0;
        }
        return $this->programs->reduce(function($carry, $item){return $carry + $item->clicks;});
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }


}
