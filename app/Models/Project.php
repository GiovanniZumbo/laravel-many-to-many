<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies()
    {
        return $this->BelongsToMany(Technology::class);
    }

    protected $fillable = ["title", "type_id", 'description', 'image_url', 'git_url'];
}
