<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'image_url',
        'project_url',
        'source_code_url',
        'notion_url',
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technology')
            ->withPivot('type')
            ->withTimestamps();
    }

    public function languages()
    {
        return $this->technologies()->wherePivot('type', 'language');
    }

    public function frameworks()
    {
        return $this->technologies()->wherePivot('type', 'framework');
    }

    public function databases()
    {
        return $this->technologies()->wherePivot('type', 'database');
    }
}
