<?php

namespace App\Models;

use App\Models\User;
use App\Models\Backer;
use App\Models\Reward;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [
        'project_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function backers()
    {
        return $this->hasMany(Backer::class);
    }

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }
}