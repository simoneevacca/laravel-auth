<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function types(){
        return $this->belongsTo(Type::class);
    }

    protected $fillable = ['project_name', 'slug', 'description', 'preview_image', 'link_view', 'link_code'];
}
