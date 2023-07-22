<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkingHours extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['working_days', 'subjects_per_days','total_subjects','total_hours_of_week','is_deleted', 'created_at', 'updated_at'];
}
