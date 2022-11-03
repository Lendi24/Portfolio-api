<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlattformTag extends Model
{
    use HasFactory;

    protected $table = "plattform_tags";
    protected $primaryKey = "id";

    public function appliedPlattformTags() {
        return $this->hasMany(AppliedPlattformTag::class);
    }
}
