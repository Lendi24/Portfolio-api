<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedLanguageTag extends Model
{
    use HasFactory;

    protected $table = "applied_language_tags";
    protected $primaryKey = "id";

    public function languageTag() {
        return $this->belongsTo(LanguageTag::class);
    }
}
