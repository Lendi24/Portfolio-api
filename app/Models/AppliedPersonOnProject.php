<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedPersonOnProject extends Model
{
    use HasFactory;

    protected $table = "applied_users_on_projects";
    protected $primaryKey = "id";

    protected $fillable = [
        'project_id', 'person_id', 'order'
    ];

    public function plattformTag() {
        return $this->belongsTo(PlattformTag::class);
    }

    public function personTag() {
        return $this->belongsTo(Person::class);
    }
}
