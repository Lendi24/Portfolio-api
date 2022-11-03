<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'description',

        'image_URL',
        'writeup_URL',
    ];

    public function appliedLanguageTags() {
        return $this->hasMany(AppliedLanguageTag::class);
    }

    public function appliedPlattformTags() {
        return $this->hasMany(AppliedPlattformTag::class);
    }

}
