<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageTag extends Model
{
    use HasFactory;

    protected $table = "language_tags";
    protected $primaryKey = "id";

    public function appliedLanguageTags() {
        return $this->hasMany(AppliedLanguageTag::class);
    }
}
