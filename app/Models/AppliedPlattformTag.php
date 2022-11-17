<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedPlattformTag extends Model
{
    use HasFactory;

    protected $table = "applied_plattform_tags";
    protected $primaryKey = "id";

    protected $fillable = [
        'project_id', 'plattform_tag_id', 'target',
    ];

    public function plattformTag() {
        return $this->belongsTo(PlattformTag::class);
    }
}
