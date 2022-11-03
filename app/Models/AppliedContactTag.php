<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedContactTag extends Model
{
    use HasFactory;

    protected $table = "applied_contact_tags";
    protected $primaryKey = "id";

    public function contactTag() {
        return $this->belongsTo(ContactTag::class);
    }
}
