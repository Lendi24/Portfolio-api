<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTag extends Model
{
    use HasFactory;

    protected $table = "contact_tags";
    protected $primaryKey = "id";

    public function appliedContactTags() {
        return $this->hasMany(AppliedContactTag::class);
    }
}
