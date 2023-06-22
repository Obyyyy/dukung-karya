<?php

namespace App\Models;

use App\Models\User;
use App\Models\Backer;
use App\Models\Reward;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [
        'project_id',
    ];

    protected $primaryKey = 'project_id';

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function backers()
    {
        return $this->hasMany(Backer::class);
    }

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'project_name'
            ]
        ];
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['project_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}